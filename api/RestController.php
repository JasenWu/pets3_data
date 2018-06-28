<?php
require_once "SiteRestHandler.php";

$req = "";

if (isset($_GET["req"])) { //get请求
    $req = $_GET["req"];
    getRequest($req);
} else {
    $req = $_POST["req"];
    $type = $_POST["type"];
    $params = $_POST["params"];
    postRequest($req, $type, $params);

}

function getRequest($req)
{
    /*
     * RESTful service 控制器
     * URL 映射
     */
    switch ($req) {

        case "unit": //列出单元
            // 处理 REST Url /RestController.php?req=unit
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->getUnit();
            break;
        case "insertUnit": //插入单元数据
            // 处理 REST Url /RestController.php?req=insertUnit
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertUnit();
            break;

        case "chapter":
            $unitId = $_GET["unitId"];
            // 处理 REST Url /RestController.php?req=chapter
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->getChapter($unitId);
            break;

        case "roles":
            // 处理 REST Url /RestController.php?req=roles
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->getRoles();
            break;

        case "content":
            // 处理 REST Url /RestController.php?req=content
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->getContent();
            break;

      
        default:
            echo "请检查参数2222" . $requestType;

    }

}

function insert($req, $params)
{

    switch ($req) {

        case "unit": //列出单元
            // 处理 REST Url /RestController.php?req=unit
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertUnit($params);
            break;

        case "chapter":
            $unitId = $_GET["unitId"];
            // 处理 REST Url /RestController.php?req=chapter
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertChapter($unitId);
            break;

        case "roles":
            // 处理 REST Url /RestController.php?req=roles
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertRoles();
            break;

        case "content":
            // 处理 REST Url /RestController.php?req=content
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertContent();
            break;

        default:
            echo "请检查参数2222" . $requestType;

    }
}

function postRequest($req, $type, $params)
{
    switch ($type) {
        case "insert":
            insert($req, $params);
            break;
        case "update":
            update($req, $params);
            break;
        case "delete":
            delete($req, $params);
            break;
    }

}
