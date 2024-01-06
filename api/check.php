<?php include_once "db.php";
$table = $_POST['table'];
unset($_POST['table']);
switch ($table) {
    case "admin":
        // 帳號密碼檢查
        if ($Admin->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]) > 0) {
            $_SESSION['login'] = $_POST['acc'];
            to("../back.php");
        } else {
            to("../front/login.php?error=帳號密碼錯誤");
        }
        break;
    case "book":
        $Book->save($_POST);

        to("../index.php?book=1");
        break;
}
