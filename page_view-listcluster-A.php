<?php
	include('session.php'); 
	include('clusterlist.php');
?>							
<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ICD | Segment A</title>
  
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

    <div class="large-3 position-left reveal-for-large my-info dashboard-A" data-off-canvas data-position="left">
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
          <table class="table-cluster">
            <tbody>
              
				<?php
					clusterlist('A');
				?>
            </tbody>
          </table>
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


