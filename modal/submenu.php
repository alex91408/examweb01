<?php include_once "../base.php";?>

<h3 class='cent'>編輯次選單</h3>
<hr>

<form action="api/submenu.php" method="post" enctype="multipart/form-data">
<table style="margin:auto;" id="sub">
    <tr>
        <td>次選單名稱</td>
        <td>次選單連結網址</td>
        <td>刪除</td>
    </tr>
    <?php
        $rows=$Menu->all(['parent'=>$_GET['id']]);
        foreach ($rows as  $value) {
    ?>
    <tr>
        <td><input type="text" name="text[]" value="<?=$value['text'];?>"></td>
        <td><input type="text" name="href[]" value="<?=$value['href'];?>"></td>
        <td>
            <input type="checkbox" name="del[]" value="<?=$value['id'];?>">
        </td>
        <input type="hidden" name="id[]" value="<?=$value['id'];?>">
    </tr>
    <?php
        }
    ?>

</table>
<div class="cent">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="hidden" name="table" value="menu">
    <input type="hidden" name="parent" value="<?=$_GET['id'];?>">
    <input type="button" value="更多次選單" onclick="more()">
</div>
</form>

<script>
function more(){
    let str=`
                <tr>
                    <td ><input type="text" name="text2[]"></td>
                    <td><input type="text" name="href2[]"></td>
                </tr>
            `
    $("#sub").append(str)

}


</script>