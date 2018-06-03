<!doctype html>
<html lang="en">

<head>

<title>

</title>

<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen">
      <!-- Bootstrap -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Mobile Navigation-->
    <script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
        }
    </script>
    
    <!--Google Fonts-->

    <link href="https://fonts.googleapis.com/css?family=Capriola|Rakkas" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css?family=Capriola|Carrois+Gothic+SC|Rakkas" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"> 
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
        
        <script>
        $(document).ready(function(){
            $("#toggle1").click(function(){
            $("img.hidden1").slideToggle();
        });  
            
            $("#toggle2").click(function(){
            $("img.hidden2").slideToggle();
        });  
            
            $("#toggle3").click(function(){
            $("img.hidden3").slideToggle();
        });
            
            $('.poomsae1').hide().fadeIn(2000);
            
            $('.poomsae2').delay(1000);
            $('.poomsae2').hide().fadeIn(2000);
            
            $('.poomsae3').delay(2000);
            $('.poomsae3').hide().fadeIn(2000);
            
        });
        
        </script>

</head>
    
    <div id="header">
    <h1 id="h1">Martial Arts</h1>
        <div id="main-nav-bar">
            <ul class="main-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="history.php">HISTORY</a></li>
            <li><a href="techniques.php">TECHNIQUES</a></li>
            <li><a href="forms.php">FORMS</a></li>
            <li><a href="beltrankings.php">BELT RANKINGS</a></li>
            <li><a href="benefits.php">BENEFITS</a></li>
            </ul>
        </div>
        
                <div class="dropdown">
                      <button onclick="myFunction()" class="dropbtn"><img src="menu-button.svg" class="icon"></button>
                      <div id="myDropdown" class="dropdown-content">
                          <li><a href="index.php">HOME</a></li>
                         <li><a href="history.php">HISTORY</a></li>
                         <li><a href="techniques.php">TECHNIQUES</a></li>
                         <li><a href="forms.php">FORMS</a></li>
                          <li><a href="beltrankings.php">BELT RANKINGS</a></li>
                          <li><a href="benefits.php">BENEFITS</a></li>
                      </div>
                </div>
    </div>

    