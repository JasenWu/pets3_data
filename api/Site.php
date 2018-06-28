<?php
require_once "connect.php";
/*
 * 菜鸟教程 RESTful 演示实例
 * RESTful 服务类
 */
class Site
{

    private $sites = array(
        1 => 'TaoBao',
        2 => 'Google',
        3 => 'Runoob',
        4 => 'Baidu',
        5 => 'Weibo',
        6 => 'Sina',

    );

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
        $arr = json_decode($params,true);
 
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

    //获取对话列表
    public function getChapter($unitId)
    {
        $DB = new Db();
        $conn = $DB->connect();
        $sql = 'SELECT * FROM chapter  WHERE `unitId` =' . $unitId;
        echo $sql;

        $retval = mysqli_query($conn, $sql);
        if (!$retval) {
            die('无法读取数据: ' . mysqli_error($conn));
        }
        $rowData = mysqli_fetch_array($retval, MYSQLI_ASSOC);
        mysqli_close($conn);
        return $rowData;
    }

    public function getSite($id)
    {

        $site = array($id => ($this->sites[$id]) ? $this->sites[$id] : $this->sites[1]);
        return $site;
    }
}
