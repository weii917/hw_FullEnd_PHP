<?php
if (isset($_SESSION['login'])) {
	to("back.php");
}


if (isset($_GET['error'])) {
	echo "<script>alert('{$_GET['error']}')</script>";
}

?>
<!-- <div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;"> -->
<!-- <?php include "marquee.php"; ?> -->
<!-- <div style="height:32px; display:block;"></div> -->
<!--正中央-->
<!-- <form method="post" action="./api/check.php">
		<p class="t botli">管理員登入區</p>
		<p class="cent">帳號 ： <input name="acc" autofocus="" type="text"></p>
		<p class="cent">密碼 ： <input name="pw" type="password"></p>
		<p class="cent"><input value="送出" type="submit"><input type="reset" value="清除"></p>
	</form> -->
<!-- </div> -->
<!-- my -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="../plugin/css/bootstrap.css">
	<script src="../plugin/js/bootstrap.bundle.js"></script>
	<!-- css -->
	<link href="../css/css.css" rel="stylesheet" type="text/css">
	<!-- <style>
		body {
			margin: 0;
			box-sizing: border-box;
		}

		.login-box {
			height: 100vh;
			width: 50%;
		}

		.login-img {
			width: 100%;
			height: 100%;
		}

		.login {
			width: 50vh;
			height: 50vh;
		}

		.my-btn-login {
			width: 100%;
			background-color: burlywood;
			border: 0;
			height: 6vh;
		}

		.my-login-reset {
			width: 100%;
			height: 6vh;
			background-color: white !important;
			color: burlywood !important;
			border: 1px solid burlywood !important;

		}

		.my-btn-login:hover {
			background-color: rgb(202, 156, 95) !important;

			border: 1px solid burlywood !important;

		}

		.my-login-reset:hover {
			background-color: black !important;
			color: white !important;
		}
	</style> -->

</head>

<body>
	<div class="container-fluid">

		<div class="row d-flex">
			<div class="col-6  login-box pb-5 justify-content-center d-flex flex-column align-items-start">
				<h2 class="login-logo"><a href="../index.php">貓旅館</a></h2>
				<div class=" login p-5">

					<form class="" method="post" action="../api/check.php">
						<!-- Email input -->
						<h3 class="mb-2">Login</h3>

						<div class="mb-3">
							<label for="formGroupExampleInput" class="form-label">Account</label>
							<input name="acc" style="border: none; border-bottom: 1px solid lightgray;" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
						</div>


						<!-- Password input -->
						<div class="mb-3">
							<label for="formGroupExampleInput2" class="form-label">Password</label>
							<input name="pw" style="border: none; border-bottom: 1px solid lightgray;" type=" password" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
						</div>

						<!-- 2 column grid layout for inline styling -->
						<div class="row mb-4">
							<div class="col d-flex justify-content-center">
								<!-- Checkbox -->
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
									<label class="form-check-label" for="form2Example31"> Remember me </label>
								</div>
							</div>

							<div class="col">
								<!-- Simple link -->
								<a href="#!">Forgot password?</a>
							</div>
						</div>

						<!-- Submit button -->
						<input type="submit" value="提交" class="my-btn-login btn  btn-block mb-4"></input>
						<input type="reset" value="清除" class="my-login-reset btn  btn-block mb-4"></p>

					</form>
				</div>

			</div>
			<div class="col-6 login-box px-0">
				<img class="login-img" src="https://images.unsplash.com/photo-1683000789824-b7529dcb26a0?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
			</div>
		</div>
	</div>
</body>

</html>