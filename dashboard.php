<?php
	include('session.php');
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ICD | Dashboard</title>

  <link rel="stylesheet" type="text/css" href="bower_components/foundation/css/foundation2.min.css" />
  <link rel="stylesheet" type="text/css" href="stylesheets/normalize.min.css" />
  <link rel="stylesheet" type="text/css" href="fonts/foundation-icons.css" />
  <link rel="stylesheet" type="text/css" href="stylesheets/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="stylesheets/custom.css" />

  <script type="text/javascript" src="js/modernizr.min.js"></script>
</head>
<body>

  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

      <div class="off-canvas position-left reveal-for-large my-info" id="my-info" data-off-canvas data-position="left">
        <div class="row column">
          <br>
          <a href="dashboard.php"><img src="image/logo-telkom.png "></a>
          <hr>
          <a href="dashboard.php"><h4>IndiHome Cluster Digitalization</h4></a>

          <ul class="multilevel-accordion-menu vertical menu" data-accordion-menu>
            <li>
              <a href="#">Dashboard</a>
              <ul class="menu vertical sublevel-1">
                <li><a class="subitem" href="#">Help</a></li>
                <li><a class="subitem" href="logout.php">Logout</a></li>
              </ul>
            </li>
            <li>
              <a href="#">App</a>
              <ul class="menu vertical sublevel-1">
              <li><a class="subitem" href="page_view-segments.php">Customer Segments</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>

      <div class="off-canvas-content" id="off-canvas-content" data-off-canvas-content>
        <div class="title-bar hide-for-large">
          <div class="title-bar-left">
            <button class="menu-icon" type="button" data-open="my-info"></button>
            <span class="title-bar-title">Dashboard</span>
          </div>
        </div>

        <div class="callout primary show-for-large-up hide-for-small-only">
        </div>

        <div class="row large-12">
          <div class="row inner">
            <h1>Welcome, admin !</h1>
            <p class="lead">
              This is the dashboard page, you can navigate to all of the applications feature from here.
            </p>
          </div>

        </div>
      </div>

    </div>
  </div>

  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/foundation.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>


