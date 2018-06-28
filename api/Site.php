<?php
require_once "connect.php";
/* 
 * 菜鸟教程 RESTful 演示实例
 * RESTful 服务类
 */
Class Site {
    
    private $sites = array(
        1 => 'TaoBao',  
        2 => 'Google',  
        3 => 'Runoob',              
        4 => 'Baidu',              
        5 => 'Weibo',  
        6 => 'Sina'
            
    );
        
    
    public function getAllSite(){
        $DB = new Db();
        $conn = $DB->connect();
        $sql = 'SELECT * FROM unit';
        $retval = mysqli_query($conn, $sql);
        if (!$retval) {
            die('无法读取数据: ' . mysqli_error($conn));
        }
        $rawData = mysqli_fetch_array($retval, MYSQLI_ASSOC);
        mysqli_close($conn);
        return  $rawData;
    }
    
    public function getSite($id){
        
        $site = array($id => ($this->sites[$id]) ? $this->sites[$id] : $this->sites[1]);
        return $site;
    }    
}
?>