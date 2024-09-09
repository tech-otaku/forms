<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Populating forms using MySQL" />
    <meta name="keywords" content="Forms, MySQL" />
    <meta name="author" content="Steve Ward" />
    <link href="../styles/form.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173644398-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-173644398-1');
    </script>
    <title>Form Submission (A) - MySQL</title>
</head>
<body>

    <?php

        // Global PDO exception handler to avoid using explicit individual try/catch blocks
        set_exception_handler(function($e) {
            error_log($e->getMessage());
            exit('Whoops! Something odd just happened.');
        });

        $mysql_credentials = parse_ini_file('../../mysql-credentials.ini');    // file containing mysql connection information

        $dsn = "mysql:host=" . $mysql_credentials['host'] . ";dbname=" . $mysql_credentials['database']. ";charset=" . $mysql_credentials['charset'];
        $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                //PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_EMULATE_PREPARES => false];

        // Connect to database
        $pdo = new PDO($dsn, $mysql_credentials['username'], $mysql_credentials['password'], $opt);

        $stmt = $pdo->prepare("SELECT * FROM `menus` ORDER BY `title` ASC");
        $stmt->execute();
        $menus = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;

        $stmt = $pdo->prepare("SELECT * FROM `macos` ORDER BY `release` DESC");
        $stmt->execute();
        $macoses = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;

        // Close database connection
        $pdo = null;

    ?>

    <h2 class="center">Form Submission (A) - MySQL</h2>
    <h3 class="center">HTML form element action attribute</h3>
    <form id="macos-releases" method="post" action="form-a-process.php">

        <div class="row">

            <div class="column outer-left">

                <h4>Navigation</h4>

                <?php
                    foreach ($menus as $menu) {
                        if ($menu['title'] == "Home") {
                            echo "<br>";
                        }
                        echo "<a href='" . ($menu['title'] == "Home" ? "" : "../") . $menu['path'] . $menu['file'] . "' title='Go to " . $menu['title'] . "' target='" . $menu['target'] . "'>" . $menu['title'] . "</a><br>\n\t\t\t\t\t";
                    }
                ?>

                <div class="tree">
                                
                    <h4>GitHub Repo</h4>
                
                    <pre>
<a href="https://github.com/tech-otaku/forms" target="_blank">forms</a>
  |-- public_html/
      |-- a/
          |-- <a href="https://github.com/tech-otaku/forms/blob/main/public_html/a/form-a-mysql.php" target="_blank">form-a-mysql.php</a>  
          |-- <a href="https://github.com/tech-otaku/forms/blob/main/public_html/a/form-a-process.php" target="_blank">form-a-process.php</a>  
      |-- styles/
          |-- <a href="https://github.com/tech-otaku/forms/blob/main/public_html/styles/form.css" target="_blank">form.css</a>  
  |-- <a href="https://github.com/tech-otaku/forms/blob/main/mysql-credentials.ini.template" target="_blank">mysql-credentials.ini</a>
                    </pre>
                    
                </div>

            </div>
            
            <div class="column outer-right">

                <div class="column inner">

                    <h4 class="heading">What macOS (OS X) releases have you used?</h4>

                    <!-- Checkboxes -->
                    <?php
                        foreach ($macoses as $macos) {
                            echo "<input type='checkbox' name='macos-releases-used[]' value='" . $macos['name'] . " (" . $macos['version'] . ")' " . (($macos['name'] != "Kodiak")?'checked':'') . "/>" . $macos['name']  . " (" . $macos['version'] . ")<br>\n\t\t\t\t\t";
                        }
                    ?>

                </div>    

                <div class="column inner">

                    <h4 class="heading">What is your favourite macOS (OS X) release?</h4>

                    <!-- Radio buttons -->
                    <?php
                        foreach ($macoses as $macos) {
                            print "<input type='radio' name='fav-macos-release' value='" . $macos['name'] . " (" . $macos['version'] . ")' " . (($macos['name'] == "Snow Leopard")?'checked':'') . "/>" . $macos['name']  . " (" . $macos['version'] . ")<br>\n\t\t\t\t\t";
                        }
                    ?>

                </div>    
                
                <div class="center">
                    <input type="submit" name="submit" value="Submit">
                </div>

            </div>    

        </div> 

    </form>

</body>
</html>
