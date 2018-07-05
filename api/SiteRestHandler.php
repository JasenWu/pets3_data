<?php

require_once "SimpleRest.php";
require_once "Site.php";

class SiteRestHandler extends SimpleRest
{   
    public $error = array('code' => 404,'data' => null);

    //获取单元
    public function getUnit()
    {
        $site = new Site();
        $rawData = $site->getUnit();//todo

        if (empty($rawData)) {
            $statusCode = 200;
              
            $rawData = $this->error;
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
            $statusCode = 200;
              
            $rawData = $this->error;
        } else {
            $statusCode = 200;
        }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, $statusCode);
 
        echo json_encode($rawData);
 
    }
      //获取对话列表
      public function getReaded($read_id)
      {
          $site = new Site();
        

          $rawData = array("code"=>0,"data"=>$site->getReaded($read_id));
          if (empty($rawData)) {
              $statusCode = 200;
              
              $rawData = $this->error;
          } else {
              $statusCode = 200;
          }
  
          $requestContentType = $_SERVER['HTTP_ACCEPT'];
          $this->setHttpHeaders($requestContentType, $statusCode);
   
          echo json_encode($rawData);
   
      }

    

      //获取对话列表
      public function getRoles($chapter_id)
      {
          $site = new Site();
          $rawData = $site->getRoles($chapter_id);//todo
  
          if (empty($rawData)) {
            $statusCode = 200;
              
            $rawData = $this->error;
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
            $statusCode = 200;
              
            $rawData = $this->error;
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
            $statusCode = 200;
              
            $rawData = $this->error;
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
            $statusCode = 200;
              
            $rawData = $this->error;
        } else {
            $statusCode = 200;
        }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, $statusCode);
        echo $rawData;

    }

    public function insertRoles($params){
        $site = new Site();
        $rawData = $site->insertRoles($params);

        if (empty($rawData)) {
            $statusCode = 200;
              
            $rawData = $this->error;
        } else {
            $statusCode = 200;
        }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, $statusCode);
        echo $rawData;

    }

    public function updateReaded($params){
        $site = new Site();
        $rawData = $site->updateReaded($params);

        if (empty($rawData)) {
            $statusCode = 200;
              
            $rawData = $this->error;
        } else {
            $statusCode = 200;
        }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, $statusCode);
        echo $rawData;

    }

    

    

   
}
