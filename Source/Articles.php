<?php
	include_once 'includes/connection.php';
	include_once 'includes/article.php';
	
	$article=new Article;
	$articles=$article->fetch_all();
	//print_r($articles);
?>

<html>

<head>
<title>CMS Tutorial</title>
<link rel="stylesheet" href="styles/style.css" />
</head>

<body>
<div class="container"><a href="index.php">CMS</a>

<ol>
<?php foreach ($articles as $artic){?>
	<li>
	<a href="Post.php?id=<?php echo $artic['Id'];?>"> 
	<?php echo $artic['Title']?>
	</a>
	 - <small> <?php echo date("j F Y, \a\\t g.i a", time());?> </small>
	 </li>
	<?php }?>
</ol>
</div>
</body>
</html>
