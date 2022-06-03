<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/register">
        @csrf <!--anti ssl-->
        <label for="name">Name:</label>
        <input type="text" name="name"><br>
        <label for="email">E-mail:</label>
        <input type="text" name="email"><br>
        <label for="password">Senha:</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>