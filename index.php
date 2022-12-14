<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Front-end Project </title>
    <link rel="shortcut icon" href="./assets/img/apple/apple-logo.png" type="image/x-icon">
    <!-- Bootstrap icons v1.9.1 -->
    <link rel="stylesheet" href="./plugins/bootstrap-icons/bootstrap-icons.css">
    <!-- GreenSock (GASP) animation v3.11.1 -->
    <script src="./plugins/greensock/gsap.min.js"></script>
    <script src="./plugins/greensock/CSSRulePlugin.min.js"></script>
    <script src="./plugins/greensock/ScrollTrigger.min.js"></script>
    <!-- Google icon from <https://fonts.google.com/icons?icon.style=Outlined> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <!-- -------------------------------------------------------------------------------- -->
    <!-- Components website file -->
    <link rel="stylesheet" href="./components/font.css">
    <link rel="stylesheet" href="./components/reset.css">
    <link rel="stylesheet" href="./components/header/header.css">
    <link rel="stylesheet" href="./components/footer/footer.css">
    <link rel="stylesheet" href="./components/day-night/style.css">
</head>

<body>
    <?php include './components/header/header.html' ?>
    <div>
        <a href="#">Trương Ngọc Minh</a>
        <a href="#">@minhcecilio</a>
        <a href="#">Engineer</a>
        <!--        -->
        <i class="bi bi-apple"></i>
        <i class="bi bi-strava"></i>
        <i class="bi bi-terminal-fill"></i>
    </div>
    <?php include './components/footer/footer.html' ?>
    <?php include './components/day-nignt/index.html' ?>
    <!-- JS file -->
    <script src="./code/js/index.js"></script>
</body>

</html>