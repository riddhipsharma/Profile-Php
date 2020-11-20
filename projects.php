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
        <div class="miniprojects">
            <p class="miniprojects_heading">MINI PROJECTS :</p>
        </div>
        <div class="content projects-container">
                <table class="mp">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Project Title</th>
                            <th>Link to Project</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($projects_table['projects'] as $project) { ?>
                        <tr>
                            <td><?php echo $project['id']; ?></td>
                            <td>
                                <?php echo $project['project-title']; ?>
                                <a href="https://github.com/riddhipsharma/<?php echo $project['project-link']; ?>">
                                    <img src="./assets/images/mdi_cloud_download.svg" alt="">
                                </a>
                            </td>
                            <td>
                                <a href="https://github.com/riddhipsharma/<?php echo $project['project-link']; ?>"><img class="load" src="./assets/images/Download1.png" alt="">Download</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
        </div>
        <div class="webdesigns">
            <p class="webdesigns_heading">WEB DESIGNS :</p>
            <p class="webdesigns_content">
                <a href="https://github.com/riddhipsharma/<?php echo $project['project-link']; ?>">
                   <img class="load" src="./assets/images/Download1.png" alt="">Download
                </a>
            </p>
        </div>
    </main>
    <?php include_once("footer.php"); ?>
    <script src="./js/main.js"></script>
    <script>
        document.getElementById('projects').classList.add('active');
        document.getElementById('menu-itempr').classList.add('activeli');
    </script>
</body>
</html>