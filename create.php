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
  <h1 id = 'totalbody'> <a href ='index.php'> JUNG'S HOME PAGE</a></h1>
  <div id = 'grid'>
            <ul id = "menu">
              <?php print_list(); ?>
                Your upload
              
              <ol>
                <?php echo $list; ?>
                <ol><input type = "submit" value = "create" onclick = "location = 'create.php'">
              </ol>
              
              <input id="night_day" type="button" value="night" onclick="
              nightDayHandle(this);">
            </ul>
        <div id = 'infor_1'>
          Create
          <form action ='create_process.php' method = 'post'>
            <p><input type = 'text' name ='title' placeholder='Title' ></p>
            <p><textarea name = 'description' placeholder = 'Description'></textarea></p>
            <p><input type ='submit'></p>
          </form>



        </div>
  </div>
</body>
</html>
