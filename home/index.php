<!DOCTYPE html>
<html>
<head>
  <title>Quote's Website</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../BS/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,700'>
  <link rel="stylesheet" href="cardStyle.css">

  <script src="../BS/js/jquery.min.js"></script>
  <script src="../BS/js/bootstrap.min.js"></script>
  
  <link href="style.css" rel="stylesheet" />

  <link href="../loginForm/loginStyle.css" rel="stylesheet" />

</head>

<body>

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container-fluid">
	      <div class="navbar-header">
	        
    	        <button type="button" class="navbar-toggle" data-toggle="collapse"data-target="#navbar-collapse-main">
    	           
  	          <span class="sr-only">Toggle navigation</span>
  	          <span class="icon-bar"></span>
  	          <span class="icon-bar"></span>
  	          <span class="icon-bar"></span>
  	          <span class="icon-bar"></span>
	        </button>

	        <a class="navbar-logo" href="#">
	          <img src="../img/logo.png" width="70" height="50">
	        </a>

	      </div>

<?php include "../includes/header_links.php" ?>
<?php include "../includes/db_connect.php" ?>


	  </div>

  </nav>


  <div id="home">
    <div class="landing-text">
        <h1>Quote's Website</h1>
        <h3>A place to share your great ideas and get inspired!</h3>
        <br> <br>
        <a href="../rgform/regform.php"  class="btn btn-default btn-lg">Share your thoughts</a>
    </div>  

  </div>

<br> <br>


<div class="padding1">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="../img/aspire.png" width="450" height="300"></div>

      <div class="col-sm-6 text-center">
        <h2> SOME CONTENT</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

</div>
</div>
</div>


<br> <br>


<div class="padding2">
    <div class="container">
      <div class="row">
        <div class = "col-lg-3 col-md-3 col-sm-6 col-xs-12">

          <h4> Enrich your thoughts </h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>

        <div class = "col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <img src="../img/i1.png" width="280" height="250">
        </div>

        <div class = "col-lg-3 col-md-3 col-sm-6 col-xs-12">
           <h4>Share your ideas</h4>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class = "col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <img src="../img/i2.png" width="280" height="250">
        </div>

      </div>
      </div>
</div>


<br> <br>

<div class="container">
  <div class="cardWrapper">
      <h1>Quotes</h1>
      <div class="cardCols">

<?php

      $sql_query = "SELECT * FROM quotes WHERE LENGTH(quote_text<=27) ORDER BY RAND() LIMIT 10" ; 
      $result = mysqli_query($conn,$sql_query);
      $resultCheck = mysqli_num_rows($result);
      $counter = 501;

      if($resultCheck>0){
        // shuffle_assoc($result);


        while ( $row = mysqli_fetch_assoc($result)) {

             
          $quote =$row["quote_text"];
          $author_name=$row["quote_author"];
          $url_img_no = $counter;           //Counter var
          $counter ++;
          $url_img_no=(string) $url_img_no;
          $url_img = "https://unsplash.it/".$url_img_no."/".$url_img_no."/";

          echo "<div class=\"cardColumn\" ontouchstart=\"this.classList.toggle('hover'); \"> ";
          echo "<div class=\"cardContainer\"> ";
          echo "<div class=\"cardFront\" style=\"background-image: url(".$url_img." )\"> ";
          //Change the url nos

          echo " <div class=\"cardInner\"> ";
          echo " <p>Quote by</p>";

          echo "<span>".$author_name."</span>"; 
          //Change the name of the author 

          echo "</div> </div> ";        
          echo "<div class=\"cardBack\"> ";     
          echo "<div class=\"cardInner\">"; 
          echo "<p>".$quote."</p> ";  
          //Change the quote

          echo "</div> </div> </div> </div>"; 

          }//while
      }//if
      

    ?>

      </div> <!-- end of cardCols -->
    </div>
</div>

<br> <br>




<div id="fixed">
</div>

<br> <br>

<?php include "../includes/footer.php" ?>
<?php include "../loginForm/loginHome.php" ?>


</body>
</html>






