<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demoexamen</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php include 'header.php'; ?>
    <main class = "container_reg">
    <h2>Регистрация</h2>
    <form action="vendor/register_process.php" method="post">
            <label>ФИО</label>
            <input type="text" name="full_name"placeholder="Введите ФИО">

            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите логин">

            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите пароль">


            <label>Email</label>
            <input type="email" name="email" placeholder="Введите почту">

            <label>Номер телефона</label>
            <input type="text" name="phone" placeholder="Введите номер телефона">

            <button>Зарегистрироваться</button>   
            <p>
                Вы уже зарегистрированы ? - <a href="auth.php">Войти</a>
            </p>   
        </form>
    </main>

  
</body>
</html>