<?php
try {
//   MySQLへ接続する際に必要なパラメータを各変数に格納
  $dbHost = getenv('DB_HOST');
  $dbPort = getenv('DB_PORT');
  $dbName = getenv('DB_NAME');
  $dbUser = getenv('DB_USER');
  $dbPass = getenv('DB_PASS');
    // データベースへの接続処理
  $dsn = "mysql:dbname=$dbName;host=$dbHost:$dbPort";
  $dbh = new PDO($dsn, $dbUser, $dbPass);
} catch (PDOException $e) {
  echo 'データベース接続失敗:';
  echo $e->getMessage();
  exit();
}