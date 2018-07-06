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

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, 200);
 
        echo json_encode($rawData);
 
    }
      //获取对话列表
    public function getChapter($unit_id)
    {
        $site = new Site();
        $rawData = $site->getChapter($unit_id);//todo

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, 200);
 
        echo json_encode($rawData);
 
    }
      //获取已读数量
      public function getReaded($read_id)
      {
          $site = new Site();

          $rawData = array("code"=>0,"data"=>$site->getReaded($read_id));
          $requestContentType = $_SERVER['HTTP_ACCEPT'];
          $this->setHttpHeaders($requestContentType, 200);

          echo json_encode($rawData);
   
      }

    

      //获取角色列表
      public function getRoles($chapter_id)
      {
          $site = new Site();
          $rawData = $site->getRoles($chapter_id);//todo

          $requestContentType = $_SERVER['HTTP_ACCEPT'];
          $this->setHttpHeaders($requestContentType, 200);
   
          echo json_encode($rawData);
   
      }

    //获取角色列表
    public function getContent($chapter_id)
    {
        $site = new Site();
        $rawData = $site->getContent($chapter_id);

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, 200);

        echo json_encode($rawData);

    }



    
    //插入单元
    public function insertUnit($params){
        $site = new Site();
        $rawData = $site->insertUnit($params);

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, 200);
        echo $rawData;
    }

    //更新单元
    public function updateUnit($params){
        $site = new Site();
        $rawData = $site->updateUnit($params);

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, 200);
        echo $rawData;
    }

    //更新单元
    public function updateChapter($params){
        $site = new Site();
        $rawData = $site->updateUnit($params);

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, 200);
        echo $rawData;
    }


    //更新单元
    public function updateContent($params){
        $site = new Site();
        $rawData = $site->updateContent($params);

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, 200);
        echo $rawData;
    }

    //更新单元
    public function updateRoles($params){
        $site = new Site();
        $rawData = $site->updateRoles($params);

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, 200);
        echo $rawData;
    }





    //插入章节
    public function insertChapter($params){
        $site = new Site();
        $rawData = $site->insertChapter($params);

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, 200);
        echo $rawData;

    }
    //插入内容
    public function insertContent($params){
        $site = new Site();
        $rawData = $site->insertContent($params);

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, 200);
        echo $rawData;

    }
    //插入角色
    public function insertRoles($params){
        $site = new Site();
        $rawData = $site->insertRoles($params);

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, 200);
        echo $rawData;
    }
    //更新已读
    public function updateReaded($params){
        $site = new Site();
        $rawData = $site->updateReaded($params);

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, 200);
        echo $rawData;

    }

    //删除内容
    public function deleteContent($params){
        $site = new Site();
        $rawData = $site->deleteContent($params);

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, 200);
        echo $rawData;

    }

    //删除内容
    public function deleteRole($params){
        $site = new Site();
        $rawData = $site->deleteRole($params);

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, 200);
        echo $rawData;

    }
    //删除内容
    public function deleteChapter($params){
        $site = new Site();
        $rawData = $site->deleteChapter($params);

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, 200);
        echo $rawData;

    }
    //删除内容
    public function deleteUnit($params){
        $site = new Site();
        $rawData = $site->deleteUnit($params);

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, 200);
        echo $rawData;

    }





    

    

   
}
