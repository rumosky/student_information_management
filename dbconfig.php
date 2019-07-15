<?php
        //1.连接数据库
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=web_test;","web_test","abc123456");
        } catch (PDOException $e) {
            die("数据库连接失败" . $e->getMessage());
        }
        //2.解决中文乱码问题
        $pdo->query("SET NAMES 'UTF8'");
		
		//以上配置信息适用于MySQL，SQL server请查看说明文档
?>