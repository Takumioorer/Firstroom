<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>じゃんけん</title>
</head>
<body>
    <div id="Wrapper">
        <header>
            <div class="header-logo">ゆるプログラミング講座</div>
        </header>
        <main>
            <h1>練習問題(1) じゃんけん</h1>
            出す手を選んで勝負してください。
            <div class="form-box">
                <form action="kekka.php" method="post">
                    <label>
                        <input type="radio" title="playerhand" name="playerhand" value="グー"　checked>グー
                    </label>
                    <label>
                        <input type="radio" title="playerhand" name="playerhand" value="チョキ">チョキ
                    </label>
                    <label>
                        <input type="radio" title="playerhand" name="playerhand" value="パー">パー
                    </label>
                    <button type="submit" class="battle-button">勝負する！</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>