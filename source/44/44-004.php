<?php
  require_once 'MDB2.php';
  header('Content-Type: text/html; charset=UTF-8');
  $author = $_GET['author'];
  $mdb2 = MDB2::connect('pgsql://wasbook:wasbook@localhost/wasbook?charset=utf8');
  $sql = "SELECT * FROM books WHERE author = ? ORDER BY id";
  $stmt = $mdb2->prepare($sql, array('text'));
  // SQL文を実行。executeメソッドの引数は、パラメータの実際の値
  $rs = $stmt->execute(array($author));
?>
<html>
<body>
<table border=1>
<tr>
<th>蔵書ID</th>
<th>タイトル</th>
<th>著者名</th>
<th>出版社</th>
<th>出版年月</th>
<th>価格</th>
</tr>
<?php
  while($row = $rs->fetchRow()) {
    echo "<tr>\n";
    for ($j = 0; $j < 6; $j++) {
      echo "<td>" . $row[$j] . "</td>\n";
    }
    echo "</tr>\n";
  }
  $mdb2->disconnect();
?>
</table>
</body>
</html>
