<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                    <p class="t cent botli">選單管理</p>
                    <form method="post"  action="api/edit.php">
                        <table width="100%" class="cent">
                            <tbody>
                                <tr class="yel">
                                    <td>主選單名稱</td>
                                    <td>選單連結網址</td>
                                    <td>次選單數</td>
                                    <td>顯示</td>
                                    <td>刪除</td>
                                    <td></td>
                                </tr>
                <?php
                $rows=$Menu->all(['parent'=>0]);
                foreach ($rows as $key => $value) {
                ?>
                <tr>
                    <td>
                    <input type="text" name='text[]' value="<?=$value['text'];?>" style="width:90%">
                    </td>
                    <td>
                    <input type="text" name="href[]" value="<?=$value['href'];?>" style="width:90%">
                    </td>
                    <td>
                    <?=$Menu->count(['parent'=>$value['id']]);?>     
                    </td>
                    <td>
                    <input type="checkbox" name="sh[]" value="<?=$value['id'];?>" <?=($value['sh']==1)?'checked':"";?>>    
                    </td>
                    <td>
                        <input type="checkbox" name="del[]" value="<?=$value['id'];?>">    
                    </td>
                    <td>
                    <input type="button" value="編輯次選單"
                    onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/submenu.php?id=<?=$value['id'];?>&#39;)"
        >    
    </td>
                    <input type="hidden" name="id[]" value="<?=$value['id'];?>">
                </tr>
                <?php
                }
                ?>
                            </tbody>
                        </table>
                        <table style="margin-top:40px; width:70%;">
                            <tbody>
                                <tr>
                                    <td width="200px"><input type="button"
                                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/menu.php&#39;)"
                                            value="新增主選單"></td>
                                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                                    <!-- 新增隱藏值 -->
                                    <input type="hidden" name="table" value="menu">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </form>
                </div>