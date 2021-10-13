<?php include_once "../base.php";
$Bottom->save(['id'=>1,'bottom'=>$_POST['bottom']]);
to("../backend.php?do=bottom");
?>