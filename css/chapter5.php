<html lang="en">
<head>
<title>Dynamic Prototype Mobilization Course</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="description" content=""/>
<meta name="author" content=""/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="javascripts/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet"/>
</head>

<body>
<section id="wrapper">
  
    <?php include 'sidebar.php';?>
    
    <article class="col-sm-9" id="page-content-wrapper">  
        <section class="container-fluid">
        
          <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
  
  			<?php include 'chapter5-content.php';?>
        
        
             <section class="row">
              <footer>
                <?php include 'footer.php';?>
              </footer>
            </section>
            
          </section> <!-- end#homepage-content -->
          </section> <!-- end.container-fluid -->
      </article> <!-- end#page-content-wrapper -->
  </section> <!-- end#wrapper-->

<script>
	$("#menu-toggle").click(function(e) {
    	e.preventDefault();
	$("#wrapper").toggleClass("toggled");
});
</script>
</body>
</html>