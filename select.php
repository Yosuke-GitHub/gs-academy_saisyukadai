<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ToDoList</title>
  <link rel="stylesheet" href="css/style.select.css">
  <style>div{padding: 10px 0 ;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header"><a class="navbar-brand" href="index.php">ToDo一覧へ移動</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここからinsert.phpにデータを送ります -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>新規登録</legend>
     <label><p>
      <select name="groups">
      <option value="0" selected="selected">グループを選択</option>
      <option value="1">グループ1</option>
      <option value="2">グループ2</option>
      <option value="3">グループ3</option>
      <option value="4">グループ4</option>
      <option value="5">グループ5</option>
      </select></p>
    </label><br>
     <label><p>ToDo名</p><input type="text" name="title"></label><br>
     <!-- ↓可能なら付け加える -->
     <!-- <label>期限日<input type="text" name="email"></label><br> -->
     <label><p>内容</p><textArea name="content" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>


<!-- Main[End] -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/select.js"></script>

</body>
</html>
