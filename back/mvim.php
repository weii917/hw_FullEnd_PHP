<div class="col" style="height: 80%;">
    <div class="row mt-5 my-box-shadow" style="height: 80%;">
        <p class="text-center fs-3 fw-bold">動畫圖片管理</p>
        <form method="post" action="./api/edit.php">
            <table width="100%" style="text-align: center;">
                <tbody>
                    <tr class="yel">
                        <td width="40%">動畫圖片</td>
                        <td width="10%">顯示</td>
                        <td width="10%">刪除</td>
                        <td></td>
                    </tr>
                    <!-- 取資料料表資料放入後台顯示表格中 -->
                    <?php
                    $rows = $DB->all();
                    foreach ($rows as $row) {


                    ?>
                        <!-- 做mvim時發現沒有id取用所以這裡藏一個id讓edit在處理mvim有id依據刪除編輯 -->
                        <tr>
                            <td width="45%"><img src="./img/<?= $row['img']; ?>" style="width:150px;height:100px" alt=""></td>
                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                            <td width="7%"><input class="form-check-input" type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>></td>
                            <td width="7%"><input class="form-check-input" type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
                            <td><input class="btn my-btn-update" type="button" onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do; ?>&id=<?= $row['id']; ?>')" value="更新動畫"></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table style="margin-top:40px; width:100%;">
                <tbody>
                    <tr>
                        <input type="hidden" name="table" value="<?= $do; ?>">
                        <td width="42%"><input class="btn btn-dark" type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增動畫圖片"></td>
                        <td class="">
                            <input class="btn my-btn-ok" type="submit" value="修改確定">
                            <input class="btn my-btn-reset" type="reset" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>
</div>