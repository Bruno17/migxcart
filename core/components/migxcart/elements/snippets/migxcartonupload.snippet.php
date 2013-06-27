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

/*
print_r($config);
print_r($_REQUEST);
print_r($scriptProperties);

die();
*/

$action = $modx->getOption('action', $scriptProperties, '');
$fields = array();
$fields['product_id'] = $modx->getOption('co_id', $_REQUEST, 0);
$fields['filename'] = $modx->getOption('name', $scriptProperties, 0);

switch ($action) {
    case 'upload':
        if ($object = $modx->getObject($classname, $fields)) {
            //record exists with this filename, do nothing
        } else {
            $object = $modx->newObject($classname);
            $object->fromArray($fields);
            $object->save();
        }
        break;
    case 'remove':
        if ($object = $modx->getObject($classname, $fields)) {
            $object->remove();
        } 
        break;
}