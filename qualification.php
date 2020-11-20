<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <?php include_once("header.php"); ?>
    <main>
        <div class="qcard-container">
        <?php foreach($qual['card'] as $one_card){ ?>
            <div class="qcard">
                <img src="./assets/images/<?php echo $one_card['img']; ?>" alt="">
                <h2><?php echo $one_card['heading']; ?></h2>
                <h5><?php echo $one_card['board']; ?></h5>
                <p><?php echo $one_card['percentage1']; ?></p>
                <p><?php echo $one_card['percentage']; ?></p>
            </div>
            <?php } ?>
        </div>
    </main>
    <?php include_once("footer.php"); ?>
    <script src="./js/main.js"></script>
    <script>
        document.getElementById('profile').classList.add('active');
        document.getElementById('menu-itemp').classList.add('activeli');
    </script>
</body>
</html>