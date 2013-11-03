<?php
session_start();
include_once 'includes/connection.php';

if(isset($_SESSION['logged_in'])){?>

	<html>

<head>
<title>CMS Tutorial</title>
<link rel="stylesheet" href="styles/style.css" />
</head>

<body>
<div class="container"><a href="index.php">CMS</a>
<br/>
<ol>
<li><a href="Logout.php">Logout</a></li>
<li></li>
</ol>
</div>
</body>
</html>
<?php }
else {
	if(isset($_POST['name'] , $_POST['password'])){
		$username=$_POST['name'];
		$password=$_POST['password'];
		
		if(empty($username) or empty($password)){
			$error='All fields are required!';
		}
		else{
			$query=$pdo->prepare("select * from user where name=? and pass=?");
			$query->bindValue(1, $username);
			$query->bindValue(2, $password);
			$query->execute();
			$num=$query->rowCount();
			if($num==	1){
				$_SESSION['logged_in']=true;
				header('Location:login.php');
				exit();
			}
			else 
			{
				$error='Incorrect details entered!';
			}
		}

	}
	?>


<html>

<head>
<title>CMS Tutorial</title>
<link rel="stylesheet" href="styles/style.css" />
</head>

<body>
<div class="body-wrapper">
<?php include 'shared/header.php';?>


<?php if(isset($error)){?>
<small style="color:#aa0000";><?php echo $error ?></small>
<?php 
}
?>
<br/>
<form action="login.php" method="post" autocomplete="off">
<input type="text" name="name" placeholder="user name"/>
<input type="password" name="password" placeholder="password" />
<input type="submit" value="login"/>
</form>

<?php include 'shared/footer.php';?>
</div>

</body>
</html>
	
<?php }
?>