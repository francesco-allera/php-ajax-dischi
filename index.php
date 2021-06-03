<?php

include "./album-db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./dist/app.css">
   <title>PHP Ajax Dischi</title>
</head>

<body>

   <div id="#app">
      <div class="container">

         <?php foreach ($disks as $disk) { ?>
            <div class="album">
               <img src="<?php echo $disk['poster']; ?>" alt="...">
               <h2><?php echo $disk['title']; ?></h2>
               <h3><?php echo $disk['author']; ?></h3>
               <h4><?php echo $disk['year']; ?></h4>
            </div>
         <?php } ?>

      </div>
   </div>

</body>

</html>