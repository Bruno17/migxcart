$modx->resource=$modx->newObject('modResource');

$filename = $modx->getOption('filename',$scriptProperties);
$object_id = $modx->getOption('object_id',$_REQUEST);

return 'assets/migxcartimages/' . $object_id . '/' . $filename;