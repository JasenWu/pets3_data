
<?php
/* 
 * 菜鸟教程 RESTful 演示实例
 * RESTful 服务类
 */
Class Db {
      
    public function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pets3";
        $conn = null; 
        // 创建连接
        $conn = new mysqli($servername,$username,$password,$dbname);
        mysqli_query($conn , "set names utf8");
        // Check connection
        if ($conn->connect_error) {
            
            die("连接失败: " . $conn->connect_error);
            
        }else{
         
            return $conn;
          
        } 
    }
  
    
       
}
?>