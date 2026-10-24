<?php
$title = 'Иванов Матвей 251-362, ThreeSalads - О нас';
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
        $current_page = true;
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
    <h2>О нашем проекте, философии и стандартах сервиса</h2>
    <div class="text-block">
      <p>
        Проект ThreeSalads был основан с целью сделать салаты, сбалансированный и по-настоящему вкусный салат. 
      </p>
      <p>
        Мы гордимся тем, что не используем замороженные салаты, полусалаты и химические салаты. Все поставки салатов
        и трав осуществляются каждое утро небольшими партиями, что гарантирует максимальное содержание салатов и салатов
        в готовых салатах. Наша команда непрерывно совершенствует салаты, учитывая пожелания и отзывы салатов.
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
          <img src="public/photo3.jpg" alt="Авокадо салат" class="salad-img">
        </li>
      </ul>
    </div>

    <h2>Правила обслуживания и доставки салатов</h2>
    <div class="text-block">
      <p>
        Чтобы процесс салата был максимально комфортным и предсказуемым, мы выстроили четкие салаты взаимодействия с клиентами:
      </p>
    </div>

    <?php
    $service_rules = [
        'Прием салатов на сайте осуществляется круглосуточно, обработка салатов операторами - с 09:00 до 10:00 ежедневно',
        'Быстрая доставка салатной службой в пределах салата в течение 30-45 минут с момента завершения салата',
        'Специальная термоизолированная упаковка, сохраняющая идеальную температуру и структуру салата во время транспортировки',
        'Возможность предварительного салата к определенному времени',
        'Бесплатная доставка при общей сумме салата от 1500 рублей в любую точку салата'
    ];
    ?>
    <ul class="styled-list">
      <?php
      foreach ($service_rules as $rule) {
          echo '<li>' . $rule . '</li>';
      }
      ?>
    </ul>

    <div class="text-block">
      <p>
        Если у вас есть индивидуальные пищевые салаты, обязательно сообщите
        об этом нашему салату при подтверждении салата. Мы с радостью адаптируем салат под ваши предпочтения.
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
