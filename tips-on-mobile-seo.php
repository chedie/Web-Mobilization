<?php include 'header.php';?>
<link href="css/grid.css" rel="stylesheet"/>
<script src="javascripts/modernizr.custom.js"></script>
</head>

<body>
<section id="wrapper" class="inner">
  
    <?php include 'sidebar.php';?>
    
    <article class="col-sm-9" id="page-content-wrapper">  
        <section class="container-fluid">
        
           <!--<div class="row-menu"><a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></a></div>-->
  
  			<?php include 'chapter4-content.php';?>
        
        
             <section class="row">
              <footer>
                <?php include 'footer.php';?>
              </footer>
            </section>
            
          </section> <!-- end#homepage-content -->
          </section> <!-- end.container-fluid -->
      </article> <!-- end#page-content-wrapper -->
  </section> <!-- end#wrapper-->


<?php include 'footer-scripts.php';?>

		<script src="javascripts/grid.js"></script>
		<script>
			$(function() {
				Grid.init();
			});
		</script>
</body>
</html>