<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta property="og:title" content="10erife" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="10erife" />
    <meta property="og:description" content="" />

    <link rel="schema.dcterms" href="http://purl.org/dc/terms/">
    <meta name="DC.coverage" content="Hungary" />
    <meta name="DC.description" content="" />
    <meta name="DC.format" content="text/html" />
    <meta name="DC.publisher" content="10erife" />
    <meta name="DC.title" content="" />

    <title><?php echo 'OhelAvraham - ' . $title;  ?></title>

    <link rel="icon" type="image/png" href="Boaz/img/logo.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">

    <!-- External Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="Boaz/css/style.css">
</head>

<body>
    <!-- Beep :active -->
    <audio id="beep__active" src="http://freesound.org/data/previews/263/263133_2064400-lq.mp3"></audio>
    <?php
    require_once "header.php";
    require_once "$view.php";
    require_once "footer.php";
    ?>
</body>

</html>