<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marvin Leiers - Offizielle Webseite</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
<div class="wrapper">
    <nav>
        <ul>
            <li class="link active" data-link="home">Home</li>
            <li class="link" data-link="github">GitHub</li>
            <li class="link" data-link="paper">Paper</li>
            <li class="link" data-link="discord">Discord</li>
            <li class="link" data-link="about">About</li>
        </ul>
    </nav>

    <div id="content">
        <?php include 'pages/home.html'; ?>
    </div>
    <script src="scripts/main.js"></script>
</div>
<noscript>
    Please enable JavaScript!
    <style>
        .wrapper { display: none; }
    </style>
</noscript>
</body>
</html>