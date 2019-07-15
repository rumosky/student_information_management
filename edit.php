<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <?php include("common/header.php");?>
  <div class="body">
<center>
    <?php
    include_once"menu.php";
    include("dbconfig.php");
    //拼接sql语句，取出信息
    $sql = "SELECT * FROM student WHERE id =".$_GET['id'];
    $stmt = $pdo->query($sql);//返回预处理对象
    if($stmt->rowCount()>0){
        $stu = $stmt->fetch(PDO::FETCH_ASSOC);//按照关联数组进行解析
    }else{
        die("没有要修改的数据！");
    }
    ?>
    <form id="addstu" name="editstu" method="post" action="action.php?action=edit">
        <input type="hidden" name="id" id="id" value="<?php echo $stu['id'];?>"/>
        <table>
            <tr>
                <td>姓名</td>
                <td><input id="name" name="name" type="text" value="<?php echo $stu['name']?>"/></td>
            </tr>
            <tr>
                <td>性别</td>
                <td><input type="radio" name="sex" value="男" <?php echo ($stu['sex']=="m")? "checked" : ""?>/>&nbsp;男
                    <input type="radio" name="sex" value="女"  <?php echo ($stu['sex']=="w")? "checked" : ""?>/>&nbsp;女
                </td>
            </tr>
            <tr>
                <td>年龄</td>
                <td><input type="text" name="age" id="age" value="<?php echo $stu['age']?>"/ placeholder="请输入1-99之间的数字"></td>
            </tr>
            <tr>
                <td>班级</td>
                <td><input placeholder="例：1701，17级1班" id="classid" name="classid" type="text" value="<?php echo $stu['classid']?>"/></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="修改"/>&nbsp;&nbsp;
                    <input type="reset" value="重置"/>
                </td>
            </tr>
        </table>
    </form>
</center>
    </div>
  <?php include("common/footer.php");?>
</body>
</html>