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
        <div class="student"><p>I’m a STUDENT</p> <p> Currently pursuing B.E. in Computers.</p></div>
        <div class="aim">
            <p id="aimcontent">A person with creative mind, dedicated and punctual towards her work. My aim is to work in a challenging environment which uses and demands all my skills and helps me to know my potential and gives an opportunity to learn new skills everyday.</p>            
        </div>
    </main>
    <?php include_once("footer.php"); ?>
    <script src="./js/main.js"></script>
    <script>
        document.getElementById('home').classList.add('active')
        document.getElementById('menu-itemh').classList.add('activeli')
    </script>
</body>
</html>