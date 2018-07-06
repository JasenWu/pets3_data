<?php
require_once "connect.php";

/*
 * 菜鸟教程 RESTful 演示实例
 * RESTful 服务类
 */

class Site
{
    public function throwError($retval, $conn)
    {

        if (!$retval) {

            die('无法读取数据: ' . mysqli_error($conn));
        }
    }

    //获取单元
    public function getUnit()
    {
        $DB = new Db();
        $conn = $DB->conn;
        $sql = 'SELECT * FROM `unit`';

        $retval = $conn->query($sql);

        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行

        $result = array();

        while ($rowData = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
            array_push($result, $rowData);
        }

        return $result;
    }

    //获取章节列表
    public function getChapter($unit_id)
    {
        $DB = new Db();
        $conn = $DB->conn;
        if ($unit_id) {
            $sql = 'SELECT * FROM `chapter`  WHERE `unit_id`=' . $unit_id;
        } else {
            $sql = 'SELECT * FROM `chapter`';
        }
        $retval = $conn->query($sql);
        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行

        $result = array();
        while ($rowData = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
            array_push($result, $rowData);
        }

        return $result;
    }

    //获取阅读数量
    public function getReaded($read_id)
    {
        $DB = new Db();
        $conn = $DB->conn;
        if ($read_id) {
            $sql = 'SELECT * FROM `readed`  WHERE `id`=' . $read_id;
        } else {
            $sql = 'SELECT * FROM `readed`';
        }
        $retval = $conn->query($sql);

        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行

        $rowData = mysqli_fetch_array($retval, MYSQLI_ASSOC);
        return $rowData;
    }


    //获取章节列表
    public function getRoles($chapter_id)
    {
        $DB = new Db();
        $conn = $DB->conn;
        if ($chapter_id) {
            $sql = 'SELECT * FROM `roles`  WHERE `chapter_id` =' . $chapter_id;
        } else {
            $sql = 'SELECT * FROM `roles`';
        }

        $retval = $conn->query($sql);
        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行

        $result = array();
        while ($rowData = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
            array_push($result, $rowData);
        }
        return $result;

    }

    //获取章节内容
    public function getContent($chapter_id)
    {
        $DB = new Db();
        $conn = $DB->conn;
        if ($chapter_id) {
            $sql = 'SELECT * FROM `content`  WHERE `chapter_id` =' . $chapter_id;
        } else {
            $sql = 'SELECT * FROM `content`';
        }

        $retval = $conn->query($sql);
        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行

        $result = array();
        while ($rowData = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
            array_push($result, $rowData);
        }
        return $result;

    }




    //插入单元
    public function insertUnit($params)
    {
        $arr = json_decode($params, true);
        $DB = new Db();
        $conn = $DB->conn;
        $sql = 'INSERT INTO `unit` (`id`, `order`, `title`, `remark`) VALUES (null,' . $arr['order'] . ',"' . $arr['title'] . '","' . $arr['remark'] . '")';

        $retval = $conn->query($sql);
        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行
        return "{code:0}";


    }





    //更新单元
    public function updateUnit($params)
    {
        $arr = json_decode($params, true);
        $DB = new Db();
        $conn = $DB->conn;
        $sql = 'UPDATE `chapter` SET `order`="'  . $arr['order'] .  '",`title`="' . $arr['title'] .'",`remark`="' . $arr['remark'] .'" WHERE `id` = '. $arr['id'];

        $retval = $conn->query($sql);
        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行
        return "{code:0}";


    }

    //更新单元
    public function updateChapter($params)
    {
        $arr = json_decode($params, true);
        $DB = new Db();
        $conn = $DB->conn;
        $sql = 'UPDATE `unit` SET `unit_id`="'  . $arr['unit_id'] .  '", `order`="'  . $arr['order'] .  '",`title`="' . $arr['title'] .'",`remark`="' . $arr['remark'] .'" WHERE `id` = '. $arr['id'];

        $retval = $conn->query($sql);
        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行
        return "{code:0}";


    }

    //更新单元
    public function updateContent($params)
    {
        $arr = json_decode($params, true);
        $DB = new Db();
        $conn = $DB->conn;
        $sql = 'UPDATE `content` SET   `unit_id`="'  . $arr['unit_id'] .  '",`chapter_id`="'  . $arr['chapter_id'] .  '",`role_id`="' . $arr['role_id'] .'",`content_en`="' . $arr['content_en'].'",`content_zh`="' . $arr['content_zh'] .'" WHERE `id` = '. $arr['id'];

        $retval = $conn->query($sql);
        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行
        return "{code:0}";


    }

    //更新单元
    public function updateRoles($params)
    {
        $arr = json_decode($params, true);
        $DB = new Db();
        $conn = $DB->conn;
        $sql = 'UPDATE `roles` SET   `unit_id`="'  . $arr['unit_id'] .  '",`chapter_id`="'  . $arr['chapter_id'] .  '",`name`="' . $arr['name'] .'",`sex`="' . $arr['sex'].'",`type`="' . $arr['type'] .'",`remark`="' . $arr['remark'] .'" WHERE `id` = '. $arr['id'];

        $retval = $conn->query($sql);
        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行
        return "{code:0}";


    }










    //插入章节
    public function insertChapter($params)
    {
        $arr = json_decode($params, true);
        $DB = new Db();
        $conn = $DB->conn;
        $sql = 'INSERT INTO `chapter` (`id`, `unit_id`, `order`, `title`,`remark`) VALUES (null,"' . $arr['unit_id'] . '","' . $arr['order'] . '","' . $arr['title'] . '","' . $arr['remark'] . '")';

        $retval = $conn->query($sql);
        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行
        return "{code:0}";

    }

    //插入内容
    public function insertContent($params)
    {
        $arr = json_decode($params, true);
        $DB = new Db();
        $conn = $DB->conn;
        $sql = 'INSERT INTO `content` (`id`, `unit_id`, `chapter_id`, `role_id`,`content_en`,`content_zh`,`remark`) VALUES (null,"' . $arr['unit_id'] . '","' . $arr['chapter_id'] . '","' . $arr['role_id'] . '","' . $arr['content_en'] . '","' . $arr['content_zh'] . '","' . $arr['remark'] . '")';

        $retval = $conn->query($sql);
        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行
        return "{code:0}";


    }

    //根据id，删除内容
    public function deleteContent($params)
    {
        $arr = json_decode($params, true);
        $DB = new Db();
        $conn = $DB->conn;
        $sql = 'DELETE FROM `content` WHERE `id` ='.$arr['id'];

        $retval = $conn->query($sql);
        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行
        return "{code:0}";


    }

    //根据id，删除内容
    public function deleteRole($params)
    {
        $arr = json_decode($params, true);
        $DB = new Db();
        $conn = $DB->conn;
        $sql = 'DELETE FROM `roles` WHERE `id` ='.$arr['id'];

        $retval = $conn->query($sql);
        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行
        return "{code:0}";


    }

    //根据id，删除内容
    public function deleteChapter($params)
    {
        $arr = json_decode($params, true);
        $DB = new Db();
        $conn = $DB->conn;
        $sql = 'DELETE FROM `chapter` WHERE `id` ='.$arr['id'];

        $retval = $conn->query($sql);
        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行
        return "{code:0}";


    }

    //根据id，删除内容
    public function deleteUnit($params)
    {
        $arr = json_decode($params, true);
        $DB = new Db();
        $conn = $DB->conn;
        $sql = 'DELETE FROM `unit` WHERE `id` ='.$arr['id'];

        $retval = $conn->query($sql);
        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行
        return "{code:0}";


    }



    //插入角色
    public function insertRoles($params)
    {

        $arr = json_decode($params, true);

        $DB = new Db();
        $conn = $DB->conn;
        $sql = 'INSERT INTO `roles` (`id`,`unit_id`,`chapter_id`,`name`,`sex`,`type`,`remark`) VALUES (null,"' . $arr['unit_id'] . '","' . $arr['chapter_id'] . '","' . $arr['name'] . '","' . $arr['sex'] . '","' . $arr['type'] . '","' . $arr['remark'] . '")';
        $retval = $conn->query($sql);
        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行
        return "{code:0}";


    }

    //插入角色
    public function updateReaded($params)
    {
        $arr = json_decode($params, true);
        $DB = new Db();
        $conn = $DB->conn;
        $sql = 'UPDATE `readed` SET `count`=' . $arr['count'] . ' WHERE `id` = 1';
        $retval = $conn->query($sql);
        $this->throwError($retval, $conn);//有错误时抛出错误并终止脚本执行
        return "{code:0}";
    }
}
