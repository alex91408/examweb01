<?php include_once "../base.php";?>

<h3 class='cent'>新增校園映像資料</h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td>校園映像資料：</td>
        <td><input type="file" name="img"></td>
    </tr>
</table>
<div class="cent">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name='table' value='image'>
</div>
</form>