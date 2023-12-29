<div class="mt-5">
	<!-- <?php include "marquee.php"; ?> -->
	<!-- <div style="height:32px; display:block;"></div> -->
	<div class="col-8 mx-auto about-us-box">
		<div class="row mt-5 mb-5">
			<div class="col-7 d-flex ">
				<div class="about-us d-flex justify-content-center flex-column">
					<h1 class="mb-5">關於我們</h1>
					<p class="my-line-height">
						歡迎來到貓旅館，<br>一個專為您的貓咪打造溫暖的地方。<br>
						我們理解每一隻貓咪都是家庭的一部分，<br>
						因此我們致力於提供一個舒適、安全和充滿樂趣的環境。<br>
					</p>
				</div>
			</div>
			<!--輪播圖片start-->
			<div class="col-5 d-flex">
				<div class="my-img">
					<i class="fa-solid fa-paw my-cat-hand"></i>
					<div id="mwww" loop="true" style="width:100%; height:100%;">
						<div style="width:99%; height:100%; position:relative;" class="cent">沒有資料</div>
					</div>
				</div>
			</div>
			<!--輪播圖片end-->

		</div>
	</div>
	<!--輪播圖片js start -->
	<script>
		// 宣告一個陣列，把資料庫撈出來的img檔名，存進lin裡面，顯示圖片時依據索引顯示
		var lin = new Array();
		<?php
		$lins = $Mvim->all(['sh' => 1]);
		foreach ($lins as $lin) {
			echo "lin.push('{$lin['img']}');";
		}
		?>

		var now = 0;
		// 一載入網頁執行顯示照片，在now變1之前先執行1次顯示索引0第一張照片，因3秒後才會顯示輪播照片，並且now=1
		ww();
		// 如果大於1有2張圖片執行每三秒輪播圖片，
		if (lin.length > 1) {
			setInterval("ww()", 5000);
			now = 1;
		}

		function ww() {
			$("#mwww").html("<embed  class='about-us-img' loop=true src='./img/" + lin[now] + "' style='width:99%; height:100%;'></embed>")
			//$("#mwww").attr("src",lin[now])
			now++;
			if (now >= lin.length)
				now = 0;
		}
	</script>
	<!--輪播圖片js end  -->

	<!--item start  -->
	<div class="room row mt-5">
		<!-- d-flex讓card一樣高 -->
		<div class="room-1 col-sm-12 col-md-4 d-flex">

			<div class="">
				<img src="./img/cat6.jpg" class="card-img-top" alt="...">
				<div class="">
					<h5 class="room-1-text text-start">經典房<br>
						<button type="button" class="btn btn-outline-secondary mt-2 " data-bs-toggle="modal" data-bs-target="#exampleModalLg-1">
							more
						</button>
					</h5>

					<!-- <div class="col d-md-flex justify-content-md-end"> -->

					<!-- </div> -->
					<!-- lg start -->
					<div class="modal fade" id="exampleModalLg-1" tabindex="-1" aria-labelledby="exampleModalLabel-a" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel-a">Modal title</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									modal-lg 800px
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
								</div>
							</div>
						</div>
					</div>
					<!-- lg end -->

				</div>
			</div>
		</div>
		<div class="room-2 col-sm-12  col-md-4 d-flex">

			<div class="">
				<img src="./img/cat4.jpg" class="card-img-top" alt="...">
				<div class="">
					<h5 class="room-1-text text-start">溫馨房<br>
						<button type="button" class="btn btn-outline-secondary mb-1" data-bs-toggle="modal" data-bs-target="#exampleModalLg-2">
							more
						</button>
					</h5>

					<!-- <div class="col d-md-flex justify-content-md-end"> -->

					<!-- </div> -->
					<!-- lg start -->
					<div class="modal fade" id="exampleModalLg-2" tabindex="-1" aria-labelledby="exampleModalLabel-b" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel-b">Modal title</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									modal-lg 800px
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
								</div>
							</div>
						</div>
					</div>
					<!-- lg end -->

				</div>
			</div>
		</div>
		<div class="room-3 col-sm-12 col-md-4 d-flex">

			<div class="">
				<img src="./img/cat5.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="room-1-text text-start">星空房<br>
						<button type="button" class="btn btn-outline-secondary mb-1" data-bs-toggle="modal" data-bs-target="#exampleModalLg-3">
							more
						</button>
					</h5>

					<!-- <div class="col d-md-flex justify-content-md-end"> -->

					<!-- </div> -->
					<!-- lg start -->
					<div class="modal fade" id="exampleModalLg-3" tabindex="-1" aria-labelledby="exampleModalLabel-c" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel-c">Modal title</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									modal-lg 800px
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
								</div>
							</div>
						</div>
					</div>
					<!-- lg end -->

				</div>
			</div>
		</div>

	</div>
	<!--item end  -->
	<!--  -->
	<div class="mx-auto my-news">
		<span class="t botli">住宿須知
			<?php
			if ($News->count(['sh' => 1]) > 5) {
				echo "<a href='?do=news' style='float:right'>More...</a>";
			}

			?>

		</span>
		<!--class='all'框框的訊息先隱藏，當hover會觸發function動作顯示出來  -->
		<ul class="ssaa" style="list-style-type:decimal;">
			<?php
			$news = $News->all(['sh' => 1], ' limit 5');
			foreach ($news as $n) {
				echo "<li>";
				echo mb_substr($n['text'], 0, 20);
				echo "<div class='all' style='display:none'>";
				echo $n['text'];
				echo "</div>";
				echo "...</li>";
			}

			?>
		</ul>
		<div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">

		</div>
		<script>
			// show出來的層級div會較li大所以壓過li的訊息，
			// 滑鼠在li上會顯示li底下子項目的class='all'裡的資料
			$(".ssaa li").hover(
				function() {

					$("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
					$("#altt").show()
				}
			)
			//移開會消失，如果滑鼠在.all那一層因為變成hover在div不是li了所以觸發mouseout事件，此區塊訊息會消失，
			// 會造成閃爍，要從最前移動不要碰到.all談出的黃框訊息
			$(".ssaa li").mouseout(
				function() {
					$("#altt").hide()
				}
			)
		</script>
	</div>

</div>