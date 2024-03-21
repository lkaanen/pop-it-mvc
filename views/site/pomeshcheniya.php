<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подсчет абонентов</title>
</head>
<body>
    <h1>Подсчет количества абонентов по подразделениям и помещениям</h1>
    
    <form method="post">
        <label for="department">Введите название подразделения:</label>
        <input type="text" id="department" name="department" required>
        
        <label for="room">Введите номер помещения:</label>
        <input type="text" id="room" name="room" required>
        
        <label for="subscribers">Введите количество абонентов:</label>
        <input type="number" id="subscribers" name="subscribers" required>
        
        <button type="submit">Отправить</button>
    </form>
</body>
</html>