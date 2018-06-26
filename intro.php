<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <style>

  /* intro page */
  * {max-width: 100%;
  overflow-x: hidden;
  padding:0px;
  margin: 0px;
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
  }

  #showcase{
    background-image: url(image/background.gif);
    background-size: cover;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    line-height: 1.5;
  }

  #showcase .logo{
    position: absolute;
    top: 28px;
    left: 20px;
  }

  #showcase p{
    text-align: center;
    font-size: 18px;
    color: white;
    margin: 0 15px;
    text-decoration: none;
  }

  #showcase .button{
    border: 2px solid white;
    padding: 10px;
    margin-top: 23px;
  }

  #showcase .button:hover{
    background-color: white;
    color: #FFFFFF;
    transition: .3s;
  }
</style>
</head>
<body>
  <header id="showcase">
    <div class="logo"><img src="image/critter_logo_white.png" width="200px"></div>
    <p>Hand-digged resources from the planet of melancholy.</p>
    <a href="index.php" class="button"><p>Explore</p>
    </a>
  </header>
</body>
</html>
