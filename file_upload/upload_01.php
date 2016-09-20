<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件上传</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1 align="center">文件上传系统</h1>
    <?php
    $upload_dir='./upload_file/';
    $upload_file=$upload_dir.iconv('UTF-8','Gb2312',$_FILES['myfile']['name']);

    if(move_uploaded_file($_FILES['myfile']['tmp_name'],$upload_file)){
        echo "<strong>文件上传成功</strong>";
        echo "文件名：".$_FILES['myfile']['name']."<br>";
        echo "临时保存文件名：".$_FILES['myfile']['tmp_name']."<br>";
        echo "文件大小：".$_FILES['myfile']['size']."<br>";
        echo "文件类型：".$_FILES['myfile']['type']."<br>";
        echo "<a href='javascript:history.back()'>继续上传</a>";
    }else{
        echo "上传失败(".$_FILES['myfile']['error'].")<br><br>";
        echo "<a href='javascript:history.back()'>重新上传</a>";
    }
    ?>
</div>
</body>
</html>