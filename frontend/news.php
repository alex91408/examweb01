<!-- 上面刪到di這位置接下去 -->
<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
<?php include "./frontend/marquee.php";?>
<div style="height:32px; display:block;"></div>
<!--正中央-->
<!-- 新增以下內容 -->
<h3>&nbsp;&nbsp;&nbsp;&nbsp;更多最新消息顯示區</h3>
<hr>
<?php 
$all=$News->count(['sh'=>1]);
$div=5;
$pages=ceil($all/$div);
$now=$_GET['p']??1;
$start=($now-1)*$div;
?>
<ol start='<?=$start+1;?>'>
<?php
$rows=$News->all(['sh'=>1]," limit $start,$div");
foreach($rows as $key=>$value){
	echo "<li class='sswww'>";
	echo mb_substr($value['text'],0,20)."...";
	echo "<span class='all' style='display:none'>{$value['text']}</span>";
	echo "</li>";
}
?>
</ol>
<!-- 新增完接到這邊 -->
<div style="text-align:center;">
<!-- 刪除兩個a標籤新增以下內容 -->
    <?php
	if(($now-1)>0){
		echo "<a class='bl' href='?do=news&p=".($now-1)."'> < </a>";
	}
	for($i=1;$i<=$pages;$i++){
$fontsize=($now==$i)?'24px':'16px';
echo "<a class='bl' href='?do=news&p=$i' style='font-size:$fontsize'> $i </a>";
	}
	if(($now+1)<=$pages){
		echo "<a class='bl' href='?do=news&p=".($now+1)."'> > </a>";
	}
	?>
    </div>
	                </div>
				<!-- 再加入下面的div-alt裡面記得家<pre> -->
                <div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
                    	<script>
						$(".sswww").hover(
							function ()
							{
								$("#alt").html("<pre>"+$(this).children(".all").html()+"<pre>").css({"top":$(this).offset().top-50})
								$("#alt").show()
							}
						)
						$(".sswww").mouseout(
							function()
							{
								$("#alt").hide()
							}
						)
                        </script>