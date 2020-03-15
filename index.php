<?php
//1.  DB接続します a_dbにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=a_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM memorandum");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<li><label class="memo' .$result["groups"].'"> <input type="checkbox" name="" id="">';
    $view .=$result["title"].":  ".$result["content"];
    $view .= "</label></li>";
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ToDoList</title>
<link rel="stylesheet" href="css/style.index.css">
<style>div{padding: 10px 0 ;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->  
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] $view-->
<div class="filter" id="js-filter">
  <ul class="filter-groups">
    <li><label><input type="checkbox" id="group1">グループ1</label></li>
    <li><label><input type="checkbox" id="group2">グループ2</label></li>
    <li><label><input type="checkbox" id="group3">グループ3</label></li>
    <li><label><input type="checkbox" id="group4">グループ4</label></li>
    <li><label><input type="checkbox" id="group5">グループ5</label></li>
    <li><label><input type="checkbox" id="all">全表示</label></li>
  </ul>
  <div class="filter-btn"><p>絞り込み</p></div>
</div>
<div class="intro"><p>リストをクリック→詳細表示</p></div>
<div>
    <div class="container jumbotron"><ul>
      <?=$view?>
    </ul></div>
    <div class="function">
      <div class="delete-btn"><p>削除</p></div>
      <div class="new-add"><a href="select.php">+</a></div>
    </div>
    <!-- Main[End] -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/index.js"></script>

</body>
</html>
