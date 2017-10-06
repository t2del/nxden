<?php if(isset($_SESSION['user'])) { ?>
<div class="admin-right">
   	<?php echo $_SESSION['user']; ?> - <a href="<?php echo $_SERVER['PHP_SELF']; ?>?logout=logout">Logout</a>  </div>
<?php } else { ?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div align="right">
            <input name="user" type="text" id="user" placeholder="Username" required>
            <input name="pass" type="password" id="pass" placeholder="Password" required>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" tabindex="5">Login</button>
        </div>
    </form>
<?php } ?>