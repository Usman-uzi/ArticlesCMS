<?php 
include_once 'includes/connection.php';
include_once 'includes/article.php';

$article=new Article;

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$data=$article->fetch_data($id);
	//print_r($data);
?>

<?php echo $data['Title'];?>
<?php echo $data['Detail'];?>
<a href="index.php">
&larr; Back
</a>
<?php
}
 else {
	header('Location: index.php');
}





?>