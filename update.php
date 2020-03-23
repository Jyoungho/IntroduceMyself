<?php
require_once('lib/print.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Introduce Myself</title>
  <meta charset ='utf-8'>
  <link rel ="stylesheet" type="text/css" href = "theme.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src = 'colors.js'></script>
</head>

<body>
<div id = "top">
  <div >
    <a href = 'index.php'> <img src = "./img/top_logo.jpg" width = '90px' style = "padding-left : 5%; padding-top : 5%; border-radius : 40%"> </a>
  </div>
  <div >
    <h1 style = 'text-align : center'> <a href ='index.php'> JUNG'S HOME PAGE</a></h1>  
  </div>
    <a href = "./contact.html" target = "_blank"><img src = "./img/contact.jpg" width = '90px' style = "padding-right : 5px; border-radius: 50%;"></a>
  </div>
</div>


<div id = 'grid'>
            <ul id = "menu">
              <?php print_list(); ?>
                Your upload
              <ol>
                <?php echo $list; ?>

                <li><a href = "create.php">create</a></li>
              </ol>
              <input id="night_day" type="button" value="night" onclick="
              nightDayHandle(this);">
            </ul>
        <div id = 'infor_1'>
          Update
          <form action = "update_process.php" method ='post'>
            <input type = 'hidden' name = 'id' value="<?=$_GET['id']?>">
            <p>
              <input type = 'text' name ='title' placeholder="Title" value =
              "<?=$article['title']?>">
            </p>
            <p>
              <textarea name = "description" placeholder = 'Description' ><?=$article['description']?></textarea>
            </p>
            <p>
              <input type = "submit">
            </p>
          </form>
        </div>
  </div>
</body>
</html>
