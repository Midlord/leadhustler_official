
<nav class="collapse collapsing navbar-collapse right-1024">
    <ul class="nav navbar-nav">                  
        <!-- MENU ITEM -->
        <li class="parent <?php echo ($_SERVER['PHP_SELF'] == "/index.php" ? "current" : "");?>">
            <a href="index.php"><div class="main-menu-title">HOME</div></a>
        </li>

        <!-- MENU ITEM -->
        <li class="parent <?php echo ($_SERVER['PHP_SELF'] == "/about.php" ? "current" : "");?>">
            <a href="about.php"><div class="main-menu-title">ABOUT</div></a>
        </li>
        
        <!-- MEGA MENU ITEM -->
        <li class="parent <?php echo ($_SERVER['PHP_SELF'] == "/rules.php" ? "current" : "");?>">
            <a href="rules.php"><div class="main-menu-title">RULES</div></a>
        </li>					
        
        <!-- MENU ITEM -->
        <li class="parent <?php echo ($_SERVER['PHP_SELF'] == "/benefits.php" ? "current" : "");?>">
            <a href="benefits.php"><div class="main-menu-title">BENEFITS</div></a>
        </li>					
        
        <!-- MENU ITEM -->
        <li class="parent <?php echo ($_SERVER['PHP_SELF'] == "/manual.php" ? "current" : "");?>">
        <a href="manual.php"><div class="main-menu-title">TRAINING MANUAL</div></a>
        </li>	
        <!-- MENU ITEM -->
        <li class="parent">
        <a href="#"><div class="main-menu-title">CALLS</div></a>
            <ul class="sub">
                <li><a href="basic_script.php" style="<?php echo ($_SERVER['PHP_SELF'] == "/basic_script.php" ? "color:red;" : "");?>">Basic Script for Indivual & Group Plan</a></li>
                <li><a href="tip.php" style="<?php echo ($_SERVER['PHP_SELF'] == "/tip.php" ? "color:red;" : "");?>">Tips and Call Issues</a></li>
            </ul>
        </li>
        <li id="menu-contact-info-big" class="parent <?php echo ($_SERVER['PHP_SELF'] == "/contact.php" ? "current" : "");?>" ">
        <a href="contact.php"><div class="main-menu-title">CONTACT</div></a>
        </li>

        <li class="parent megamenu">
            <a href="http://leadhustlerexambased.000webhostapp.com"><div class="main-menu-title">INTELECTUAL SKILLS</div></a>
        </li>		
    </ul>
</nav>