<?php
//DB解除
$dbh = null;
$sql = null;
$res = null;

try
{
//DB接続
$dbh = new PDO(
    'mysql:host=localhost;
    dbname=bbs;
    charset=utf8',
    'root',
    ''
);

//DBの情報を配列へ
$sql = "SELECT id,username,message,created_at
        FROM user
        WHERE delete_flag = 0
        ORDER BY id DESC";
$rows = $dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $e)
{
    var_dump($e);
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
crossorigin="anonymous">
    <!-- ORG CSS -->
    <link rel="stylesheet" href="css/bbs.css">
    <title>一言掲示板</title>
</head>

<body>

    <h1>TECK I.S. 掲示板</h1><script>
    //未入力がある場合エラーメッセージを表示
    function check_value()
    {
        var username = document.getElementById('username').value;
        var message = document.getElementById('message').value;
        if(ysername == "" || message == ""){
            //名前が未入力の場合
            if(ysername == ""){
                document.getElementById('error_name').innerHTML = 'ユーザーネームを入力してください';
            }
            //投稿内容が未入力の場合
            if(message == ""){
                document.getElementById('error_message').innerHTML = '投稿内容を入力してください';
            }
            return false;
        }else{
            return true;
        }
    }
    //click_data関数を作成する
    function click_delete(date)
        {
            if(window.confirm('本当に削除されますか？')){
                var id = data;
                location.href='./bulletin_board_front.php?delete=' + id;
            }else{
                window.alert('キャンセルされました');
            }
        }
</script>
    <form method="POST" action="bbs_db.php" onsubmit="return
check_value()">
        <div class="usernameWrapper">
            <div class="form-group">
                <label>表示名</label>
                <input type="text" id="username" name="username" class="form-control username">
                <div id="error_name" style="color: red;"></div>
            </div>
        </div>

        <div class="messageWrapper">
            <div class="form-group">
                <label for="message">ひと言メッセージ</label>
                <textarea type="text" id="message" name="message" class="form-control massage" st></textarea>
            </div>
        </div>

        <div class="btnWrapper">
            <input type="submit" value="投稿" 　class="btn btn-primary">
        </div>
    </form>
    <div class="bodyWrapper">

    <?php
    //ページネーションの作成
    //表示件数を取得
    $rows_count = count($rows);
    $pagination = ceil($rows_count / 5);
    $thump = 5;
    if(!isset($_GET['num']) || $_GET['num'] == 1) {
        //0~5件のデータを取ってくる
        $array = array_slice($rows,0,$thump,true);
        //DBのデータを取り出す
        // DBのデータをforeachで回す
        include('message.php');
    }else{
        //その他ページネーションの処理
        $array = array_slice($rows,$_GET['num']  *  $thump,$thump,true);
        //DBのデータを取り出す
        //DBのデータをforeachで回す
        include('message.php');
    } ?>
    <div class="pagination">
    <?php for($num=1; $num<=$pagination; $num++) { ?>
        <a class="btn btn-primary box"
href="bulletin_board_front.php?num=<?$num?>">
        <?= $num ?>
        </a>
    <?php } ?>
    </div>
    </div>
</body>

</html>