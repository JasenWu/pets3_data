<?php
// 获取unit列表：http://www.renjie.net.cn/pets3/api/RestController.php?req=unit
//获取章节列表：http://www.renjie.net.cn/pets3/api/RestController.php?req=chapter&unit_id=1
//获取章节列表：http://www.renjie.net.cn/pets3/api/RestController.php?req=content&unit_id=1&chapter_id=3

// 插入章节 http://www.renjie.net.cn/pets3/api/RestController.php 参数：{req:unit type:insert,params:{order:1,title:"example",remark:"example"}
// 插入chapter http://www.renjie.net.cn/pets3/api/RestController.php 参数：{req:unit type:insert,params:{order:1,title:"example",remark:"example"}
// 插入content http://www.renjie.net.cn/pets3/api/RestController.php 参数：{req:unit type:insert,params:{unit_id:1,chapter_id=1,roleId:1,content_en:"example",content_zh:"content_zh",remark:"example"}

require_once "SiteRestHandler.php";

$req = "";

if (isset($_GET["req"])) { //get请求
    $req = $_GET["req"];
    getRequest($req);
} else {
    $param = json_decode(file_get_contents('php://input'), true);
    //var_dump($param);
    $req = $param["req"];
    $type = $param["type"];
    $params = $param["params"];
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
 
        case "chapter":
            $unit_id = $_GET["unit_id"];
            // 处理 REST Url /RestController.php?req=chapter
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->getChapter($unit_id);
            break;
        case "insertChapter": //插入单元数据
            // 处理 REST Url /RestController.php?req=insertUnit
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertChapter();
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

        case "unit": //插入单元
            // 处理 REST Url /RestController.php?req=unit
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertUnit($params);
            break;

        case "chapter"://插入章节
            // 处理 REST Url /RestController.php?req=chapter
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertChapter($params);
            break;

        case "roles"://插入角色
            // 处理 REST Url /RestController.php?req=roles
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertRoles();
            break;

        case "content"://插入内容
            // 处理 REST Url /RestController.php?req=content
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertContent($params);
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
