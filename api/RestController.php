<?php
// 获取unit列表：http://www.renjie.net.cn/pets3/api/RestController.php?req=unit
//获取章节列表：http://www.renjie.net.cn/pets3/api/RestController.php?req=chapter&unit_id=1
//获取章节列表：http://www.renjie.net.cn/pets3/api/RestController.php?req=content&unit_id=1&chapter_id=3

// 插入章节 http://www.renjie.net.cn/pets3/api/RestController.php 参数：{req:unit type:insert,params:{order:1,title:"example",remark:"example"}
// 插入chapter http://www.renjie.net.cn/pets3/api/RestController.php 参数：{req:unit type:insert,params:{order:1,title:"example",remark:"example"}
// 插入content http://www.renjie.net.cn/pets3/api/RestController.php 参数：{req:unit type:insert,params:{unit_id:1,chapter_id=1,roleId:1,content_en:"example",content_zh:"content_zh",remark:"example"}

require_once "SiteRestHandler.php";

if (isset($_GET["req"])) { //get请求
    $req = $_GET["req"];
    getRequest($req);
} else {
    if(isset($_POST["req"]) && isset($_POST["type"]) && isset($_POST["params"])){
        $req = $_POST["req"];
        $type = $_POST["type"];
        $params = $_POST["params"];
        postRequest($req, $type, $params);
    }else{
        echo json_encode(array('code'=>500,"msg"=>"server error,请检查参数"));

    }
}

//get请求
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
            if (isset($_GET["unit_id"])) { //get请求
                $unit_id = $_GET["unit_id"];
            } else {
                $unit_id = null;
            }
            // 处理 REST Url /RestController.php?req=chapter
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->getChapter($unit_id);
            break;

        case "roles":
            if (isset($_GET["chapter_id"])) { //get请求
                $chapter_id = $_GET["chapter_id"];
            } else {
                $chapter_id = "";
            }

            // 处理 REST Url /RestController.php?req=roles
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->getRoles($chapter_id);
            break;

        case "content":
            // 处理 REST Url /RestController.php?req=content
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->getContent();
            break;
        case "readed":
            if (isset($_GET["read_id"])) { //get请求
                $read_id = $_GET["read_id"];
            } else {
                $read_id = "";
            }
            // 处理 REST Url /RestController.php?req=readed
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->getReaded($read_id);
            break;



    }

}

//post 请求
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

//插入、新增
function insert($req, $params)
{

    switch ($req) {

        case "unit": //插入单元
            // 处理 REST Url /RestController.php?req=unit

            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertUnit($params);
            break;

        case "chapter": //插入章节
            // 处理 REST Url /RestController.php?req=chapter
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertChapter($params);
            break;

        case "roles": //插入角色
            // 处理 REST Url /RestController.php?req=roles
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertRoles($params);
            break;

        case "content": //插入内容
            // 处理 REST Url /RestController.php?req=content
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertContent($params);
            break;



    }
}

//更新
function update($req, $params)
{
    switch ($req) {

        case "unit": //插入单元
            // 处理 REST Url /RestController.php?req=unit
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertUnit($params);
            break;

        case "chapter": //插入章节
            // 处理 REST Url /RestController.php?req=chapter
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertChapter($params);
            break;

        case "roles": //插入角色
            // 处理 REST Url /RestController.php?req=roles
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertRoles($params);
            break;

        case "content": //插入内容
            // 处理 REST Url /RestController.php?req=content
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->insertContent($params);
            break;
        case "readed": //插入内容
            // 处理 REST Url /RestController.php?req=content
            $siteRestHandler = new SiteRestHandler();
            $siteRestHandler->updateReaded($params);
            break;



    }
}


