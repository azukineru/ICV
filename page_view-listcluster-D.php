<?php
include('session.php'); 
include('clusterlist.php');
?>              
<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ICD | Segment D</title>
  
  <link rel="stylesheet" type="text/css" href="bower_components/foundation/css/foundation2.min.css" />
  <link rel="stylesheet" type="text/css" href="stylesheets/normalize.min.css" />
  <link rel="stylesheet" type="text/css" href="fonts/foundation-icons.css" />
  <link rel="stylesheet" type="text/css" href="stylesheets/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="stylesheets/custom.css" />
  <link rel="stylesheet" type="text/css" href="stylesheets/pace.css" />
  <script type="text/javascript" src="js/pace.min.js"></script>
  <script type="text/javascript" src="js/modernizr.min.js"></script>
</head>

<body class="mapstyle-segment">
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

      <div class="large-3 position-left reveal-for-large my-info dashboard-D" data-off-canvas data-position="left">
        <div class="row">
          <a href="page_view-segments.php"><i class="fi-arrow-left medium"> Back</i></a>
        </div>
      </div>

      <div class="large-9 float-right" data-off-canvas-content>
        <div class="title-bar hide-for-large">
          <div class="title-bar-left">
            <a href="page_view-segments.php" ><i class="fi-arrow-left medium"> Back</i></a>
          </div>
        </div>
        
        <div class="row large-12 table-wrapper" id="scroll">
          <br>
          <div class="row large-12">
            <div class="inner">
              <form action="" method="post">              
                <div class="column large-2 float-left">
                 <label>Select Area
                  <select name="HS" id="ddl1" onchange="configureDropDownLists(this,document.getElementById('ddl2'),document.getElementById('ddl3'))">              
                    <option value=""></option>
          <option value="All">All</option>          
                    <option value="HS 1">HS1</option>
                    <option value="HS 2">HS2</option>
                  </select>
                </label>
              </div>
              <div class="column large-2 float-left large-offset-1">
                <label>Select SOC
                  <select name="SOC" id="ddl2">
                  </select>
                </label>
              </div>
              <div class="column large-2 float-left large-offset-1">
                <label>Select Battlefield
          <select name="BF" id="ddl3">
                  </select>
                </label>
              </div>
              <div class="column large-2 float-left large-offset-1">
                <label>&nbsp</label>
                <button class="button expanded" type="submit" name="search">Search</button>
              </div>
            </form>
          </div>
        </div>

        <div class="row large-12">
          <?php
          if (isset($_POST["search"]) && !empty($_POST["HS"]) && !empty($_POST["SOC"])){
            searchparam('D',$_POST["HS"],$_POST["SOC"],$_POST["BF"]);
            echo "
            <style type='text/css'>
              #first-column{
              display: block;
            }
          </style>
          ";
        }
        elseif (empty($_POST["HS"]) || empty($_POST["SOC"])){
          echo '&nbsp&nbsp&nbsp&nbsp&nbspPlease define Area, SOC, and Battlefield.';
        }
        ?>
        <br><br>
        
        <div id="first-column" class="column large-4">
          <div class="inner">
            <h3>Area Information</h3>                                 
      <?php     
                if (isset($_POST["search"]) && !empty($_POST["HS"]) && !empty($_POST["SOC"])) {         
                  overview('D',$_POST["HS"],$_POST["SOC"],$_POST["BF"]);            
                }
                ?>      
            <button class="button" id="viewListCluster">View List Cluster</button>
          </div>
        </div>
        <div id="second-column" class="column large-4">
          <div class="inner">
            <h3>List Cluster</h3>
            <div class="scroll-box">
              <table class="table-cluster">
                <tbody>
                  <?php     
                  if (isset($_POST["search"]) && !empty($_POST["HS"]) && !empty($_POST["SOC"])) {         
                    clusterlist('D',$_POST["HS"],$_POST["SOC"],$_POST["BF"]);              
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div id="third-column" class="column large-4">
          <div class="inner">
            <h3>List ODC</h3>
            <?php     
            if (isset($_POST["search"]) && !empty($_POST["HS"]) && !empty($_POST["SOC"])) {         
              odclist('D',$_POST["HS"],$_POST["SOC"],$_POST["BF"]);              
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script src="js/app.js"></script>
<script src="js/ddl.js"></script>
<script>

</script>

</body>
</html>


