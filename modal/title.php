<?php include_once "../base.php";?>

<h3 class='cent'>新增網站標題圖片</h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td style="text-align:right">網站標題圖片：</td>
        <td><input type="file" name="img"></td>
    </tr>
    <tr>
        <td>標題區替代文字：</td>
        <td><input type="text" name="text"></td>
    </tr>
</table>
<div class="cent">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name='table' value='title'>

</div>
</form>