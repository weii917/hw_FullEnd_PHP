<!-- 9.建立modal新增圖片的畫面 -->
<div class="container p-5 ">
    <h3 class='fs-3 fw-bold'>新增訂房</h3>
    <hr>
    <form action="./api/add.php" method="post" enctype="multipart/form-data">
        <table>

            <tr>
                <td>電子郵件</td>
                <td><input class="form-control" type="text" name="email"></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;手機號碼</td>
                <td><input class="form-control" type="text" name="phone" id=""></td>

            </tr>

            <tr>
                <td>飼主姓名</td>
                <td><input class="form-control" type="text" name="name" id=""></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;貓咪姓名</td>
                <td><input class="form-control" type="text" name="catname" id=""></td>
            </tr>


            <tr>
                <td>預計入住日期</td>
                <td><input class="form-control" type="date" name="datein" id=""></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;預計退房日期</td>
                <td><input class="form-control" type="date" name="dateout" id=""></td>
            </tr>

            <tr>
                <td>房型</td>
                <td><input class="form-control" type="text" name="room" id=""></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;貓數</td>
                <td><input class="form-control" type="text" name="catnum" id=""></td>
            </tr>

            <tr>
                <td>如何得知</td>
                <td><input class="form-control" type="text" name="know" id=""></td>
            </tr>
            <tr>
                <td>其他補充</td>
                <td><input class="form-control" type="text" name="other" id=""></td>
            </tr>
        </table>
        <div class="mt-5 text-center">
            <!-- back/title.php附加網址帶進來的table，要隱藏送到api/add.php -->
            <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
            <input class="btn my-btn-ok" type="submit" value="新增">
            <input class="btn my-btn-reset" type="reset" value="重置">
        </div>

    </form>

    <hr style="margin-top:12%">
</div>