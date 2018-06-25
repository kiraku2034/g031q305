<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "UTF-8">
    <title>データ表示</title>
</head>

<body>
    <h1>記録表示</h1>
</body>


<?php
try{
      $pdo = new PDO('mysql:host=localhost;dbname=g031q305','root','',
      array(PDO::ATTR_EMULATE_PREPARES => false));

      $date=$_POST['date'];
      $all=$_POST['all'];
      $take=$_POST['take'];

      if (($date != null) && ($all != null) && ($take != null)){
      $stmt = $pdo -> prepare("INSERT INTO test1(date,shot_all,shot_take)
      VALUES (:date,:shot_all,:shot_take)");
      $stmt->bindParam(':date',$date,PDO::PARAM_STR);
      $stmt->bindValue(':shot_all',$all,PDO::PARAM_INT);
      $stmt->bindValue(':shot_take',$take,PDO::PARAM_INT);
      $stmt->execute();
      }
?>
<table>
  <tr>
    <th>日付</th><th>打った本数</th><th>決めた本数</th>
  </tr>

<?php
    foreach($pdo->query('SELECT * from test1') as $row):
 ?>

 <tr>
   <th><?php echo $row["date"]; ?></th>
   <th><?php echo $row["shot_all"]; ?></th>
   <th><?php echo $row["shot_take"]; ?></th>
 </tr>
<?php
endforeach;
?>
</table>
<?php
} catch (PDOException $e) {
 exit('データベース接続に失敗しました。'.$e->getMessage());
}
?>
