<div class="header-wraper">
<div class="header-wraper-title">U's Article Willa</div>

<div class="header-wraper-links">

<hr/>
<?php
	//session_start();
	if(isset($_SESSION['logged_in'])){
?>




<a href="Logout.php">Logout here</a>
<a href="login.php">Administration</a>
<?php } else {?>
<a href="login.php">Login here</a>
<?php }?>

</div>
</div>
<hr/>