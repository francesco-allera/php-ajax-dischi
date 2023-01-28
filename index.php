<?php
    require_once 'database/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-png">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./dist/style.css">
    <title>PHP Ajax Dischi - Milestone 1</title>
</head>
<body>

    <div id="app">
        <header>
            <div class="container">
                <img src="./img/logo.png" alt="logo">
            </div>
        </header>

        <main>
            <div class="container">

                <?php foreach ($disks as $key => $value) { ?>
                    <div class="cd">
                        <img src="<?php echo $value['poster']; ?>" alt="<?php echo $value['title'];?>">
                        <h3><?php echo $value['title']; ?></h3>
                        <div class="bottom">
                            <div class="author"><?php echo $value['author']; ?></div>
                            <div class="year"><?php echo $value['year']; ?></div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </main>

    </div>

</body>
</html>