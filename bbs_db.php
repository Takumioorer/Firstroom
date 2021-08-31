<?php

//DB解除

$sql = null;
$res = null;
$dbh = null;



if ($_POST['username'] !== ""  || $_POST['message']  !== "") {

    try {
        //DB接続
        $dbh = new PDO(
            'mysql:host=localhost;
            dbname=bbs;
            charset=utf8',
            'root',
            ''
        );

        //DBへ追加
        $stmt = $dbh->prepare ("INSERT INTO user (username,message )VALUES(:username,:message)");

        $stmt->bindValue(
            ':username',
htmlspecialchars($_POST['username']), PDO::PARAM_STR);
        $stmt->bindValue(
            ':message', htmlspecialchars($_POST['message']),
            PDO::PARAM_STR);
        $stmt->execute();

        header('location: bbs.php');

        exit;
    } catch (PDOException $e) {
        var_dump($e);
    }
}
?>
