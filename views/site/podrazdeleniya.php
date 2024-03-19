<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выбор номеров абонентов по подразделениям</title>
</head>

<body>
    <h1>Выбор номеров абонентов по подразделениям</h1>

    <label for="departmentSelect">Выберите подразделение:</label>
    <select id="departmentSelect">
        <option value="it">IT отдел</option>
        <option value="hr">HR отдел</option>
        <option value="finance">Финансовый отдел</option>
        <!-- Добавьте другие подразделения по мере необходимости -->
    </select>

    <h2>Номера абонентов в выбранном подразделении:</h2>
    <ul id="subscriberList">
        <!-- Номера абонентов будут добавлены вручную -->
    </ul>
</body>

</html>