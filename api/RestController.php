<?php
require_once("SiteRestHandler.php");
        
$view = "";
if(isset($_GET["view"]))
    $view = $_GET["view"];
/*
 * RESTful service 控制器
 * URL 映射
*/
switch($view){
 
    case "all":
        // 处理 REST Url /RestController.php?view=all
        $siteRestHandler = new SiteRestHandler();
        $siteRestHandler->getAllSites();
        break;
        
    case "single":
        // 处理 REST Url /RestController.php?view=single&id=1
        $siteRestHandler = new SiteRestHandler();
        $siteRestHandler->getSite($_GET["id"]);
        break;
 
    case "" :
        //404 - not found;
        break;
}
?>