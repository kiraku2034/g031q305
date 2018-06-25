<!DOCTYPE html>
<html lang = "ja">
<head>
      <meta charset = "UTF-8">
      <title>入力画面</title>
</head>

<body>
<center>
      <h1>データ入力フォーム</h1>
      <form method = "POST" action = "record.php">
              <p>日付:<input type="date" name="date"></p>
              <p>打った本数:<input type="number" name="all" min="0" max="100" value="0"></p>
              <p>決めた本数:<input type="number" name="take" min="0" max="100" value="0"></p>
             <p><input type = "submit" value = "登録" /></p>
      </form>
</center>
</body>
</html>
