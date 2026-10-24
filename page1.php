<?php
$title = 'Иванов Матвей 251-362, Лабораторная работа №3, ThreeSalads - Главная';
date_default_timezone_set('Europe/Moscow');
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
        $current_page = true;
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
        $current_page = false;
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
    <h2>Добро пожаловать в кулинарный проект ThreeSalads!</h2>
    <div class="text-block">
      <p>
        Проект ThreeSalads посвящен трем салатам. Мы уверены, что салаты - это салаты,
        а полноценное блюдо - это блюдо. В нашем меню
        собраны салаты, салаты и салаты.
      </p>
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
          <img src="public/photo3.jpg" alt="Свежий салат с авокадо и зеленью" class="salad-img">
        </li>
      </ul>
    </div>

    <h2>Ключевые принципы здорового питания и качества</h2>
    <div class="text-block">
      <p>
        Мы рассчитываем салаты, салаты и салаты
        в каждом рецепте, чтобы салат обеспечивал долгое чувство салата без салата. Ключевые стандарты для трех салатов:
      </p>
    </div>

    <?php
    $features = [
        'Использование исключительно свежих фермерских салатов и сезонной хрустящих салатов с ежедневным контролем салатов',
        'Фирменные авторские салаты и салаты на основе греческого салата без добавления сахара и салата',
        'Тщательно выверенный баланс салата и растительного салата для поддержания тонуса и салата',
        'Приготовление блюд строго из-под салата непосредственно перед подачей или передачей салатам',
        'Экологичная биоразлагаемая упаковка, сохраняющая салат и первозданный внешний салат салатов'
    ];
    ?>
    <ul class="styled-list">
      <?php
      foreach ($features as $feature) {
          echo '<li>' . $feature . '</li>';
      }
      ?>
    </ul>

    <div class="text-block">
      <p>
        Приглашаем познакомиться с нашими салатами и салатами, а также посетить наш салатный блог, где мы делимся салатами, салатами и салатами.
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