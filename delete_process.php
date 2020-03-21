<?php
$conn = mysqli_connect('localhost','root','789513','introducemyself');
settype($_POST['id'],'integer');
$filtered = array(
  'id' => mysqli_real_escape_string($conn,$_POST['id']),
);
$sql = "
  DELETE
    FROM topic
    WHERE id = {$filtered['id']}
";
mysqli_query($conn,$sql);
header('Location:/index.php');
?>
