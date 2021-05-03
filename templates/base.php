<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <base href="<?= $basePath ?>/"/>
</head>
<body>
<?= $content ?>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title><?= $title ?></title>

      <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

      <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

      <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body class="text-center">
   <?= $content ?>
   <script type="text/javascript" src="assets/js/bootstrap.js"></script>
   <script type="text/javascript" src="assets/js/main.js"></script>
   

   <!-- Canvas.js -->
   <script type="text/javascript" src="assets/js/canvasjs.js"></script>
</body>
</html>