<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
  	<link rel="stylesheet" href="css/style.css" />
    <script>
        function doDel(id) {
            if (confirm("确定要删除么？")) {
                window.location = 'action.php?action=del&id='+id;
            }
        }
    </script>
  <link rel="shortcut icon " type="images/x-icon" href="./favicon.ico">
</head>
<body>
  <?php include("common/header.php");?>
<div class="body">
  <center>
    <?php
    include_once("menu.php");
    ?>
    <h3>浏览学生信息</h3>
    <table width="600" border="1">
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>性别</th>
            <th>年龄</th>
            <th>班级</th>
            <th>操作</th>
        </tr>
        <?php include("dbconfig.php");?>
      <?php
        //执行sql语句，并实现解析和遍历
        $sql = "SELECT * FROM student ";
        foreach ($pdo->query($sql) as $row) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['sex']}</td>";
            echo "<td>{$row['age']}</td>";
            echo "<td>{$row['classid']}</td>";
            echo "<td>
                    <a href='javascript:doDel({$row['id']})'>删除</a>
                    <a href='edit.php?id=({$row['id']})'>修改</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
    </center>
</div>
<?php include("common/footer.php");?>
</body>
</html>