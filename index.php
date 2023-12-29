<?php include_once "./api/db.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>卓越科技大學校園資訊系統</title>
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="./plugin/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
	<!-- <script src="./plugin/js/jquery.js"></script>
	<script src="./plugin/js/bootstrap.js"></script> -->
	<script src="./plugin/js/bootstrap.bundle.js"></script>
</head>

<body class="container-fluid">
	<nav class=" row navbar navbar-expand-lg sticky-top " style="background-color: #B9887D; color:aliceblue;">

		<div class="col-10 mx-auto">

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<ul class="navbar-nav me-auto mb-2 mb-lg-0">

					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#"><span class="my-size-big">&nbsp;<i class="fa-solid fa-house text-white "></i>&nbsp;&nbsp;
							</span></a>
					</li>
					<li class="nav-item ">
						<a class="nav-link text-white" href="#box2"><i class=" text-white fa-solid fa-film"></i>&nbsp;Card</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  text-white" href="#box3"><i class=" text-white fa-solid fa-comment"></i>&nbsp;news</a>
					</li>

					<!-- <li class="nav-item" id="menuput" class="dbor">
						<span class=" text-white ">主選單區</span>
					</li> -->

				</ul>

				<!-- navbar用文字的 -->
				<span class="navbar-text me-3">

				</span>
				<?php
				if (isset($_SESSION['login'])) {
				?>
					<button class="my-btn btn btn-outline-light" onclick="lo('back.php')">返回管理</button>
				<?php
				} else {
				?>
					<button class="my-btn btn btn-outline-light" onclick="lo('?do=login')">管理登入</button>
				<?php
				}
				?>
				<!-- 
				<button class="my-btn btn btn-outline-light" onclick="lo('?do=login')">管理登入</button> -->

			</div>
		</div>
	</nav>
	<div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>

	<div>
		<!-- 14.顯示title圖片 -->
		<?php
		$title = $Title->find(['sh' => 1]);
		?>
		<a class="row" title="<?= $title['text']; ?>" href="index.php">
			<div class="title mx-auto " style="background:url(&#39;./img/<?= $title['img']; ?>&#39;); background-size:cover;"></div><!--標題-->
			<!-- <div class="my-title-text-1">最細心的照料</div> -->
			<div class="col-2 my-title-text">讓貓 <br> 有家的<br>感覺</div>
		</a>

		<!-- 結束title圖片 -->

	</div>


	<div class="">

		<!-- main -->

		<!--1. 中間主要顯示區塊 ，中間拆分切板至front資料夾下，以get取值include該區塊檔案front裡-->
		<?php

		$do = $_GET['do'] ?? 'main';
		$file = "./front/{$do}.php";
		if (file_exists($file)) {
			include $file;
		} else {
			include "./front/main.php";
		}


		?>
		<!-- 結束中間主要顯示區塊 -->

		<div class="row switch-img ">

			<div class="col-10 mx-auto align-items-center justify-content-center d-flex " style="width:89%; height:500px;">
				<!-- <span class="t botli">校園映象區</span> -->

				<div class="cent" onclick="pp(1)"><i class="fa-solid fa-paw my-cat-prev"></i></div><!-- 上張圖片的按鈕小圖 -->
				<?php
				// 撈出sh=1要顯示的圖片
				$imgs = $Image->all(['sh' => 1]);
				foreach ($imgs as $idx => $img) {
				?>
					<!-- 產生一個帶有顯示的id #ssaa隱藏的clss="im"，讓function能觸發執行該區域要顯示還是隱藏-->
					<div id="ssaa<?= $idx; ?>" class="im cent">
						<img src="./img/<?= $img['img']; ?>" style="width:450px;height:450px;border:3px solid orange;margin:3px">
					</div>

				<?php
				}
				?>
				<!-- $(".im").hide()會觸發css使display:none隱藏不顯示 -->
				<!-- $("#ssaa" + t).show()會觸發css使display:block顯示 -->
				<!-- 在PHP只要看起來像數字都會是數字來計算，即使設定字串也是以數字計算，除非用字串函示來固定字串 -->
				<div class="cent" onclick="pp(2)"><i class="fa-solid fa-paw my-cat-next"></i></div><!-- 下張圖片的按鈕小圖 -->
				<script>
					// 如果是1>=0，nowapge-1=0，讓#ssaa0因前面id="ssaa=idx "設的數字從idx取從0開始，所以要產生的命名為了與id的命名數字相同，索引從0開始所以放索引0的圖片依序存放
					// 下一頁小於等於總共可以點的次數，如總圖片9張首頁已顯示3張點6次顯示完九張圖片
					// 當前頁通常從1開始
					var nowpage = 1,
						num = <?= $Image->count(['sh' => 1]); ?>;

					function pp(x) {
						var s, t;
						if (x == 1 && nowpage - 1 >= 0) {
							nowpage--;
						}
						if (x == 2 && (nowpage + 1) <= num * 1 - 3) {
							nowpage++;
						}
						$(".im").hide() //先全部隱藏圖片，再算哪幾個編號圖片要顯示在畫面
						// 產生三個連續數字來顯示圖片的"#ssaa" + t 字串加數字=>字串#ssaa1、#ssaa2、#ssaa3
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
	<!-- 頁尾顯示區塊 -->
	<div class="row mt-5 my-footer">
		<span class="t col" style="line-height:123px;"><?= $Bottom->find(1)['bottom']; ?></span>
		<span class="t col">進站總人數 :<?= $Total->find(1)['total']; ?> </span>
	</div>

	<link rel="stylesheet" href="./plugin/js/bootstrap.js">
</body>

</html>
<!-- <div class="col" id="lf" style="float:left;"> -->

<!-- 顯示進站人數 -->
<!-- <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
	<span class="t">進站總人數 :<?= $Total->find(1)['total']; ?> </span>
</div> -->
<!-- 結束進站人數 -->
<!-- </div> -->