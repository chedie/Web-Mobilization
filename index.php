<?php include 'header.php';?>
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Neuton:300,400,700' rel='stylesheet' type='text/css'>
</head>

<body>
<section id="wrapper">
  
    <?php include 'sidebar.php';?>
    
    <article class="col-sm-9" id="page-content-wrapper">  
        <section class="container-fluid">
        
         <!--<div class="row-menu"><a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></a></div>-->
  
  			<?php include 'homepage-content.php';?>
        
        
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

</body>
</html>