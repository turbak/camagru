<html>
<meta charset="UTF-8">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
<form id="login" action="login" method="post">
    <h1>Login</h1>
    <fieldset id="inputs">
        <input id="username" type="text" placeholder="Логин" name="login" autofocus required>
        <input id="password" type="password" placeholder="Пароль" name="password" required>
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" name="submit" value="OK">
        <a href="register">Регистрация</a>
    </fieldset>
</form>
</body>
</html>