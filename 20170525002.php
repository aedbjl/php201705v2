<?php
if(!isset($_GET['filename']))
    header("Location:20170525 001.php");

    $filename=$_GET['filename'];
    $cont=$_GET['cont'];
    $fp=fopen($filename,"w+");
    fwrite($fp,$cont);
    fclose($fp);
    header("Location:{$filename}");
