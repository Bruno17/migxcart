{
  "id":102,
  "name":"migxcart",
  "formtabs":[
    {
      "MIGX_id":1,
      "caption":"Product",
      "print_before_tabs":"0",
      "fields":[
        {
          "MIGX_id":1,
          "field":"name",
          "caption":"Name",
          "description":"",
          "description_is_code":"0",
          "inputTV":"",
          "inputTVtype":"",
          "configs":"",
          "sourceFrom":"config",
          "sources":"[]",
          "inputOptionValues":"",
          "default":""
        }
      ]
    },
    {
      "MIGX_id":2,
      "caption":"images",
      "print_before_tabs":"0",
      "fields":[
        {
          "MIGX_id":1,
          "field":"images",
          "caption":"Images",
          "description":"",
          "description_is_code":"0",
          "inputTV":"",
          "inputTVtype":"migxdb",
          "configs":"migxcartimages",
          "sourceFrom":"config",
          "sources":"[]",
          "inputOptionValues":"",
          "default":""
        }
      ]
    }
  ],
  "contextmenus":"recall_remove_delete",
  "actionbuttons":"addItem||toggletrash",
  "columnbuttons":"update||publish||unpublish",
  "filters":"[]",
  "extended":{
    "migx_add":"",
    "formcaption":"",
    "update_win_title":"",
    "win_id":"migxcart",
    "maxRecords":"",
    "multiple_formtabs":"",
    "extrahandlers":"",
    "packageName":"migxcart",
    "classname":"mcProduct",
    "task":"",
    "getlistsort":"",
    "getlistsortdir":"",
    "use_custom_prefix":"0",
    "prefix":"",
    "grid":"",
    "gridload_mode":1,
    "check_resid":1,
    "check_resid_TV":"",
    "join_alias":"",
    "has_jointable":"yes",
    "getlistwhere":"",
    "joins":"",
    "cmpmaincaption":"",
    "cmptabcaption":"",
    "cmptabdescription":"",
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
      "width":10,
      "sortable":"false",
      "show_in_grid":1,
      "renderer":"",
      "clickaction":"",
      "selectorconfig":"",
      "renderoptions":"[]"
    },
    {
      "MIGX_id":2,
      "header":"Name",
      "dataIndex":"name",
      "width":20,
      "sortable":"false",
      "show_in_grid":1,
      "renderer":"this.renderRowActions",
      "clickaction":"",
      "selectorconfig":"",
      "renderoptions":"[]"
    }
  ],
  "createdby":1,
  "createdon":"2013-06-26 18:33:43",
  "editedby":1,
  "editedon":"2013-06-26 18:47:27",
  "deleted":0,
  "deletedon":"-1-11-30 00:00:00",
  "deletedby":0,
  "published":1,
  "publishedon":"2013-06-26 01:00:00",
  "publishedby":0
}