<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Система управления абонентами и телефонами</title>
    
    <style> {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
}

h1 {
    text-align: center;
}

h2 {
    margin-top: 20px;
}

form {
    margin-bottom: 20px;
}

input[type="text"],
select {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
}

input[type="submit"] {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}
</style>
</head>
<body>
    <h1>Система управления абонентами и телефонами</h1>

    <h2>Добавить нового абонента:</h2>
    <form>
        Имя: <input type="text" name="first_name"><br>
        Фамилия: <input type="text" name="last_name"><br>
        Должность: <input type="text" name="position"><br>
        Дата рождения: <input type="date" name="birth_date"><br>
        <!-- Дополнительные поля по необходимости -->
        <input type="submit" value="Добавить абонента">
    </form>

    <h2>Добавить новое помещение:</h2>
    <form>
        Номер помещения: <input type="text" name="room_number"><br>
        Площадь: <input type="text" name="area"><br>
        <!-- Дополнительные поля по необходимости -->
        <input type="submit" value="Добавить помещение">
    </form>

    <h2>Добавить новое подразделение:</h2>
    <form>
        Название подразделения: <input type="text" name="department_name"><br>
        Описание: <input type="text" name="description"><br>
        <!-- Дополнительные поля по необходимости -->
        <input type="submit" value="Добавить подразделение">
    </form>

    <h2>Добавить новый телефон и привязать к абоненту:</h2>
    <form>
        Номер телефона: <input type="text" name="phone_number"><br>
        Тип телефона: <select name="phone_type">
            <option value="мобильный">Мобильный</option>
            <option value="домашний">Домашний</option>
        </select><br>
        Выберите абонента: <!-- Здесь можно предоставить список доступных абонентов для выбора -->
        <input type="submit" value="Добавить телефон и привязать">
    </form>
</body>
</html>