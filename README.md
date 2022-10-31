# 学生信息管理

#### 介绍

只是一个小demo，实现基本学生的增加，删除，修改功能。
只涉及一张数据表，相应SQL语句请阅读后面内容。

#### 目录结构

```text
├──common
│   ├──header.php  //公共头部
│   └──footer.php  //公共底部
├──css
│   └──style.css   //全局样式
├──index.php   //主页，判断是否登录
├──login.php   //登录页面展示
├──login_action.php  //登录处理
├──logout.php  //注销
├──add.php     //增加学生
├──action.php  //数据库处理
├──show.php    //查询展示数据
├──menu.php    //菜单
├──edit.php    //编辑学生信息页面展示
├──dbconfig.php  //数据库配置信息
└──favicon.ico   //网页标签图标
```

#### student建表SQL语句

SQL语句
```sql
create table student(
id int(8) not null auto_increment,
name varchar(30) not null,
sex char(2) not null check (sex in ("男","女")),
age numeric(2,0) not null check (age>0 and age<100),
classid int(4) not null,
primary key(id)
)
```

#### 使用说明

1. 将文件按照目录结构上传到网站，或本地环境内
2. 修改dbconfig.php文件内的数据库配置信息

#### 补充说明

如果数据库是SQL server，那么需要修改dbconfig.php代码
```php
<?php
        //连接数据库
        //test是数据库名，username是数据库用户名，password是密码。请对应填写。
        try {
            $pdo = new PDO("sqlsrv:server=localhost;database=test;","username","password");
        } catch (PDOException $e) {
            die("数据库连接失败" . $e->getMessage());
        }
        //解决中文乱码问题
        $pdo->query("SET NAMES 'UTF8'");
?>
```

PHP连接SQL server需要安装驱动程序，官方下载地址：[PHP连接SQL server驱动下载](https://docs.microsoft.com/zh-cn/sql/connect/php/download-drivers-php-sql-server?view=sql-server-2017)

好了，更多PHP连接SQL server教程请自行百度，CSDN或博客园有无数教程。

### 反馈建议

反馈地址：[简易学生信息管理](https://rumosky.com/archives/4)
