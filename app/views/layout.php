<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галактический вестник</title>
    <link rel="stylesheet" href="/../../public/css/style.css">
    <?php if ($template === 'single.php'): ?>
        <link rel="stylesheet" href="/../../public/css/page.css">
    <?php endif ?>
</head>

<body>
    <header>
        <div class="wrapper">
            <a href="index.html" >
                <img src="/../../public/images/logo.svg" alt="">
                <span>Галактический вестник</span>
            </a>
        </div>
    </header>

    <?php include $template ?>

    <footer>
        <hr>
        <span class="copy">&copy; 2023 &mdash; 2412  &laquo;Галактический вестник&raquo;</span>
    </footer>
</body>

</html>