<div class="mt-5">
	<!-- <?php include "marquee.php"; ?> -->
	<!-- <div style="height:32px; display:block;"></div> -->
	<div id="item-1-us" class="col-12 col-lg-8 mx-auto about-us-box">
		<div id="about-us-left" class="row mt-5 mb-5">
			<div class="col-12 col-sm-7 d-flex mt-5 mx-auto">
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
			<div class="col-12 col-sm-5 d-flex mt-5 mx-auto">
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
			setInterval("ww()", 3000);
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
	<div id="item-2-room"></div>
	<div class="room mx-auto col-10">
		<!-- d-flex讓card一樣高 -->
		<div class="row justify-content-end ">

			<h1 class="col-2 text-end border-bottom">房型</h1>
		</div>
		<div class="row">

			<div class=" col-12 col-md-4 mt-5 mb-5">

				<div class="card">
					<img src="./img/cat3.jpg" class="img-top" alt="...">
					<div class="">
						<h5 data-bs-toggle="modal" data-bs-target="#exampleModalLg-1" class="room-1-text text-start">經典房<br>
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
										<h1 class="modal-title fs-5" id="exampleModalLabel-a">經典房</h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										寬 100cm * 深 145cm * 高 350cm <br>
										基本舒適房型 <br><br>
										最多入住 : 2貓<br>
										適合幼小害羞貓咪<br>
										提供：陶瓷貓碗、實木貓碗架、
										開放型貓砂盆<br>
										貓砂提供：礦砂、豆腐砂、松木砂<br>
										房間和公共空間均有24小時的雲端監控系統<br>
										二層貓跳台
										供貓咪跳躍使用
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
			<div class="col-12 col-md-4 mt-5 mb-5">

				<div class="card">
					<img src="./img/cat4.jpg" class="img-top" alt="...">
					<div class="">
						<h5 data-bs-toggle="modal" data-bs-target="#exampleModalLg-2" class="room-1-text text-start">溫馨房<br>
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
										<h1 class="modal-title fs-5" id="exampleModalLabel-b">溫馨房</h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										寬 155cm * 深 150cm * 高 350cm <br>
										溫馨舒適 <br><br>
										最多入住 : 4貓<br>
										適合成年活潑貓咪<br>
										提供：陶瓷貓碗、實木貓碗架、
										開放型貓砂盆<br>
										貓砂提供：礦砂、豆腐砂、松木砂<br>
										房間和公共空間均有24小時的雲端監控系統<br>
										四層貓跳台
										供貓咪跳躍使用
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
			<div class="col-12 col-md-4 mt-5 mb-5">

				<div class="card">
					<img src="./img/cat6.jpg" class="img-top" alt="...">
					<div class="">
						<h5 data-bs-toggle="modal" data-bs-target="#exampleModalLg-3" class="room-1-text text-start">星空房<br>
							<button type="button" class="btn btn-outline-secondary mt-2 " data-bs-toggle="modal" data-bs-target="#exampleModalLg-3">
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
										<h1 class="modal-title fs-5" id="exampleModalLabel-c">星空房</h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">

										寬 200cm * 深 150cm * 高 350cm <br>
										獨立景觀窗 <br><br>
										最多入住 : 6貓<br>
										適合家中多數貓咪<br>
										提供：陶瓷貓碗、實木貓碗架、
										開放型貓砂盆<br>
										貓砂提供：礦砂、豆腐砂、松木砂<br>
										房間和公共空間均有24小時的雲端監控系統<br>
										四層貓跳台
										供貓咪跳躍使用
										有觀景窗的大家庭房，最適合多貓又各自有個性的家庭！
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
	</div>
	<!--item end  -->
	<!--  -->
	<div id="item-3-contact"></div>
	<div class="my-contact-container">
		<div class="row justify-content-start ">

			<h1 class="col-2 text-end border-bottom">聯絡我們</h1>
		</div>
		<div class="container my-iframe-box ">

			<div class="row">

				<div class="d-flex justify-content-center align-items-center col-sm-6 my-iframe p-2">
					<iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.7036493264513!2d121.41951560000001!3d25.044129299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7bec9ad74b1%3A0xa639904a89f26435!2z5Yue5YuV6YOo5Yue5YuV5Yqb55m85bGV572y5YyX5Z-65a6c6Iqx6YeR6aas5YiG572y5rOw5bGx6IG35qWt6KiT57e05aC0!5e0!3m2!1szh-TW!2stw!4v1704804706249!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="my-iframe-text col-sm-6 d-flex flex-column justify-content-center">
					地址：24302新北市泰山區貴子里致遠新村55之1號<br>
					電話：02-2901-8274<br>
					傳真：02-2908-4773<br>

					<hr>
					營業時間
					12:00～21:00<br>

					開放時間（參觀、入退房）
					14:00～20:00<br>
					<hr>
					FB
					https://www.facebook.com<br>

					Line
					@Line<br>

					Email
					cat@gmail.com<br>

					IG
					catIG<br>

				</div>

			</div>
		</div>
	</div>

	<div id="item-5-news"></div>
	<div class="container-fluid my-news-container">
		<div class="row justify-content-end ">

			<h1 class="d-flex col-2 text-end border-bottom">住宿須知</h1>
		</div>
		<div class="mx-auto my-news col-6">
			<i class="fa-solid fa-paperclip my-news-icon"></i>
			<!-- <div class="text-center mt-4 h3">住宿須知

			</div> -->
			<!--class='all'框框的訊息先隱藏，當hover會觸發function動作顯示出來  -->
			<ul class="p-5" style="list-style-type:decimal;">
				<?php
				$news = $News->all(['sh' => 1, 'news_id' => 0], ' limit 20');
				foreach ($news as $n) {
					echo "<li>";
					echo mb_substr($n['text'], 0, 100);
					echo "<div style='display:none'>";
					echo $n['text'];
					echo "</div>";
					echo "</li>";
					echo "<hr>";
					$subnews = $News->all(['sh' => 1, 'news_id' => $n['id']], ' limit 20');
					foreach ($subnews as $sn) {
						echo "<ul>";
						echo mb_substr($sn['text'], 0, 100);
						echo "<div class='all' style='display:none'>";
						echo $sn['text'];
						echo "</div>";
						echo "</ul>";
						echo "<hr>";
					}
				}

				?>
			</ul>
			<div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">

			</div>

		</div>
	</div>


</div>