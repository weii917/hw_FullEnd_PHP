<!-- 15. 套用Title的功能到Ad功能去-->
<div class="col" style="height: 80%;">
    <div class="row mt-5 my-box-shadow">
        <p class="text-center fs-3 fw-bold">動態文字廣告管理</p>
        <form method="post" action="./api/edit.php">
            <table width="100%" style="text-align: center;">
                <tbody>
                    <tr class="yel">
                        <td width="80%">動態文字廣告</td>
                        <td width="10%">顯示</td>
                        <td width="10%">刪除</td>
                    </tr>
                    <!-- 取資料料表資料放入後台顯示表格中 -->

                    <?php
                    $rows = $DB->all();
                    foreach ($rows as $row) {


                    ?>
                        <tr>

                            <td><input class="form-control" type="text" name="text[]" value="<?= $row['text']; ?>" style="width:90%"></td>
                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                            <td><input class="form-check-input" type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>></td>
                            <td><input class="form-check-input" type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table style="margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <input type="hidden" name="table" value="<?= $do; ?>">
                        <td width="200px"><input class="btn btn-dark" type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增動態文字廣告"></td>
                        <td class="cent">
                            <input class="btn my-btn-ok" type="submit" value="修改確定">
                            <input class="btn my-btn-reset" type="reset" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>
</div>