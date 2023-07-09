<?php
  $web_name = "LNMIIT Maintenance Automation System";
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>HOME  </title>
      <link rel="shortcut icon" href="../files/img/ico.ico">
      <link rel="stylesheet" href="../files/css/bootstrap.css">
      <link rel="stylesheet" href="../files/css/custom.css">
</head>
  <body>

    <nav class="custom_nav">
        <ul>
          <li><a href="../../index.html">Login</a></li>
          <li><a href="documentation.php">Documentation</a></li>
        </ul>
    </nav>

  <div class="animated fadeIn">
    <header class="custom_header">
        <h1>Announcements</h1>
        <br><br>
    </header>

    <div class="col-lg-12">

      <div class="container">
        <br><br>
        <h1>New Announcements...</h1>
        <br><br><br>
        <div class="col-lg-12"><!--row 1-->

          <div class="col-lg-4">
            <div class="quotes blg text-center">
              <!-- <h3>Tony Snow, Doctor</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <br>
                <a href="#" class="read">Read more</a> -->
                <div class="col-lg-12">
            <h2>News Feed</h2>
              <div class="posts">
              <?php
              $query = "SELECT * FROM `posts` ";
                $db=mysql_query($query);
                while($data=mysql_fetch_array($db)) {
                  echo "<br> <br> <div class='quotes glow'> ";
                  echo "<h4 class='heading'> Heading : ".$data['subject']."</h4>";
                  echo "<p> Story : ".$data['story']."<br><br>";
                  echo " Posted By : ".$data['session_name']."<br>";

              echo "</p></div><br><br>";

             }
            ?>
          </div>
        </div>
                <br><br><br><br>
            </div>
          </div>
          
      </div>
    </div>
  </div>

    <footer>
        <br><br> <?php echo $web_name; ?>
    </footer>

    <script src="../files/js/jquery.js"></script>
    <script src="../files/js/bootstrap.min.js"></script>
    <script src="../files/js/script.js"></script>

  </body>
</html>
