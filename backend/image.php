<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                    <p class="t cent botli">校園映像資料管理</p>
                    <form method="post"  action="api/edit.php">
                        <table width="100%" class="cent">
                            <tbody>
                                <tr class="yel">
                                    <td>校園映像資料圖片</td>
                                    <td>顯示</td>
                                    <td>刪除</td>
                                    <td></td>
                                </tr>
                <?php
                $all=$Image->count();
                $div=3;
                $pages=ceil($all/$div);
                $now=$_GET['p']??1;
                $start=($now-1)*$div;
                $rows=$Image->all(" limit $start,$div");
                foreach ($rows as $key => $value) {
                ?>
                <tr>
                    <td>
                        <img src="img/<?=$value['img'];?>" style="width:100px; height: 100px;">
                    </td>
                    <td>
                        <input type="checkbox" name="sh[]" value="<?=$value['id'];?>" <?=($value['sh']==1)?"checked":"";?>>
                    </td>
                    <td>
                        <input type="checkbox" name="del[]" value="<?=$value['id'];?>">    
                    </td>
                    <td>
        <input type="button"  value="更換圖片" 
            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/image_update.php?id=<?=$value['id'];?>&#39;)">
    </td>
                    <input type="hidden" name="id[]" value="<?=$value['id'];?>">
                </tr>
                <?php
                }
                ?>
                            </tbody>
                        </table>
                        <div class="cent">
        <?php
            if(($now-1)>0){
                echo "<a class='bl' href='?do=image&p=".($now-1)."'> < </a>";
            }

            for($i=1;$i<=$pages;$i++){
                $fontsize=($now==$i)?'24px':'16px';
                echo "<a class='bl'href='?do=image&p=$i' style='font-size:$fontsize'> $i </a>";
            }

            if(($now+1)<=$pages){
                echo "<a class='bl'href='?do=image&p=".($now+1)."'> > </a>";
            }

        ?>
        </div>
                        <table style="margin-top:40px; width:70%;">
                            <tbody>
                                <tr>
                                    <td width="200px"><input type="button"
                                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/image.php&#39;)"
                                            value="新增動畫圖片"></td>
                                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                                    <!-- 新增隱藏值 -->
                                    <input type="hidden" name="table" value="image">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </form>
                </div>