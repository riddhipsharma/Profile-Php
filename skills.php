<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <?php include_once("header.php"); ?>
    <main>
        <div class="myskills">
            <p class="myskills_heading">MY SKILLS :</p>
            <table cellspacing="0" cellpadding="5">
                <tr class="c">
                    <td><img src="./assets/images/c-programming.png" alt=""></td>
                    <td>C</td>
                    <td class="bar cp"></td>
                </tr>
                <tr class="c">
                    <td><img src="./assets/images/cpp_logo.png" alt=""></td>
                    <td>C++</td>
                    <td class="bar cpp"></td>
                </tr>
                <tr class="c">
                    <td><img src="./assets/images/java_logo.jpg" alt=""></td>
                    <td>JAVA</td>
                    <td class="bar java"></td>
                </tr>
                <tr class="c">
                    <td><img src="./assets/images/python_logo.png" alt=""></td>
                    <td>PYTHON</td>
                    <td class="bar py"></td>
                </tr>
                <tr class="c">
                    <td><img src="./assets/images/html and css.png" alt=""></td>
                    <td>HTML5 / CSS3</td>
                    <td class="bar css"></td>
                </tr>
                <tr class="c">
                    <td><img src="./assets/images/JavaScript-Logo.png" alt=""></td>
                    <td>JAVASCRIPT</td>
                    <td class="bar js"></td>
                </tr>
            </table>
        </div>
        <div class="softskills">
            <p class="softskills_heading">SOFT SKILLS : </p>
            <div class="softskills_content">
                <?php foreach ($soft_skills_table['soft-skills'] as $skill){ ?>
                <div class="softskills_rect">
                    <span class="ss"><?php echo $skill['s-skill']; ?></span>
                </div>
                <?php } ?>
        </div>
    </main>
    <?php include_once("footer.php"); ?>
    <script src="./js/main.js"></script>
    <script>
        document.getElementById('skills').classList.add('active');
        document.getElementById('menu-items').classList.add('activeli');
    </script>
</body>
</html>