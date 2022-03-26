<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Hard-coded forms" />
    <meta name="keywords" content="Forms, Hard-coded" />
    <meta name="author" content="Steve Ward" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173644398-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-173644398-1');
    </script>
    <link href="../styles/form.css" rel="stylesheet">
    <title>Form Submission (B)</title>
</head>
<body>

    <h2 class="center">Form Submission (B) - Hard-coded</h2>
    <h3 class="center">HTML form element action attribute (PHP_SELF)</h3>
    <form id="macos-releases" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <div class="row">

            <div class="column outer-left">

                <h4>Navigation</h4>

                <a href="../a/form-a-hardcoded.html" title="Go to Form Submission (A) - Hard-coded" target="_self">Form Submission (A) - Hard-coded</a><br>
                <a href="../b/form-b-hardcoded.php" title="Go to Form Submission (B) - Hard-coded" target="_self">Form Submission (B) - Hard-coded</a><br>
                <a href="../c/form-c-hardcoded.html" title="Go to Form Submission (C) - Hard-coded" target="_self">Form Submission (C) - Hard-coded</a><br>
                <a href="../d/form-d-hardcoded.html" title="Go to Form Submission (D) - Hard-coded" target="_self">Form Submission (D) - Hard-coded</a><br>
                <a href="../e/form-e-hardcoded.html" title="Go to Form Submission (E) - Hard-coded" target="_self">Form Submission (E) - Hard-coded</a><br>
                <a href="../f/form-f-hardcoded.html" title="Go to Form Submission (F) - Hard-coded" target="_self">Form Submission (F) - Hard-coded</a><br>
                <a href="../g/form-g-hardcoded.html" title="Go to Form Submission (G) - Hard-coded" target="_self">Form Submission (G) - Hard-coded</a><br>
                <a href="../h/form-h-hardcoded.html" title="Go to Form Submission (H) - Hard-coded" target="_self">Form Submission (H) - Hard-coded</a><br>
                <br>
                <a href="/" title="Go Form Submission Index" target="_self">Home</a><br>
                
                <div class="tree">
                
                    <h4>GitHub Repo</h4>
                
                    <pre>
<a href="https://github.com/tech-otaku/forms" target="_blank">forms</a>
  |-- public_html/
      |-- b/
          |-- <a href="https://github.com/tech-otaku/forms/blob/master/public_html/b/form-b-hardcoded.php" target="_blank">form-b-hardcoded.php</a>  
      |-- styles/
          |-- <a href="https://github.com/tech-otaku/forms/blob/master/public_html/styles/form.css" target="_blank">form.css</a>  
                    </pre>
                    
                </div>
                
            </div>    

            <div class="column outer-right">
            
                <div class="column inner">

                    <h4 class="heading">What macOS (OS X) releases have you used?</h4>

                    <!-- Checkboxes -->
                    <input type='checkbox' name='macos-releases-used[]' value='Monterey (12.0)' checked/>Monterey (12.0)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='Big Sur (11.0)' checked/>Big Sur (11.0)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='Catalina (10.15)' checked/>Catalina (10.15)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='Mojave (10.14)' checked/>Mojave (10.14)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='High Sierra (10.13)' checked/>High Sierra (10.13)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='Sierra (10.12)' checked/>Sierra (10.12)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='El Capitan (10.11)' checked/>El Capitan (10.11)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='Yosemite (10.10)' checked/>Yosemite (10.10)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='Mavericks (10.9)' checked/>Mavericks (10.9)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='Mountain Lion (10.8)' checked/>Mountain Lion (10.8)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='Lion (10.7)' checked/>Lion (10.7)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='Snow Leopard (10.6)' checked/>Snow Leopard (10.6)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='Leopard (10.5)' checked/>Leopard (10.5)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='Tiger (10.4)' checked/>Tiger (10.4)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='Panther (10.3)' checked/>Panther (10.3)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='Jaguar (10.2)' checked/>Jaguar (10.2)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='Puma (10.1)' checked/>Puma (10.1)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='Cheetah (10.0)' checked/>Cheetah (10.0)<br>
                    <input type='checkbox' name='macos-releases-used[]' value='Kodiak (Public Beta)'/>Kodiak (Public Beta)<br>

                    <br>

                </div>    

                <div class="column inner">

                    <h4 class="heading">What is your favourite macOS (OS X) release?</h4>

                    <!-- Radio buttons -->
                    <input type='radio' name='fav-macos-release' value='Monterey (12.0)'/>Monterey (12.0)<br>
                    <input type='radio' name='fav-macos-release' value='Big Sur (11.0)'/>Big Sur (11.0)<br>
                    <input type='radio' name='fav-macos-release' value='Catalina (10.15)'/>Catalina (10.15)<br>
                    <input type='radio' name='fav-macos-release' value='Mojave (10.14)'/>Mojave (10.14)<br>
                    <input type='radio' name='fav-macos-release' value='High Sierra (10.13)'/>High Sierra (10.13)<br>
                    <input type='radio' name='fav-macos-release' value='Sierra (10.12)'/>Sierra (10.12)<br>
                    <input type='radio' name='fav-macos-release' value='El Capitan (10.11)'/>El Capitan (10.11)<br>
                    <input type='radio' name='fav-macos-release' value='Yosemite (10.10)'/>Yosemite (10.10)<br>
                    <input type='radio' name='fav-macos-release' value='Mavericks (10.9)'/>Mavericks (10.9)<br>
                    <input type='radio' name='fav-macos-release' value='Mountain Lion (10.8)'/>Mountain Lion (10.8)<br>
                    <input type='radio' name='fav-macos-release' value='Lion (10.7)'/>Lion (10.7)<br>
                    <input type='radio' name='fav-macos-release' value='Snow Leopard (10.6)' checked/>Snow Leopard (10.6)<br>
                    <input type='radio' name='fav-macos-release' value='Leopard (10.5)'/>Leopard (10.5)<br>
                    <input type='radio' name='fav-macos-release' value='Tiger (10.4)'/>Tiger (10.4)<br>
                    <input type='radio' name='fav-macos-release' value='Panther (10.3)'/>Panther (10.3)<br>
                    <input type='radio' name='fav-macos-release' value='Jaguar (10.2)'/>Jaguar (10.2)<br>
                    <input type='radio' name='fav-macos-release' value='Puma (10.1)'/>Puma (10.1)<br>
                    <input type='radio' name='fav-macos-release' value='Cheetah (10.0)'/>Cheetah (10.0)<br>
                    <input type='radio' name='fav-macos-release' value='Kodiak (Public Beta)'/>Kodiak (Public Beta)<br>

                    <br>
                
                </div>    
                
                <div class="center">
                    <input type="submit" name="submit" value="Submit">
                </div>

            </div>    

        </div> 
                
    </form>

    <?php if(isset($_POST['submit'])) { ?>

        <!-- <pre id="post-data">
            <?php //print_r($_POST); ?>
        </pre> -->

        <div id="data-returned">
            <p>
                <u>macOS (OS X) releases you have used:</u> <b><?php echo implode(", ", $_POST['macos-releases-used']) ?></b><br>
                <u>Your favourite macOS (OS X) release:</u> <b><?php echo $_POST['fav-macos-release']; ?></b>
            </p>
        </div>

    <?php } ?>

</body>
</html>
