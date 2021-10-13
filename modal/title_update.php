<?php include_once "../base.php";?>
<h3 class="cent">更新標題圖片</h3>
<hr>

<form method="post"  action="api/upload.php" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td>更新標題圖片:</td>
        <td><input type="file" name="img"></td>
    </tr>
</table>
<div class="cent">
    <input type="submit" value="更新">
    <input type="reset" value="重置">
    <input type="hidden" name="table" value="title">
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
</div>
</form>