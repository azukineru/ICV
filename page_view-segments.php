<?php
include('session.php');
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ICD | Customer Segments</title>

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
                <li><a class="subitem" href="#">Logout</a></li>
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

        <div class="callout primary hide-for-small-only">
        </div>

        <div class="row large-12" id="scroll">
          <div class="large-6 large-offset-1 column" style="margin-top: 60px;">
            <ul id="da-thumbs" class="da-thumbs inner">
              <li>
                <a href="page_view-listcluster-G.php">
                  <img src="image/G.png">
                  <div>
                    <h4><u>Segment G</u></h4>
                    <h6>High Market Capability</h6>
                    <h6>Low Network Availability</h6>
                  </div>
                </a>
              </li>
              <li>
                <a href="page_view-listcluster-H.php">
                  <img src="image/H.png">
                  <div>
                    <h4><u>Segment H</u></h4>
                    <h6>High Market Capability</h6>
                    <h6>Average Network Availability</h6>
                  </div>
                </a>
              </li>
              <li>
                <a href="page_view-listcluster-L.php">
                  <img src="image/L.png">
                  <div>
                    <h4><u>Segment L</u></h4>
                    <h6>High Market Capability</h6>
                    <h6>High Network Availability</h6>
                  </div>
                </a>
              </li>
              <li>
                <a href="page_view-listcluster-D.php">
                  <img src="image/D.png">
                  <div>
                    <h4><u>Segment D</u></h4>
                    <h6>Average Market Capability</h6>
                    <h6>Low Network Availability</h6>
                  </div>
                </a>
              </li>
              <li>
                <a href="page_view-listcluster-E.php">
                  <img src="image/E.png">
                  <div>
                    <h4><u>Segment E</u></h4>
                    <h6>Average Market Capability</h6>
                    <h6>Average Network Availability</h6>
                  </div>
                </a>
              </li>
              <li>
                <a href="page_view-listcluster-F.php">
                  <img src="image/F.png">
                  <div>
                    <h4><u>Segment F</u></h4>
                    <h6>Average Market Capability</h6>
                    <h6>High Network Availability</h6>
                  </div>
                </a>
              </li>
              <li>
                <a href="page_view-listcluster-A.php">
                  <img src="image/A.png">
                  <div>
                    <h4><u>Segment A</u></h4>
                    <h6>Low Market Capability</h6>
                    <h6>Low Network Availability</h6>
                  </div>
                </a>
              </li>
              <li>
                <a href="page_view-listcluster-B.php">
                  <img src="image/B.png">
                  <div>
                    <h4><u>Segment B</u></h4>
                    <h6>Low Market Capability</h6>
                    <h6>Average Network Availability</h6>
                  </div>
                </a>
              </li>
              <li>
                <a href="page_view-listcluster-C.php">
                  <img src="image/C.png">
                  <div>
                    <h4><u>Segment C</u></h4>
                    <h6>Low Market Capability</h6>
                    <h6>High Network Availability</h6>
                  </div>
                </a>
              </li>
            </ul>
          </div>

          <div class="large-4 large-pull-1 column inner" style="margin-top: 40px;">
            <div class="row">
              <h3>Customer Segmentation</h3>
            </div>
            <div class="row">
              <div class="large-12 columns">
                <div class="row collapse">
                  <div class="small-9 columns">
                    <input type="text" placeholder="Type cluster name here" >
                  </div>
                  <div class="small-3 columns">
                    <button class="button postfix round" type="submit">Search</button>
                  </div>
                </div>
              </div>

              <!--
              <div class="scroll-box">
                <table class="table-cluster">
                <tbody>
                  <tr>
                    <td><a href="page_view-datacluster.php"></a></td>
                  </tr>
                  <tr>
                    <td><a href="page_view-datacluster.php"></a></td>
                  </tr>
                </tbody>
              </table>
              </div>
            -->
          </div>

        </div>
      </div>

    </div>
  </div>

  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/foundation.js"></script>
  <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
  <script>
    $(document).foundation();
    $(function() {

      $(' #da-thumbs > li ').each( function() { $(this).hoverdir({
        hoverDelay : 75
      }); } );

    });
  </script>
</body>
</html>


