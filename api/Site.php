<?php
require_once "connect.php";
/*
 * 菜鸟教程 RESTful 演示实例
 * RESTful 服务类
 */
class Site
{
 

    //获取单元
    public function getUnit()
    {
        $DB = new Db();
        $conn = $DB->connect();
        $sql = 'SELECT * FROM `unit`';
        $retval = mysqli_query($conn, $sql);
        if (!$retval) {
            die('无法读取数据: ' . mysqli_error($conn));
        }

        $result = array();
        while ($rowData = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
            array_push($result,$rowData);
        }
        mysqli_close($conn);
        return $result;
    }

    //获取章节列表
    public function getChapter($unit_id)
    {
        $DB = new Db();
        $conn = $DB->connect();
        if($unit_id){
            $sql = 'SELECT * FROM `chapter`  WHERE `unit_id`=' . $unit_id;
        }else{
            $sql = 'SELECT * FROM `chapter`';
        }
        $retval = mysqli_query($conn, $sql);
        if (!$retval) {
            die('无法读取数据: ' . mysqli_error($conn));
        }
       
        
        $result = array();
        while ($rowData = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
            array_push($result,$rowData);
        }
        mysqli_close($conn);
        return $result;
    }

    //获取章节列表
    public function getRoles($chapter_id)
    {
        $DB = new Db();
        $conn = $DB->connect();
        if($chapter_id){
            $sql = 'SELECT * FROM `roles`  WHERE `chapter_id` =' . $chapter_id;
        }else{
            $sql = 'SELECT * FROM `roles`';
        }
       
        
 
        $retval = mysqli_query($conn, $sql);
        if (!$retval) {
            die('无法读取数据: ' . mysqli_error($conn));
        }
        $rowData = mysqli_fetch_array($retval, MYSQLI_ASSOC);
        mysqli_close($conn);
        return $rowData;
    }

    

    //插入章节
    public function insertUnit($params)
    {    
        
        $arr =  $params;
 
        $DB = new Db();
        $conn = $DB->connect();
        $sql = 'INSERT INTO `unit` (`id`, `order`, `title`, `remark`) VALUES (null,'.$arr['order'].',"'.$arr['title'].'","'.$arr['remark'].'")';
 
        $retval = mysqli_query($conn, $sql);
        if (!$retval) {
            die('无法读取数据: ' . mysqli_error($conn));
        }
        return "{code:0}";
        mysqli_close($conn);

    }

    //插入章节
    public function insertChapter($params)
    {    
        
        $arr =  $params;
 
        $DB = new Db();
        $conn = $DB->connect();
        $sql = 'INSERT INTO `chapter` (`id`, `unit_id`, `order`, `title`,`remark`) VALUES (null,"'.$arr['unit_id'].'","'.$arr['order'].'","'.$arr['title'].'","'.$arr['remark'].'")';
 
        $retval = mysqli_query($conn, $sql);
        if (!$retval) {
            die('无法读取数据: ' . mysqli_error($conn));
        }
        return "{code:0}";
        mysqli_close($conn);

    }

    //插入内容
    public function insertContent($params)
    {    
        $arr =  $params;
        $DB = new Db();
        $conn = $DB->connect();
        $sql = 'INSERT INTO `content` (`id`, `unit_id`, `chapter_id`, `role_id`,`content_en`,`content_zh`,`remark`) VALUES (null,"'.$arr['unit_id'].'","'.$arr['chapter_id'].'","'.$arr['role_id'].'","'.$arr['content_en'].'","'.$arr['content_zh'].'","'.$arr['remark'].'")';
 
        $retval = mysqli_query($conn, $sql);
        if (!$retval) {
            die('无法读取数据: ' . mysqli_error($conn));
        }
        return "{code:0}";
        mysqli_close($conn);

    }

    
    //插入角色
    public function insertRoles($params)
    {    
        $arr =  $params;
        $DB = new Db();
        $conn = $DB->connect();
        $sql = 'INSERT INTO `roles` (`id`,`unit_id`,`chapter_id`,`name`,`sex`,`type`,`remark`) VALUES (null,"'.$arr['unit_id'].'","'.$arr['chapter_id'].'","'.$arr['name'].'","'.$arr['sex'].'","'.$arr['type'].'","'.$arr['remark'].'")';
        $retval = mysqli_query($conn, $sql);
        if (!$retval) {
            die('无法读取数据: ' . mysqli_error($conn));
        }
        return "{code:0}";
        mysqli_close($conn);

    }
 

    

    
}
