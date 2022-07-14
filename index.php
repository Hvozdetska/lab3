<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab3</title>
    <script src="script.js"></script>
</head>
<body>
<form action="" method="post" id="genre">
    <label> Genre:
        <input type="text" name="genre">
    </label>
    <input type="submit"><br>
</form>
<br>
<form action="" method="post" id="actor">
    <label> Actor:
        <input type="text" name="actor">
    </label>
    <input type="submit"><br>
</form>
<br>
<form action="" method="post" id="date">
    <label> Date Start:
        <input type="date" name="start">
    </label>
    <label> Date End:
        <input type="date" name="end">
    </label>
    <input type="submit"><br>
</form>
<div id="content" style="display: flex"></div>
</body>
</html>
