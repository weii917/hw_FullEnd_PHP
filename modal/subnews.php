<?php include_once "../api/db.php"; ?>
<h3>編輯次選單</h3>
<hr>
<form action="./api/subnews.php" method="post" enctype="multipart/form-data">
    <table class='cent' id='sub'>
        <tr>
            <td width="70%">次選項名稱</td>
            <td>刪除</td>
        </tr>
        <?php
        $subs = $News->all(['news_id' => $_GET['id']]);
        foreach ($subs as $sub) {
        ?>
            <tr>
                <td><input style="width:500px" type="text" name="text[]" value="<?= $sub['text']; ?>"></td>
                <td><input type="checkbox" name="del[]" value="<?= $sub['id']; ?>"></td>
                <input type="hidden" name="id[]" value="<?= $sub['id']; ?>">
            </tr>
        <?php
        }
        ?>
    </table>
    <div>
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input type="hidden" name="news_id" value="<?= $_GET['id']; ?>">
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
        <input type="button" value="更多次選單" onclick="more()">
    </div>

</form>
<script>
    function more() {
        let item = `<tr>
                <td><input style="width:500px" type="text" name="add_text[]" id=""></td>               
              </tr>`

        $("#sub").append(item);

    }
</script>