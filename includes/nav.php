<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/textlogo2.png" width="99"/></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?php echo ($page == "home" ? "active" : "")?>"><a href="index.php">Home</a></li>
                <li class="<?php echo ($page == "about" ? "active" : "")?>"><a href="about.php">About</a></li>
                <li class="<?php echo ($page == "manual" ? "active" : "")?>"><a href="manual.php">How to Play</a></li>
                <li class="<?php echo ($page == "highscores" ? "active" : "")?>"><a href="highscores.php">High Scores</a></li>
                <li class="<?php echo ($page == "jenkins" ? "active" : "")?>"><a href="http://37.187.75.63:8080">Jenkins</a></li>
                <li class="<?php echo ($page == "faq" ? "active" : "")?>"><a href="faq.php">FAQ</a></li>
                <li class="<?php echo ($page == "contact" ? "active" : "")?>"><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>