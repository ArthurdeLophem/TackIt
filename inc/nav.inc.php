<ul class="Navigation">
    <a href="<?php echo $dashboard;?>"><li class="<?php echo $navClassA; ?>">Dashboard</li></a>
    <?php if($userType == 1): ?>
    <a href=""><li class="<?php echo $navClassB; ?>">Projecten</li></a>
    <?php endif ?>
    <?php if($userType == 1): ?>
    <a href=""><li class="<?php echo $navClassC; ?>">Gebruikers</li></a>
    <?php endif ?>
    <a href=""><li class="<?php echo $navClassD; ?>">Instellingen</li></a>
    <a href="Logout.php"><li class="<?php echo $navClassE; ?>">Logout</li></a>
    <a href=""><li class="<?php echo $navClassF; ?>">User</li></a>
    <a href=""><li class="<?php echo $navClassG; ?>">Help</li></a>
</ul>