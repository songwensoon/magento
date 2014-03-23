<?php
$content = file_get_contents("./test.xls");
$file_name = "模板文件.xls";
// 输入文件标签
Header("Content-type: application/octet-stream");
Header("Accept-Ranges: bytes");
Header("Content-type:application/vnd.ms-excel"); 
Header("Accept-Length: ".strlen($content));
Header("Content-Disposition: attachment; filename=" . $file_name);
// 输出文件内容
echo $content;
exit();
?>
