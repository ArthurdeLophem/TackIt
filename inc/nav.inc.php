<ul class="Navigation">
    <a href="dashboard.php"><li class="<?php echo $navClassA; ?>">
    <img src="<?php echo $navimgA ?>" alt="">
    Dashboard</li></a>
    <?php if($userType == 1): ?>
    <a href="projecten.php"><li class="<?php echo $navClassB; ?>">
    <img src="<?php echo $navimgB ?>" alt="">
    Projecten</li></a>
    <?php endif ?>
    <?php if($userType == 1): ?>
    <a href="gebruikers.php"><li class="<?php echo $navClassC; ?>">
    <img src="<?php echo $navimgC ?>" alt="">
    Gebruikers</li></a>
    <?php endif ?>
    <a href="instellingen.php"><li class="<?php echo $navClassD; ?>">
    <img src="<?php echo $navimgD ?>" alt="">
    Instellingen</li></a>
    <a href="Logout.php"><li class="<?php echo $navClassE; ?>">
    <img src="<?php echo $navimgE ?>" alt="">
    Logout</li></a>
    <a href="account.php"><li class="<?php echo $navClassF; ?>">
    <img src="<?php echo $navimgF ?>" alt="">
    User</li></a>
    <a href=""><li class="<?php echo $navClassG; ?>">
    <img src="<?php echo $navimgG ?>" alt="">
    Help</li></a>
</ul>