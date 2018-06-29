<?php

require_once "SimpleRest.php";
require_once "Site.php";

class SiteRestHandler extends SimpleRest
{
    //获取单元
    public function getUnit()
    {
        $site = new Site();
        $rawData = $site->getUnit();//todo

        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'No sites found!');
        } else {
            $statusCode = 200;
        }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, $statusCode);
 
        echo json_encode($rawData);
 
    }
      //获取对话列表
    public function getChapter($unit_id)
    {
        $site = new Site();
        $rawData = $site->getChapter($unit_id);//todo

        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'No sites found!');
        } else {
            $statusCode = 200;
        }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, $statusCode);
 
        echo json_encode($rawData);
 
    }

    public function insertUnit($params){
        $site = new Site();
        $rawData = $site->insertUnit($params);

        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'No sites found!');
        } else {
            $statusCode = 200;
        }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, $statusCode);
        echo $rawData;
    }

    public function insertChapter($params){
        $site = new Site();
        $rawData = $site->insertChapter($params);

        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'No sites found!');
        } else {
            $statusCode = 200;
        }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, $statusCode);
        echo $rawData;

    }

    public function insertContent($params){
        $site = new Site();
        $rawData = $site->insertContent($params);

        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'No sites found!');
        } else {
            $statusCode = 200;
        }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, $statusCode);
        echo $rawData;

    }

    

   
}
