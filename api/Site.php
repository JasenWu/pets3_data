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
        $sql = 'SELECT * FROM unit';
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
    //获取对话列表
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

    //获取章节列表
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

    //获取章节列表
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
 

    //获取对话列表
    public function getChapter($unit_id)
    {
        $DB = new Db();
        $conn = $DB->connect();
        $sql = 'SELECT * FROM chapter  WHERE `unit_id` =' . $unit_id;
        
        mysqli_query($conn , "set names utf8");
        $retval = mysqli_query($conn, $sql);
        if (!$retval) {
            die('无法读取数据: ' . mysqli_error($conn));
        }
        $rowData = mysqli_fetch_array($retval, MYSQLI_ASSOC);
        mysqli_close($conn);
        return $rowData;
    }

    
}
