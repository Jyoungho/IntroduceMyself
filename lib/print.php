<?php
function print_description(){
  if(isset($_GET['id_1'])){
    $basename = basename($_GET['id_1']);
    echo strip_tags(file_get_contents("data/".$basename),'<p><h2><h3><h4><img><span><div><br><font>');
  }
}
function print_list(){

  $list = scandir('./data');
  $i=0;
  while ($i < count($list)){
    $title = htmlspecialchars($list[$i]);
    if($list[$i] != '.'){
      if($list[$i] != '..'){
        echo "<li><a href =\"index.php?id_1=$title\">$title</a></li>\n";
      }
    }
    $i = $i+1;
  }
}
$conn = mysqli_connect(
  'localhost',
  'root',
  '789513',
  'introducemyself');
  $sql = "SELECT * FROM topic";
  $result = mysqli_query($conn, $sql);
  $list = '';
  while($row = mysqli_fetch_array($result)) {
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }
  $article = array(
    'title'=>'JUNG\'S HOME PAGE',
    'description'=>'phone number : 010-3094-7570'
  );
  if(isset($_GET['id'])) {
    $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM topic WHERE id={$filtered_id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $article['title'] = $row['title'];
    $article['description'] = $row['description'];
  }
?>
