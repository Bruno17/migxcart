<?php
 
if (isset($_REQUEST['iframeTpl']) && $_REQUEST['iframeTpl']=='ajaxupload.html'){
    $_REQUEST['resource_id'] = '1';// we need any resource-id of a resource in the correct context, just to get the context
    $_REQUEST['tv_name'] = 'migxcartimage';// we need a image-tv with the correct mediasource in this context    
}