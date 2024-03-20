<!DOCTYPE html>
<html>
<head>
    <title>Выбор всех номеров абонентов</title>
</head>
<body>
    <h2>Выберите все номера абонентов:</h2>
    <form action="/submit" method="post">
        <label for="number1">
            <input type="checkbox" id="number1" name="abonent_number[]" value="123456789">
            Номер абонента 1 (123456789)
        </label><br>
        
        <label for="number2">
            <input type="checkbox" id="number2" name="abonent_number[]" value="987654321">
            Номер абонента 2 (987654321)
        </label><br>
        
        <label for="number3">
            <input type="checkbox" id="number3" name="abonent_number[]" value="555666777">
            Номер абонента 3 (555666777)
        </label><br>
        
        <!-- Добавьте дополнительные номера по аналогии -->
        
        <input type="submit" value="Отправить">
    </form>
</body>
</html>