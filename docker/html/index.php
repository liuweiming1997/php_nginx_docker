<?php
header("Content-type:application/text");

// 文件将被称为 downloaded.pdf
header("Content-Disposition:attachment;filename='index.php'");

// PDF 源在 original.pdf 中
readfile("index.php");
?>
