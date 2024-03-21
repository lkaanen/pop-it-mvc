<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Pop it MVC</title>
</head>
<body>
<header>
<style>
       body {
           font-family: Arial, sans-serif;
           background-color: #f0f0f0;
           margin: 0;
       }
       
       nav {
           background-color: #333;
           color: white;
           padding: 10px;
       }
       
       a {
           color: white;
           text-decoration: none;
           margin-right: 10px;
       }
   </style>
  <nav>
    <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
    <?php if (!app()->auth::check()): ?>
        <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
        <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
    <?php else: ?>
        <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
        <?php if (app()->auth::user()->role_id === 1): ?>
            <a href="<?= app()->route->getUrl('/abonents') ?>">Добавить абонента</a>
        <?php else: ?>
        <a href="<?= app()->route->getUrl('/podrazdeleniya') ?>">Подразделения</a>
        <a href="<?= app()->route->getUrl('/telefoni') ?>">Телефоны</a> 
        <a href="<?= app()->route->getUrl('/pomeshcheniya') ?>">Помещения</a>  
        <?php endif; ?>
    <?php endif; ?>
</nav>
</header>
<main>
   <?= $content ?? '' ?>
</main>

</body>
</html>
