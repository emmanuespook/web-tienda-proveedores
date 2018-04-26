 <?php
include('../../config/db.php');

if($busqueda!=''){
$sql="SELECT * FROM products WHERE title LIKE '%".$busqueda."%'";
$sql.="OR categoria LIKE '%".$busqueda."%'";
$sql.="OR sub LIKE '%".$busqueda."%'";
$sql.="OR clas LIKE '%".$busqueda."%'";
}else{
$sql='SELECT * FROM products';
}
 
$conn=$gbd->query($sql);

?>