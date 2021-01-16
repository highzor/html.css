<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/buttonUp.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
  <title>ZetAqua</title>

</head>
<body class="body_hide">
  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <span>ZetAqua</span>
    </div>
    <div id="about">
      <a href="#" title="Преимущества" onclick="slowScroll('#main')">Преимущества</a>
      <a href="#" title="Возможности" onclick="slowScroll('#overview')">Возможности</a>
      <a href="#" title="Ответы на вопросы" onclick="slowScroll('#faq')">FAQ</a>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Заказать звонок</button>
    </div>
  </header>
  <div id="top">
    <h1>Водоподготовка</h1>
    <h3>то, на чем мы специализируемся</h3>
  </div>
  <div id="main">
    <div class="intro">
      <h2>Наши услуги помогут вам</h2>
      <span>Специалисты со стажем более 10 лет</span>
    </div>
    <div class="text">
      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos impedit, ut vero commodi voluptate? Ipsam reiciendis, necessitatibus incidunt ipsa quis sapiente excepturi, optio iusto voluptatibus dolorem officia quidem, numquam eaque minus, autem praesentium rem architecto dolores. Ipsa unde id velit optio magni enim! Illum obcaecati, dolorem distinctio nemo, ipsum iure.</span>
    </div>
  </div>
  <div id="overview">
    <h2>Возможности</h2>
    <h3>водоподготовки для</h3>
    <div class="img">
      <img src="img/smallsize/1.jpg" alt="" onclick='location.href="jkh.php"'>
      <span>ЖКХ</span>
    </div>
    <div class="img">
      <img src="img/smallsize/2.jpg" alt="" onclick='location.href="industrial.php"'>
      <span>Промышленности</span>
    </div>
    <div class="img">
      <img src="img/smallsize/4.jpg" alt="" onclick='location.href="country.php"'>
      <span>Загородного дома</span>
    </div>
    <div class="img">
      <img src="img/smallsize/5.jpg" alt="" onclick='location.href="municipal.php"'>
      <span>Муниципальных объектов</span>
    </div>
  </div>

  <!-- <div id="contacts">
    <center><h5>Обратная связь</h5></center>
    <center><h3>(напишите нам)</h3></center>
    <form id="form_input">
      <label for="name">Имя <span>*</span></label><br>
      <input type="text" placeholder="Введите имя" name="name" id="name"><br>
      <label for="email">Ваша почта <span>*</span></label><br>
      <input type="email" placeholder="Введите email" name="email" id="email"><br>
      <label for="message">Сообщение <span>*</span></label><br>
      <textarea placeholder="Введите ваше сообщение" name="message" id="message"></textarea><br>
      <div id="mess_send" class="mybtn">Отправить</div>
    </form>
  </div> -->

  <!-- ответы на вопросы -->
  <?php require "blocks/footer.php"?>

  <!-- окно обратной связи -->
  <?php require "blocks/modal.php"?>

  <!-- кнопка вверх -->
  <div id="buttonUp"></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="js/mainPageScript.js"></script>
</body>
</html>