<?php
$xpdo_meta_map['mcProductCategory']= array (
  'package' => 'migxcart',
  'version' => '1.1',
  'table' => 'migxcart_products_categories',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'categoryid' => 0,
    'productid' => 0,
    'sort' => 0,
  ),
  'fieldMeta' => 
  array (
    'categoryid' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'precision' => '10',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'productid' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'precision' => '10',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'sort' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'precision' => '8',
      'null' => false,
      'default' => 0,
    ),
  ),
  'aggregates' => 
  array (
    'Product' => 
    array (
      'class' => 'vcProduct',
      'local' => 'productid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Category' => 
    array (
      'class' => 'modResource',
      'local' => 'categoryid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
