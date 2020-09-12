<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Вывод данных товаров</title>
</head>
<style>
    table{
        border: 4px double black;
        border-collapse: collapse;
        text-align: center;
    }
    table td,table th {
        padding: 4px;
        border:1px solid #000;
    }
</style>
<body>
<form method="post">
    <p>Наведите курсор на поле ввода и выберите производителя
        <input type = "text" list = "offers" name="offer[]" onchange="this.form.submit()"> <!-- ссылаемся на список предопределенных вариантов -->
    </p>
    <datalist id = "offers"> <!--Список предопределенных вариантов для ввода-->
        <option type="hidden" value="AllOffers" ></option>
        <?php foreach($producers as $value) : ?>
            <option value=<?=$value?>><?=$value?></option>
        <?php endforeach; ?>
    </datalist>
</form>
<table>
    <thead>
    <tr>
        <th>Id категории</th>
        <th>Id подкатегории</th>
        <th>Категория</th>
        <th>Id товара</th>
        <th>Название товара</th>
        <th>Описание</th>
        <th>ссылка</th>
        <th>Картинка</th>
        <th>Цена</th>
        <th>Оптовая цена</th>
        <th>Производитель</th>
        <th>Артикул</th>
        <th>Новинка</th>
        <th>statusAction</th>
        <th>statusTop</th>
        <th>Цвет</th>
        <th>Активность</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($dataOffers as $value) : ?>
        <tr>
            <td><?=$value['category_id']?></td>
            <td><?=$value['parent_id']?></td>
            <td><?=$value['category']?></td>
            <td><?=$value['id']?></td>
            <td><?=$value['name']?></td>
            <td><?=$value['description']?></td>
            <td><a href="<?=$value['url']?>" target="_blank"><?=$value['name']?></a></td>
            <td><?=$value['picture']?></td>
            <td><?=$value['price']?></td>
            <td><?=$value['optprice']?></td>
            <td><?=$value['vendor']?></td>
            <td><?=$value['articul']?></td>
            <td><?=($value['statusNew'] == 1 ? 'Да' : 'Нет')?></td>
            <td><?=($value['statusAction'] == 1 ? 'Да' : 'Нет')?></td>
            <td><?=($value['statusTop'] == 1 ? 'Да' : 'Нет')?></td>
            <td><?=$value['color']?></td>
            <td><?=($value['available'] == 1 ? 'Да' : 'Нет')?> </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
