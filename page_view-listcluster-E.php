<?php
include('session.php'); 
include('clusterlist.php');
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ICD | Segment E</title>
  
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

  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

      <div class="large-3 position-left reveal-for-large my-info dashboard-E" data-off-canvas data-position="left">
        <div class="row">
          <a href="page_view-segments.php"><i class="fi-arrow-left medium"> Back</i></a>
        </div>
      </div>

      <div class="large-9 float-right" data-off-canvas-content>
        <div class="title-bar hide-for-large">
          <div class="title-bar-left">
            <a href="page_view-segments.php"><i class="fi-arrow-left medium"> Back</i></a>
          </div>
        </div>
        
        <div class="row large-12 table-wrapper" id="scroll">
          <br>
          <div class="row large-12">
            <div class="inner">
              <div class="column large-3 float-left">
                <label>Select Area
                  <select>
                    <option value="husker">HS 1</option>
                    <option value="starbuck">HS 2</option>
                    <option value="hotdog">Kandatel Ungaran</option>
                    <option value="apollo">Kandatel Kendal</option>
                  </select>
                </label>
              </div>
              <div class="column large-3 float-left large-offset-1">
                <label>Select SOC
                  <select>
                    <option value="husker">---</option>
                  </select>
                </label>
              </div>
              <div class="column large-3 float-left large-offset-1">
                <label>&nbsp</label>
                <button class="button expanded" type="submit" name="search">Search</button>
              </div>
            </div>
          </div>
          <br>
          <div class="row large-12">
            <table class="table-cluster">
              <tbody>
               
                <?php
                clusterlist('E');
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>


