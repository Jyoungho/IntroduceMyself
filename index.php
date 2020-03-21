
<?php
require_once('./lib/print.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Jung - a web developer</title>
  <meta charset ='utf-8'>
  <link rel ="stylesheet" type="text/css" href = "theme.css" charset = "utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src = 'colors.js'></script>
</head>

<body>
  <div id = "top">
    <div >
      <a href = 'index.php'> <img src = "./img/top_logo.jpg" width = '90px' style = "padding-left : 5%; padding-top : 5%; border-radius : 40%"> </a>
    </div>
    <div>
      <h1 class = "top_title"> <a href ='index.php'> JUNG'S HOME PAGE</a></h1>  
    </div>
      <a href = "./contact.html" target = "_blank"><img src = "./img/contact.jpg" width = '90px' style = "padding-right : 5px; border-radius: 50%;"></a>
    <div class>

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
        <?php if(isset($_GET['id_1'])){print_description();}?>
        <h4><?=$article['title']?></h4>
            <?=$article['description']?>
        <p id = 'change'>
        <?php if(isset($_GET['id'])){?>
            <p><a href = "update.php?id=<?=$_GET['id']?>" >update</a><p>
            <form action ='delete_process.php' method = 'post'>
              <input type ='hidden' name = 'id' value='<?=$_GET['id']?>'>
              <input type = 'submit' value = 'delete' >
            </form>
        <?php }?>
        </p>

      </div>
  </div>
</body>
</html>
