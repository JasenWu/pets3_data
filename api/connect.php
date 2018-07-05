
<?php
/* 
 * 菜鸟教程 RESTful 演示实例
 * RESTful 服务类
 */
Class Db {
    public $conn = null;//数据库连接


    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pets3";

        // 创建连接
        $this->conn = new mysqli($servername,$username,$password,$dbname);
        mysqli_query($this->conn , "set names utf8");
        // Check connection
        if ($this->conn->connect_error) {
            
            die("连接失败: " . $this->conn->connect_error);
            exit();
        }
    }

    public function __destruct(){
        mysqli_close($this->conn);
    }


  
    
       
}
?>