<?php
$xpdo_meta_map['mcProductCategory']= array (
  'package' => 'migxcart',
  'version' => '1.1',
  'table' => 'migxcart_products_categories',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'category_id' => 0,
    'product_id' => 0,
    'sort' => 0,
  ),
  'fieldMeta' => 
  array (
    'category_id' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'precision' => '10',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'product_id' => 
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
      'class' => 'mcProduct',
      'local' => 'product_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Category' => 
    array (
      'class' => 'modResource',
      'local' => 'category_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
