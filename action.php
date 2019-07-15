<?php include("dbconfig.php");?>
<?php
//通过action的值进行对应操作与修改
switch ($_GET['action']) {
    case 'add':{   //增加操作
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $age = $_POST['age'];
        $classid = $_POST['classid'];
        //写sql语句
		$sql = "INSERT INTO `student`(`sex`, `name`, `classid`, `age`) VALUES ('{$sex}','{$name}','{$classid}','{$age}')";
        $rw = $pdo->exec($sql);
        if ($rw > 0) {
            echo "<script> alert('增加成功');
                            window.location='show.php'; //跳转到首页
                 </script>";
        } else {
            echo "<script> alert('增加失败');
                            window.history.back(); //返回上一页
                 </script>";
        }
        break;
    }
    case "del": {    //获取表单信息
        $id = $_GET['id'];
        $sql = "DELETE FROM student WHERE id={$id}";
        $pdo->exec($sql);
        header("Location:show.php");//跳转到首页
        break;
    }
    case "edit" :{   //获取表单信息
        $id = $_POST['id'];
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $classid = $_POST['classid'];
        $age = $_POST['age'];

        $sql = "UPDATE student SET name='{$name}',sex='{$sex}',age='{$age}',classid='{$classid}' WHERE id='{$id}'";
        $rw=$pdo->exec($sql);
        if($rw>0){
            echo "<script>alert('修改成功');window.location='show.php'</script>";
        }else{
            echo "<script>alert('修改失败');window.history.back()</script>";
        }
        break;
    }

}