<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                    <p class="t cent botli">頁尾版權資料管理</p>
                    <form method="post"  action="api/edit_bottom.php">
                        <table width="100%" class="cent">
                      
                            <tbody>
                                <tr class="yel">
                                    <td>頁尾版權資料：</td>
                                    <td> <input style="width:90%" type="text" name='bottom' value="<?=$Bottom->find(1)['bottom'];?>"></td>
                                </tr>
                            </tbody>
                        </table>
                        <table style="margin-top:40px; width:70%;">
                            <tbody>
                                <tr>
                                    <td width="200px"></td>
                                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </form>
                </div>