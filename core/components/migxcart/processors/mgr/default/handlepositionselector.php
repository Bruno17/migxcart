<?php

if (empty($scriptProperties['object_id'])) {
    $updateerror = true;
    $errormsg = $modx->lexicon('quip.thread_err_ns');
    return;
}

$config = $modx->migx->customconfigs;
$prefix = isset($config['prefix']) && !empty($config['prefix']) ? $config['prefix'] : null;

if (isset($config['use_custom_prefix']) && !empty($config['use_custom_prefix'])) {
    $prefix = isset($config['prefix']) ? $config['prefix'] : '';
}
$packageName = $config['packageName'];

$packagepath = $modx->getOption('core_path') . 'components/' . $packageName . '/';
$modelpath = $packagepath . 'model/';
$is_container = $modx->getOption('is_container', $config, false);
if (is_dir($modelpath)) {
    $modx->addPackage($packageName, $modelpath, $prefix);
}
$classname = $config['classname'];

$sort = !empty($config['getlistsort']) ? $config['getlistsort'] : 'id';
$dir = !empty($config['getlistsortdir']) ? $config['getlistsortdir'] : 'ASC';

$joinalias = isset($config['join_alias']) ? $config['join_alias'] : '';

if (!empty($joinalias)) {
    if ($fkMeta = $modx->getFKDefinition($classname, $joinalias)) {
        $joinclass = $fkMeta['class'];
        //$joinfield = $fkMeta[$fkMeta['owner']];
        $joinfield = $fkMeta['local'];
    } else {
        $joinalias = '';
    }
}

$object_id = $modx->getOption('object_id', $scriptProperties, '');

if ($object = $modx->getObject($classname,$object_id)){
    $join_id = $object->get($joinfield);
}

$c = $modx->newQuery($classname);
$c->select($modx->getSelectColumns($classname, $classname));

if (!empty($joinalias)) {
    $c->where(array($joinfield => $join_id));
}

$c->sortby($sort, $dir);

//$c->prepare();echo $c->toSql();

$newpos_id = $modx->getOption('new_pos_id', $scriptProperties, 0);
$col = $modx->getOption('col', $scriptProperties, '');
$object_id = $modx->getOption('object_id', $scriptProperties, 0);

$col = explode(':', $col);
if (!empty($newpos_id) && !empty($object_id) && count($col) > 1) {
    $workingobject = $modx->getObject($classname, $object_id);
    $posfield = $col[0];
    $position = $col[1];

    if ($collection = $modx->getCollection($classname, $c)) {
        $curpos = 1;
        foreach ($collection as $object) {
            $id = $object->get('id');
            if ($id == $newpos_id && $position == 'before') {
                $workingobject->set($posfield, $curpos);
                $workingobject->save();
                $curpos++;
            }
            if ($id != $object_id) {
                $object->set($posfield, $curpos);
                $object->save();
                $curpos++;
            }
            if ($id == $newpos_id && $position == 'after') {
                $workingobject->set($posfield, $curpos);
                $workingobject->save();
                $curpos++;
            }
        }
    }
}


$modx->cacheManager->refresh(array(
    'db' => array(),
    'auto_publish' => array('contexts' => $contexts),
    'context_settings' => array('contexts' => $contexts),
    'resource' => array('contexts' => $contexts),
    ));
return $modx->error->success();
