<?php

$resource_id = $_REQUEST['resource_id'];

$this->customconfigs['joinaliases'] = '
[
{"alias":"ProductCategory","classname":"mcProductCategory","on":"ProductCategory.productid = mcProduct.id AND ProductCategory.categoryid =' . $resource_id . '"}
]';
