<?php
$createDB = "CREATE DATABASE IF NOT EXISTS furniture_store";

$createTableCategories = "CREATE TABLE IF NOT EXISTS categories (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    parent_id INT NOT NULL,
    PRIMARY KEY (id)
)";

$createTableProducts = "CREATE TABLE IF NOT EXISTS products (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    price INT NOT NULL,
    PRIMARY KEY (id)
)";

$createTableProductsCategory = "CREATE TABLE IF NOT EXISTS products_categories (
    id INT NOT NULL AUTO_INCREMENT,
    product_id INT NOT NULL,
    category_id INT NOT NULL,
    PRIMARY KEY (id)
)";

$insertCategories = "INSERT INTO categories (id, name, parent_id) VALUES 
    (1, 'Товары для дома', 0), (2 , 'Товары для офиса', 0),
    
    (3 , 'Мебель для дома', 1), (4 , 'Мебель для офиса', 2),
    
    (5, 'Мягкая мебель', 3), (6, 'Мебель для гостинной', 3), (7,'Мебель для спальни', 3),
    
    (8, 'Диваны', 5), (9, 'Пуфики', 5),
    (10, 'Стенки в гостинную', 6), (11, 'Серванты', 6), (12, 'Буфеты', 6),
    (13, 'Кровати', 7), (14, 'Детские кровати', 7), (15, 'Спальные гарнитуры', 7),
    
    (16, 'Офисная мягкая мебель', 4), (17, 'Мебель для кабинета', 4), (18, 'Корпусная офисная мебель', 4), 
    
    (19, 'Диваны', 16), (20, 'Кресла', 16), 
    (21, 'Столы', 17), (22, 'Офисные стулья', 17), (23, 'Офисные кресла', 17),
    (24, 'Офисные шкафы', 18), (25, 'Книжные шкафы', 18), (26, 'Тумбы', 18)
    ";

$insertProducts = "INSERT INTO products(id, name, price) VALUES 
    (1, 'Шкаф \"Сенатор Шс-8\" Дорис', 9500), (2, 'Шкаф книжный \"Zanini 908G\" Italexport', 66500), (3, 'Шкаф книжный \"Tavoli 418\" Italexport', 22400),
    (4, 'Диван \"Шерхан\" Maro',135000), (5, 'Диван \"Армандо раскладной\" Maro', 70000), (6, 'Диван \"Милорд голд\" Maro', 55000), 
    (7, 'Пуфик \"Leonardo Rombo\" Lareto', 65000), (8, 'Пуфик \"Amato\" Lareto', 5000), (9, 'Пуф \"Loft большой\" Kupa', 7320), 
    (10, 'Гостиная \"Универсал 2700\" Garant', 8700), (11, 'Гостиная Фабиана \"Світ Меблів\"', 10200), (12, 'Гостиная Кантри \"Світ Меблів\"', 12300), 
    (13, 'Сервант \"Барон\" Мебель-Сервис', 6540), (14, 'Сервант 2ДВ \"Виола\" MiroMark', 6430), (15, 'Сервант 127 \"Тоскана\" Скай', 7500),
    (16, 'Буфет \"Соната 2\" Радо', 32450), (17, 'Буфет KOM 2W1D3S \"Эльпассо\" Gerbor', 5200), (18, 'Буфет \"Prime 7\" Blonski', 8250), 
    (19, 'Кровать двуспальная \"Милана\" Сокме', 5300), (20, 'Кровать двуспальная \"Токио\" Мебель-Сервис', 3420), (21, 'Кровать двуспальная \"Доминика\" Мастер-Форм', 2300), 
    (22, 'Детская кровать \"Кадет\" Пехотин', 6300), (23, 'Кровать-чердак \"Микс\" Ямал', 5500), (24, 'Кровать-чердак \"Орбита\" Пехотин', 7320), 
    (25, 'Спальня \"Токио\" Мебель-Сервис', 23400), (26, 'Спальня \"Реджина Голд\" MiroMark', 34200), (27, 'Спальня \"Василиса\" Мастер-Форм', 72300), 
    (28, 'Офисный модульный диван Плаза Премьера', 23400), (29, 'Офисный модульный диван Метро Премьера', 29300), (30, 'Офисный диван Твист Премьера', 6730), 
    (31, 'Офисное кресло \"Трон №3\" Курьер', 12300), (32, 'Офисное кресло Лотос Клуб Премьера', 3450), (33, 'Офисное кресло \"Дует\" НСТ Альянс', 6740), 
    (34, 'Стол офисный ОН-46 Ника-Мебель', 670), (35, 'Угловой офисный стол ОН-60 Ника-Мебель', 2350), (36, 'Стол офисный Матролюкс', 1200), 
    (37, 'Стул \"Сильвия\" Сатурн', 1100), (38, 'Стул \"Сильвия\" Новый стиль', 950), (39, 'Стул \"Изо W\" Сатурн', 770), 
    (40, 'Стул \"Стафф\" Новый стиль', 2700), (41, 'Стул \"Роял\" Премьера', 2100), (42, 'Стул \"Самба ULTRA\" Новый стиль', 1900), 
    (43, 'Шкаф \"Квадро 83ШД04\" Энран', 61300), (44, 'Шкаф \"Квадро 83ШД02\" Энран', 55300), (45, 'Шкаф \"Академия\" 68BC06 Энран', 3300), 
    (46, 'Стеллаж REG 2S (N) \"Коен\" Gerbor', 3200), (47, 'Стеллаж REG 4S \"Джули\" BRW', 4300), (48, 'Шкаф книжный \"Нео\" Скай', 6500), 
    (49, 'Офисная тумба ТД с одной дверцей Милано', 650), (50, 'Офисная тумба ОН-27 Ника-Мебель', 1200), (51, 'Офисная тумба ОН-32 Ника-Мебель', 1320)
";

$insertProductsCategory = "INSERT INTO products_categories(id, product_id, category_id) VALUES 
    (1, 1, 11), (2, 1, 25), (3, 2, 11), (4, 2, 25), (5, 3, 11), (6, 3, 25),
    (7, 4, 8), (8, 4, 19), (9, 5, 8), (10, 5, 19), (11, 6, 8), (12, 6, 19),
    (13, 7, 9), (14, 7, 22), (15, 8, 9), (16, 8, 22), (17, 9, 9), (18, 9, 22), 
    (19, 10, 10), (20, 11, 10), (21, 12, 10), 
    (22, 13, 11), (23, 14, 11), (24, 15, 11),
    (25, 16, 12), (26, 17, 12), (27, 18, 12),
    (28, 19, 13), (29, 19, 15), (30, 20, 13), (31, 20, 15), (32, 21, 13), (33, 21, 15), 
    (34, 22, 14), (35, 22, 13), (36, 23, 14), (37, 23, 13), (38, 24, 14), (39, 24, 13), 
    (40, 25, 15), (41, 26, 15), (42, 27, 15), 
    (43, 28, 19), (44, 28, 8), (45, 29, 19), (46, 29, 8), (47, 30, 19), (48, 30, 8),
    (49, 31, 20), (50, 32, 20), (51, 33, 20), 
    (52, 34, 21), (53, 35, 21), (54,36, 21), 
    (55, 37, 22), (56, 37, 9), (57, 38, 22), (58, 38, 9), (59, 39, 22), (60, 39, 9),
    (61, 40, 23), (62, 41, 23), (63, 42, 23), 
    (64, 43, 24), (65, 44, 24), (66, 45, 24), 
    (67, 46, 25), (68, 46, 11), (69, 47, 25), (70, 47, 11), (71, 48, 25), (72, 48, 11),
    (73, 49, 26), (74, 50, 26), (75, 51, 26)
";

$host = 'localhost';
$user = 'root';
$password = 'root';
$db_name = 'furniture_store';

$link = mysqli_connect($host, $user, $password, $db_name);
mysqli_query($link, "SET NAMES 'utf8'");

if (!$link) {
    echo 'Ошибка: Невозможно установить соединение с MySQL' . '<br>';
    echo 'Код ошибки errno: ' . mysqli_connect_errno() . '<br>';
    echo 'Текст ошибки error: ' . mysqli_connect_error() . '<br>';
    exit;
}
echo 'Соединение с MySQL установлено!' . '<br>';
echo 'Информация о сервере: ' . mysqli_get_host_info($link);
echo '<br>';


$queryA = "SELECT DISTINCT categories.id, categories.name FROM categories INNER JOIN products_categories 
           ON categories.id=products_categories.category_id WHERE products_categories.product_id IN(1, 5, 28, 31, 69, 70)";
// Для заданного списка товаров получить названия всех категорий, в которых представлены товары
$queryB = "SELECT products.id, products.name FROM products LEFT JOIN products_categories 
           ON products.id=products_categories.product_id WHERE products_categories.category_id=9
           UNION
           SELECT products.id, products.name FROM products LEFT JOIN products_categories ON
           products_categories.product_id=products.id WHERE products_categories.category_id IN(SELECT id FROM categories WHERE parent_id=16)";
// Для заданной категории получить список предложений всех товаров из этой категории и ее дочерних категорий
$queryC = "SELECT categories.name, COUNT(product_id) FROM products_categories INNER JOIN categories 
           ON categories.id=products_categories.category_id WHERE category_id IN(8, 11, 20, 25) GROUP BY category_id";
// Для заданного списка категорий получить количество предложений товаров в каждой категории
$queryD = "SELECT SUM(DISTINCT product_id) quantity, categories.name FROM products_categories LEFT JOIN categories 
           ON categories.id=products_categories.category_id WHERE products_categories.category_id IN (8,11,20,25) 
           GROUP BY category_id";
// Для заданного списка категорий получить общее количество уникальных предложений товара
$queryE = "SELECT name FROM (SELECT * FROM categories ORDER BY parent_id, id) categories_sorted, (SELECT @pv:='1') 
           initialisation WHERE find_in_set(parent_id, @pv) and LENGTH (@pv := concat(@pv, ',', id))";
// Для заданной категории получить ее полный путь в дереве (breadcrumb, «хлебные крошки»)

$result = mysqli_query($link, $queryA) or die('Ошибка ' . mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;
var_dump($data);
mysqli_close($link);


