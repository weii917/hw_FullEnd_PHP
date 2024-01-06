<?php include_once "../api/db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="../plugin/css/bootstrap.css">
    <script src="../plugin/js/bootstrap.bundle.js"></script>
    <!-- css -->
    <link href="../css/css.css" rel="stylesheet" type="text/css">


</head>

<body>
    <div class="container-fluid">

        <div class="row d-flex">
            <div class="col-6 book-box pb-5 justify-content-center d-flex flex-column align-items-centers">
                <div class="row">


                </div>
                <div class="book p-5">
                    <h2 class="mt-2 book-logo"><a href="../index.php">貓旅館</a></h2>
                    <form class="" method="post" action="../api/check.php">
                        <!-- Email input -->
                        <h3 class="text-center mt-5 pb-3">貓貓旅館線上預約</h3>
                        <div class="row ">
                            <div class="col mb-3">
                                <label for="formGroupExampleInput" class="form-label">電子郵件</label>
                                <input name="email" style="border: none; border-bottom: 1px solid lightgray;" type="email" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                            </div>
                            <div class="col mb-3">
                                <label for="formGroupExampleInput2" class="form-label">手機號碼</label>
                                <input name="phone" style="border: none; border-bottom: 1px solid lightgray;" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="formGroupExampleInput3" class="form-label">飼主姓名</label>
                                <input name="name" style="border: none; border-bottom: 1px solid lightgray;" type="text" class="form-control" id="formGroupExampleInput3" placeholder="Another input placeholder">
                            </div>
                            <div class="col mb-3">
                                <label for="formGroupExampleInput4" class="form-label">貓咪姓名</label>
                                <input name="catname" style="border: none; border-bottom: 1px solid lightgray;" type="text" class="form-control" id="formGroupExampleInput4" placeholder="Another input placeholder">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label for="formGroupExampleInput5" class="form-label">預計入住日期</label>
                                <input name="datein" style="border: none; border-bottom: 1px solid lightgray;" type="date" class="form-control" id="formGroupExampleInput5" placeholder="Another input placeholder">
                            </div>
                            <div class="col mb-3">
                                <label for="formGroupExampleInput6" class="form-label">預計退房日期</label>
                                <input name="dateout" style="border: none; border-bottom: 1px solid lightgray;" type="date" class="form-control" id="formGroupExampleInput6" placeholder="Another input placeholder">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="formGroupExampleInput7" class="form-label">住宿房型</label>
                                <select name="room" id="formGroupExampleInput7" class="form-control" style="border: none; border-bottom: 1px solid lightgray;">
                                    <option value="經典房">經典房</option>
                                    <option value="溫馨房">溫馨房</option>
                                    <option value="星空房">星空房</option>
                                </select>

                            </div>
                            <div class="col mb-3">
                                <label for="formGroupExampleInput8" class="form-label">入住貓數</label>
                                <select name="catnum" id="formGroupExampleInput8" class="form-control" style="border: none; border-bottom: 1px solid lightgray;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="4隻以上">4隻以上</option>
                                </select>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label for="formGroupExampleInput9" class="form-label">如何得知我們</label>
                                <select name="know" id="formGroupExampleInput9" class="form-control" style="border: none; border-bottom: 1px solid lightgray;">
                                    <option value="是我們的老顧客">是我們的老顧客</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Google搜尋">Google搜尋</option>
                                    <option value="朋友介紹">朋友介紹</option>
                                </select>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="formGroupExampleInput10" class="form-label">其他補充事項</label><br>
                                <textarea name="other" id="formGroupExampleInput10" cols="60" rows="5" class="form-control"></textarea>

                            </div>
                        </div>


                        <!-- Submit button -->
                        <input type="hidden" name="table" value="book"></input>
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
    <div class="row mt-5 my-footer">
        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white">About</a></li>
                </ul>
                <p class="text-center text-white">&copy; <?= $Bottom->find(1)['bottom']; ?><br>進站總人數 :<?= $Total->find(1)['total']; ?></p>
                <!-- <span class="t col" style="line-height:123px;"><?= $Bottom->find(1)['bottom']; ?>進站總人數 :<?= $Total->find(1)['total']; ?></span> -->

            </footer>
        </div>
        <!-- <span class="t col" style="line-height:123px;"><?= $Bottom->find(1)['bottom']; ?></span>
		<span class="t col">進站總人數 :<?= $Total->find(1)['total']; ?> </span> -->
    </div>
</body>

</html>