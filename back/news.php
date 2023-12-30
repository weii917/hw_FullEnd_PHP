<div class="col" style="height: 80%;">
    <div class="row mt-5 my-box-shadow">
        <p class="text-center fs-3 fw-bold">住宿需知資料管理</p>
        <form method="post" action="./api/edit.php">
            <table width="100%" style="text-align: center;">
                <tbody>
                    <tr class="yel">
                        <td width="70%">住宿需知</td>
                        <td width="10%">次選單數</td>
                        <td width="10%">顯示</td>
                        <td width="10%">刪除</td>
                        <td></td>
                    </tr>
                    <!-- 設定分頁變數 -->
                    <?php
                    $total = $DB->count(['news_id' => 0]);
                    $div = 5;
                    $pages = ceil($total / $div);
                    $now = $_GET['p'] ?? 1;
                    $start = ($now - 1) * $div;
                    $rows = $DB->all(['news_id' => 0], " limit $start,$div");

                    foreach ($rows as $row) {
                    ?>
                        <tr>

                            <td><textarea class="form-control" type="text" name="text[]" style="width:90%;height:60px"><?= $row['text']; ?></textarea></td>
                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                            <td><?= $News->count(['news_id' => $row['id']]); ?></td>
                            <td><input class="form-check-input" type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>></td>
                            <td><input class="form-check-input" type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
                            <td>
                                <input class="btn my-btn-update" type="button" value="編輯次項目" onclick="op('#cover','#cvr','./modal/subnews.php?table=<?= $do; ?>&id=<?= $row['id']; ?>')">
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <!-- 處理分頁 -->
            <!-- 判斷當前頁等於字型變大 -->
            <div class="cent">
                <?php
                if ($now > 1) {
                    $prev = $now - 1;
                    echo "<a href='?do=$do&p=$prev'> < </a>";
                }
                for ($i = 1; $i <= $pages; $i++) {
                    $fontsize = ($now == $i) ? '24px' : '16px';
                    echo "<a href='?do=$do&p=$i' style='font-size:$fontsize'> $i </a>";
                }
                if ($now < $pages) {
                    $next = $now + 1;
                    echo "<a href='?do=$do&p=$next'> > </a>";
                }
                ?>
            </div>
            <table style="margin-top:40px; width:100%;">
                <tbody>
                    <tr>
                        <input type="hidden" name="table" value="<?= $do; ?>">
                        <td width="42%"><input class="btn btn-dark" type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增最新消息資料"></td>
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