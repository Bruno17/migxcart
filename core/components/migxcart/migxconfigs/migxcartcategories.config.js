{
  "id":101,
  "name":"migxcartcategories",
  "formtabs":[
    {
      "MIGX_id":1,
      "caption":"hidden",
      "fields":[
        {
          "MIGX_id":1,
          "field":"firstimage",
          "caption":"firstimage",
          "inputTV":"",
          "inputTVtype":"image",
          "configs":"",
          "sourceFrom":"config",
          "sources":[
            {
              "MIGX_id":1,
              "context":"web",
              "sourceid":3
            }
          ],
          "inputOptionValues":"",
          "default":""
        }
      ]
    }
  ],
  "contextmenus":"update||activate||deactivate||recall_remove_delete",
  "actionbuttons":"addItem||bulk||toggletrash",
  "columnbuttons":"",
  "filters":[
    {
      "MIGX_id":1,
      "name":"active",
      "label":"active",
      "emptytext":"all products",
      "type":"combobox",
      "getlistwhere":{
        "ProductCategory.categoryid":"[[+resource_id]]"
      },
      "getcomboprocessor":"activecombo",
      "combotextfield":"",
      "comboidfield":""
    },
    {
      "MIGX_id":2,
      "name":"search",
      "label":"search",
      "emptytext":"search....",
      "type":"textbox",
      "getlistwhere":{
        "name:LIKE":"%[[+search]]%",
        "OR:description:LIKE":"%[[+search]]%",
        "OR:articlenumber:LIKE":"%[[+search]]%"
      },
      "getcomboprocessor":"",
      "combotextfield":"",
      "comboidfield":""
    }
  ],
  "extended":{
    "migx_add":"Neues Produkt erstellen",
    "formcaption":"Produkt",
    "update_win_title":"",
    "win_id":"migxcartcategories",
    "maxRecords":"",
    "multiple_formtabs":"",
    "extrahandlers":"",
    "packageName":"migxcart",
    "classname":"mcProduct",
    "task":"categoryproducts",
    "getlistsort":"",
    "getlistsortdir":"",
    "use_custom_prefix":"0",
    "prefix":"",
    "grid":"",
    "gridload_mode":1,
    "check_resid":"0",
    "check_resid_TV":"",
    "join_alias":"",
    "has_jointable":"yes",
    "getlistwhere":"",
    "joins":"",
    "cmpmaincaption":"",
    "cmptabcaption":"Produkte",
    "cmptabdescription":"Produkte bearbeiten\/erstellen",
    "cmptabcontroller":"",
    "winbuttons":"",
    "onsubmitsuccess":"",
    "submitparams":""
  },
  "columns":[
    {
      "MIGX_id":1,
      "header":"ID",
      "dataIndex":"id",
      "width":20,
      "renderer":"",
      "sortable":true,
      "show_in_grid":1
    },
    {
      "MIGX_id":2,
      "header":"Name",
      "dataIndex":"name",
      "width":200,
      "renderer":"",
      "sortable":true,
      "show_in_grid":1
    },
    {
      "MIGX_id":3,
      "header":"active",
      "dataIndex":"Joined_active",
      "width":20,
      "renderer":"this.renderCrossTick",
      "sortable":"false",
      "show_in_grid":1
    },
    {
      "MIGX_id":4,
      "header":"Image",
      "dataIndex":"firstimage",
      "width":100,
      "renderer":"this.renderImage",
      "sortable":"false",
      "show_in_grid":1
    }
  ],
  "createdby":1,
  "createdon":"2013-06-26 18:28:09",
  "editedby":1,
  "editedon":"2013-06-26 18:32:19",
  "deleted":0,
  "deletedon":"-1-11-30 00:00:00",
  "deletedby":0,
  "published":1,
  "publishedon":"2013-06-26 01:00:00",
  "publishedby":0
}