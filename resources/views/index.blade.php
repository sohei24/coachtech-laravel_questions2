<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="/" method="POST">
    @csrf
    氏名<br>
    <input type="text" name="name"><br>
    メールアドレス<br>
    <input type="text" name="email"><br>
    <input type="submit" value="送信する">
  </form>
</body>

</html>