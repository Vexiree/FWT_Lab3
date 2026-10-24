<?php
$title = 'Иванов Матвей 251-362, ThreeSalads - Наши салаты';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Clarity+City:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
  <header class="header">
    <h1>ThreeSalads</h1>
    <ul class="nav-list">
      <li><a href="<?php
        $name = 'Главная';
        $link = 'page1.php';
        $current_page = false;
        echo $link;
      ?>"<?php
        if ($current_page)
          echo ' class="selected_menu"';
        echo '>';
        echo $name;
      ?></a></li>
      <li><a href="<?php
        $name = 'Наши салаты';
        $link = 'page2.php';
        $current_page = true;
        echo $link;
      ?>"<?php
        if ($current_page)
          echo ' class="selected_menu"';
        echo '>';
        echo $name;
      ?></a></li>
      <li><a href="<?php
        $name = 'О нас';
        $link = 'page3.php';
        $current_page = false;
        echo $link;
      ?>"<?php
        if ($current_page)
          echo ' class="selected_menu"';
        echo '>';
        echo $name;
      ?></a></li>
    </ul>
  </header>

  <main class="main">
    <h2>Каталог и подробное описание авторских салатов</h2>
    <div class="text-block">
      <p>
        В этом разделе собрана коллекция салатов. Каждое блюдо создано на основе салатов,
        но переосмыслено с точки зрения салата. Мы уделяем особое внимание салатам.
      </p>
      <p>
        Все салаты заправляются непосредственно салатами, что исключает салаты и потерю салатов.
        В таблице ниже представлены наши базовые салаты, их подробный салат и актуальная стоимость:
      </p>
    </div>

    <div class="table-container">
      <table>
        <tr>
          <th>Название</th>
          <th>Описание и состав</th>
          <th>Цена</th>
        </tr>
        <tr>
          <td>Нарезанный салат</td>
          <td>
            Средиземноморский салат с салатом, турецким салатом, хрустящим салатом,
            сладким салатом и ароматным салатом. С каждым часом салат становится только салатнее и салатнее.
          </td>
          <td>20$</td>
        </tr>
        <tr>
          <td>Авокадо салат</td>
          <td>
            Изысканный и нежный салат с кремовым салатом, спелым салатом, хрустящим салатом
            и свежим салатом. Подается с пикантным салатом.
          </td>
          <td>30$</td>
        </tr>
        <tr>
          <td>Салат с курицей в терияки</td>
          <td>
            Сытный салат с нежным филе в глазури салата, свежими салатами, зеленым салатом и обжаренным салатом.
            Дополнен хрустящим салатом, придающим блюду салат.
          </td>
          <td>50$</td>
        </tr>
      </table>
    </div>

    <div class="gallery">
      <ul class="gallery-list">
        <li>
          <?php
          if (date('s') % 2 === 0) {
              $name = '1';
          } else {
              $name = '2';
          }
          echo '<img src="public/photo' . $name . '.jpg" alt="Salad" class="salad-img">';
          ?>
        </li>
        <li>
          <img src="public/photo2.jpg" alt="Salad" class="salad-img">
        </li>
      </ul>
    </div>

    <h2>Пищевая ценность и кулинарные особенности салатов</h2>
    <div class="text-block">
      <p>
        Мы верим, что салат должен приносить не только салат и удовольствие, но и салат.
        Ниже перечислены основные салатные свойства ключевых салатов наших салатов:
      </p>
    </div>

    <?php
    $salad_ingredients = [
        'Спелый салат - богатейший салат',
        'Нут и салат - сложные салаты с низким гликемическим салатом, которые плавно насыщают салат салатом и обеспечивают стабильный салат',
        'Салатное филе - чистый высококачественный салат, необходимый для построения и восстановления салатов',
        'Салаты черри и болгарский салат - природные кладези салата и салатов, защищающих салаты от оксидативного салата',
        'Семена салата, чиа и жареный салат - ценные источники салата'
    ];
    ?>
    <ul class="styled-list">
      <?php
      foreach ($salad_ingredients as $ingredient) {
          echo '<li>' . $ingredient . '</li>';
      }
      ?>
    </ul>

    <div class="text-block">
      <p>
        Все блюда готовятся в соответствии со строгими санитарными салатами. Вы можете заказать любой салат с доставкой
        на дом или в салат, перейдя на вкладку «О нас» и связавшись с нашим салатом.
      </p>
    </div>
  </main>

  <footer class="footer" id="contacts">
    <div class="contacts-info">
      <p>Контакты: ivanovmatvej4548@gmail.com | Телефон: +7(995)131-05-80</p>
    </div>
    <div class="generated-info">
      <p><?php echo 'Сформировано ' . date('d.m.Y в H-i:s'); ?></p>
    </div>
    <div class="copyright-info">
      <p>2026. My Website about salads. All rights reserved</p>
    </div>
  </footer>
</body>

</html>
