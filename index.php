<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/static/css/main.css">
  <title>My Blog</title>
</head>
<body>
  <main>
    <?php

    spl_autoload_register(function ($class_name) {
      require 'app/controllers/' . $class_name . '.php';
    });

    require 'app/Router.php';

    $router = new Router($_SERVER['REQUEST_URI']);

    ?>
  </main>
</body>
</html>