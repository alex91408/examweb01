<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                    <p class="t cent botli">網站標題管理</p>
                    <!-- 修改action裡的東西 -->
                    <form method="post"  action="api/edit.php">
                        <table width="100%">
                            <tbody>
                                <tr class="yel">
                                    <td width="45%">網站標題</td>
                                    <td width="23%">替代文字</td>
                                    <td width="7%">顯示</td>
                                    <td width="7%">刪除</td>
                                    <td></td>
                                </tr>
                <!-- 新增以下內容 -->
                <?php
                $rows=$Title->all();
                foreach ($rows as $row) {
                ?>
                <tr>
                    <td>
                        <img src="img/<?=$row['img'];?>" style="width:300px;height:30px;">
                    </td>
                    <td>
                        <input type="text" name='text[]' value="<?=$row['text'];?>">
                    </td>
                    <td>
                        <input type="radio" name="sh" value="<?=$row['id'];?>" <?=$row['sh']==1?"checked":"";?>>
                    </td>
                    <td>
                        <input type="checkbox" name="del[]" value="<?=$row['id'];?>">    
                    </td>
                    <td>
                        <input type="button"  value="更新圖片" 
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/title_update.php?id=<?=$row['id'];?>&#39;)">
                    </td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php
                }
                ?>
                <!-- 到這結束 -->
                            </tbody>
                        </table>
                        <table style="margin-top:40px; width:70%;">
                            <tbody>
                                <tr>
                                    <td width="200px"><input type="button"
                                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/title.php&#39;)"
                                            value="新增網站標題圖片"></td>
                                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                                    <!-- 新增隱藏值 -->
                                    <input type="hidden" name="table" value="title">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </form>
                </div>