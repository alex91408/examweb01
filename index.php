<?php include_once "base.php";?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>卓越科技大學校園資訊系統</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
</head>

<body>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>
    <iframe style="display:none;" name="back" id="back"></iframe>
    <div id="main">
        <!-- 這裡有改 -->
        <a title="<?=$Title->find(['sh'=>1])['text'];?>" href="index.php">
        <!-- 這裡有改 -->
            <div class="ti"
                style="background:url(&#39;img/<?=$Title->find(['sh'=>1])['img'];?>&#39;); background-size:cover;">
            </div>
            <!--標題-->
        </a>
        <div id="ms">
            <div id="lf" style="float:left;">
                <div id="menuput" class="dbor">
                    <!--主選單放此-->
                    <span class="t botli">主選單區</span>
                    <!-- 這裡增加 -->
                    <?php
				$mus=$Menu->all(['sh'=>1,'parent'=>0]);
				foreach ($mus as  $mu) {
					echo "<div class='mainmu cent'>";
					echo "<a href='{$mu['href']}'>{$mu['text']}</a>";
					//以下放次選單
					echo "<div class='mw'>";
					
					$subs=$Menu->all(['sh'=>1,'parent'=>$mu['id']]);
					foreach ($subs as $su) {
						echo "<div class='mainmu2 cent'>";
						echo "<a href='{$su['href']}'>{$su['text']}</a>";
						echo "</div>";
					}
					echo "</div>";
					echo "</div>";
				}

				?>
                <!-- 到這結束接著下面 -->
                </div>
                <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
                <!-- 總人數後增加 -->
                    <span class="t">進站總人數 :<?=$Total->find(1)['total'];?>
                    </span>
                </div>
            </div>
            <!--這裡增加  -->
            <?php
								$do=$_GET['do']??'main';
								$file="frontend/".$do.".php";
								// 先判斷檔案是否存在
								if(file_exists($file)){
									include $file;
								}else{
									include "frontend/main.php";
								}
	

							?>
            <div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
                <!--右邊-->
                <!-- 這裡增加 -->
                <?php
					if(!isset($_SESSION['admin'])){
					?>
                <button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
                    onclick="lo(&#39;?do=login&#39;)">管理登入</button>
                    <!-- 複製上面新增一個返回管理 -->
                <?php
					}else{
					?>
                <button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
                    onclick="lo(&#39;backend.php&#39;)">返回管理</button>
                <?php
					}
					?>

                <div style="width:89%; height:480px;" class="dbor">
                    <span class="t botli">校園映象區</span>
                    <!-- 這裡增加 -->
                    <div class="cent" onclick='pp(1)'>
                        <img src="icon/up.jpg">
                    </div>
                    <?php
						$imgs=$Image->all(['sh'=>1]);
						foreach($imgs as $key => $img){
							echo "<div class='cent im' id='ssaa$key'>";
							echo "<img src='img/{$img['img']}' style='width:150px;height:103px;margin:2px;border:2px solid orange'>";
							echo "</div>";
						}
						?>
                    <div class="cent" onclick='pp(2)'>
                        <img src="icon/dn.jpg">
                    </div>
                    <!-- 增加到這結束 -->
                    <!-- 這裡num要改 -->
                    <script>
                    var nowpage = 0,
                        num = <?=$Image->count(['sh'=>1]);?>;

                    function pp(x) {
                        var s, t;
                        if (x == 1 && nowpage - 1 >= 0) {
                            nowpage--;
                        }
                        if (x == 2 && (nowpage + 1) * 3 <= num * 1 + 3) {
                            nowpage++;
                        }
                        $(".im").hide()
                        for (s = 0; s <= 2; s++) {
                            t = s * 1 + nowpage * 1;
                            $("#ssaa" + t).show()
                        }
                    }
                    pp(1)
                    </script>
                </div>
            </div>
        </div>
        <div style="clear:both;"></div>
        <div
            style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
            <span class="t" style="line-height:123px;"><?=$Bottom->find(1)['bottom'];?></span>
        </div>
    </div>

</body>

</html>