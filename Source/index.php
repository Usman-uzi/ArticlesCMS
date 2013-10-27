<?php
	
	if(isset($_SESSION['logged_in'])){
		$status=true;
	}
?>

<html>

<head>
<title>CMS Tutorial</title>
<link rel="stylesheet" href="styles/style.css" />
</head>

<body>
<?php if(isset($status)){?>
<a href="Logout.php">Logout here</a>
<a href="admin/index.php">Administration</a>
<?php } else {?>
<a href="admin/index.php">Login here</a>
<?php }?>
<br/>

<div class="container"><a href="index.php">CMS</a>

<ol>
<li><a href="Articles.php">Our Articles</a></li>
</ol>
</div>
</body>
</html>