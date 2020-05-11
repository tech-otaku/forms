<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Populating forms using MySQL" />
    <meta name="keywords" content="Forms, MySQL" />
    <meta name="author" content="Steve Ward" />
    <link href="../styles/form.css" rel="stylesheet">
    <title>Form Submitted (A)</title>
</head>
<body>

    <?php if (!empty($_POST)) { ?>

        <!-- <pre id="post-data">
            <?php //print_r($_POST); ?>
        </pre> -->

        <div id="data-returned">
            <!-- <p><?php //echo json_encode($_POST); ?></p> -->
            <p>
                <u>macOS (OS X) releases you have used:</u> <b><?php echo implode(", ", $_POST['macos-releases-used']) ?></b><br>
                <u>Your favourite macOS (OS X) release:</u> <b><?php echo $_POST['fav-macos-release']; ?></b>
            </p>
        </div>

    <?php } ?>
    
    <a href="javascript:history.back()">Go Back</a>

</body>
</html>
