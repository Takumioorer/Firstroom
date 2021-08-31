<?php foreach ($array as $row) { ?>
    <div class="messageRow">
        <div class="message">
            <div class="user_id">
                <p>NO:<?= $row['id']; ?></p>
            </div>
            <div class="user_name">
                <p>name:<?= $row['username']; ?></p>
            </div>
            <div class="user_message">
                <p><?= $row['message']; ?></p>
            </div>
            <div class="timestanp">
                <p><?= $row['created_at']; ?></p>
            </div>
            <div class="user_delete">
            <button id="delete" class="btn btn-danger" value="<?=
$row['id'] ?>" onclick="return click_delete(<?= $row['id']; ?>)">削除
</button>
            </div>
        </div>
    </div>
<?php } 