<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件批量上传</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<h1 align="center">文件批量上传系统</h1>
<?php
$upload_dir='./upload_file/';
for($i=0;$i<=3;$i++){
    if($_FILES['myfile']['name'][$i]!=0){
        $upload_file=$upload_dir.iconv('UTF-8','Gb2312',$_FILES['myfile']['name'][$i]);
        move_uploaded_file($_FILES['myfile']['tmp_name'][$i],$upload_file);

        echo "<strong>文件上传成功</strong>";
        echo "文件名：".$_FILES['myfile']['name'][$i]."<br>";
        echo "临时保存文件名：".$_FILES['myfile']['tmp_name'][$i]."<br>";
        echo "文件大小：".$_FILES['myfile']['size'][$i]."<br>";
        echo "文件类型：".$_FILES['myfile']['type'][$i]."<br>";
    }
}
?>
</body>
</html>