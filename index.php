<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <!-- Header -->
  </head>
  <body>
    <!-- Menu and Logo -->
    <div id="grid">
        <div>
          <p><a href="index.php"><img src="image/critter_logo.png" width="150px"></a></p>
        </div>
        <div>
        <ul>
          <li><a href="index.php?id=contact">Contact</a></li>
          <li><a href="index.php?id=story">Story</a></li>
          <li><a href="index.php?id=shop">Shop</a></li>
        </ul>
      </div>
    </div>

      <!-- Load Menu Content -->
    <?php
    if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  } else {
    echo null; //바로 밑의 div가 실행되도록 해야함
    }
     ?>

      <!-- Products -->
    <div class="wrapper">
     <?php
       $list = scandir('./data/s01');
       $i = 0;
       while($i < count($list)){
         if($list[$i] !='.'){
           if($list[$i] !='..'){
         echo "<a href=\"index.php?id=$list[$i]\"><img src=\"image/$i.jpg\">$list[$i]</a>";
       }
     }
         $i = $i + 1;
       }
     ?>
   </div>


  </body>
</html>
