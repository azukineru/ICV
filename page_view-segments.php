<?php
include('session.php');
include('searchclust.php');
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
  <link rel="stylesheet" type="text/css" href="stylesheets/pace.css" />
  <script type="text/javascript" src="js/pace.min.js"></script>
  <script type="text/javascript" src="js/modernizr.min.js"></script>
</head>
<body>

  <div class="off-canvas-wrapper mapstyle">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

      <div class="off-canvas position-left reveal-for-large my-info" id="my-info" data-off-canvas data-position="left">
        <div class="row column">
          <br>
          <a href="dashboard.php"><img src="image/logo-telkom.png "></a>
          <a href="dashboard.php"><h4 class="text-center text-red">IndiHome Cluster Digitalization</h4></a>

          <ul class="multilevel-accordion-menu vertical menu" data-accordion-menu>
            <li>
              <a href="#">Dashboard</a>
              <ul class="menu vertical sublevel-1">
                <li><a class="subitem" href="page_help.php">Help</a></li>
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

        <div class="callout primary hide-for-small-only">
        </div>

        <div class="row large-12" id="scroll">
          <div class="large-6 large-offset-1 column">
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
                    <h6>Medium Network Availability</h6>
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
                    <h6>Medium Market Capability</h6>
                    <h6>Low Network Availability</h6>
                  </div>
                </a>
              </li>
              <li>
                <a href="page_view-listcluster-E.php">
                  <img src="image/E.png">
                  <div>
                    <h4><u>Segment E</u></h4>
                    <h6>Medium Market Capability</h6>
                    <h6>Medium Network Availability</h6>
                  </div>
                </a>
              </li>
              <li>
                <a href="page_view-listcluster-F.php">
                  <img src="image/F.png">
                  <div>
                    <h4><u>Segment F</u></h4>
                    <h6>Medium Market Capability</h6>
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
                    <h6>Medium Network Availability</h6>
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
            
            <div class="column large-12" style="margin-top: 20px;">
              <p>Model Zona Pemenangan dan Eksekusi Operasional :</p>
              <div class="columns large-6"><div class="box bg-red"></div> <b>WIN</b>ning Zone -> CAP & Agency</div>
              <div class="columns large-6"><div class="box bg-grey"></div> <b>BASIC</b> Zone -> Agency</div>
              <div class="columns large-6"><div class="box bg-black"></div> <b>SBR</b> Zone -> Organic & Canvasser</div>
              <div class="columns large-6"><div class="box bg-green"></div> <b>EDU</b>cation Zone -> Canvasser</div>
              <div class="column large-12"><div class="box bg-white"></div> <b>Apartment</b> Zone -> CAP (Consumer Account Partner)</div>
            </div>
          </div>

          <div class="large-4 large-pull-1 column inner">
            <div class="row">
              <h3>Search by Cluster Name</h3>
            </div>
            <div class="row">
              <div class="large-12 columns">
                <div class="row collapse">
                  <form action="" method="post">
                    <div class="small-9 columns">
                     <input type="text" placeholder="Type ODC name here" name="nameclust">
                   </div>
                   <div class="small-3 columns">
                     <button class="button postfix round search-style" type="submit" name="search">Search</button>
                   </div>
                 </form>
               </div>
             </div>

             <div>
               <?php 
               searchclust(); 
               searchodc();
               ?>
             </div>
           </div>

         </div>
       </div>

     </div>
   </div>

   <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
   <script type="text/javascript" src="js/foundation.js"></script>
   <script src="js/app.js"></script>
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


