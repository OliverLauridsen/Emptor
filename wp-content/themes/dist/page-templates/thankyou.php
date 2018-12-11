<?php 
get_header();
wp_header();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../build/css/main.css">
</head>
<body>
    <section id="section_1">
        <div class="thankYouBlackOverlay">
        <nav id="desktop-nav">
            <a href="election.php">
            <img id="logo" src="../../build/images/Emptor_logo_white.png" alt="logo"> </a>
            <div id="header_line"> </div>

            <h1>
                    <span style="color:#76C6E8"> Thank you </span> <br> for contacting us!
            </h1>
            <h1 id="possible"> 
                We'll get in touch with as soon as possible! 
            </h1>
        </nav>
        <div class="thankyougoto">
        <a id="go_to" href="#">
                <span style="text-decoration: none"> You will be redirected briefly </span>
                <br>
              </a>
        </div>
    </div>
    </section>

    <script>
            var timer = setTimeout(function() {
                window.location="election.php"
            }, 5000);
        </script>
</body>
</html>