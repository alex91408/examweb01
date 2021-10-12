<!-- 複製index的di部分 -->
<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
<?php include "./frontend/marquee.php";?>
<div style="height:32px; display:block;"></div>
<!-- 新增2個div -->
<div style="width:100%; padding:2px; height:290px;">
<div id="mwww" loop="true" style="width:100%; height:100%;">
</div>
</div>
<script>
    var lin = new Array();
// 增加
    <?php
    $mvs=$Mvim->all(['sh'=>1]);
    foreach($mvs as $mv){
        echo "lin.push('img/{$mv['img']}');";
    }
    ?>

    var now = 0;
    ww();

    if(lin.length > 1){
        setInterval("ww()",3000);
        now = 1;
    }

    function ww(){
        $("#mwww").html("<embed loop=true src='" + lin[now] + "'style='width:99%;height:100%;'></embed>")
        now++;
        if(now >=lin.length)
        now = 0;
    }
</script>
<!-- 增加 -->
<div
        style="width:95%; padding:2px; height:190px; margin-top:10px; padding:5px 10px; border:green dashed 3px; position:relative;">
        <span class="t botli">最新消息區
            <!-- 增加 -->
        <?php
        if($News->count(['sh'=>1])>5){
            echo "<a href='index.php?do=news' style='float:right'>more...</a>";
        }
?>
</span>
<ol class="ssaa" style="list-style-type: decimal;">
<!-- 增加 -->
<?php
$ns=$News->all(['sh'=>1]," limit 5 ");
foreach($ns as $news){
    echo "<li>";
    echo mb_substr($news['text'],0,20);
    echo "<span class='all' style='display:none'>{$news['text']}</span>";
    echo "</li>";
}
?>

</ol>
<!-- 複製檔案2 div-altt做修改left有改 -->
<div id="altt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>


<script>
$(".ssaa li").hover(
	function ()
		{
		$("#altt").html("<pre>"+$(this).children(".all").html()+ "</pre>")
		$("#altt").show()
		}
		)
$(".ssaa li").mouseout(
	function()
		{
		$("#altt").hide()
		}
		)
</script>
</div>
</div>
