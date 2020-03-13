<?php 
session_start(); 
if(!isset($_SESSION['name']))
{
header("Location: index.php"); 
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Best ITI College in Bassi</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" id="themesflat-theme-slug-fonts-css" href="https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600%2C700%2C900%2Cregular%7CPoppins%3A300%2C400%2C500%2C600%2C700%2C900%2C600%7CPoppins%3A600" type="text/css" media="all">
	 <link rel="stylesheet" type="text/css" href="css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script>
   
</head>
<body>
<div class="top_theme" id="top_page">
			<div class="container">
				<div class="row">
					<div class="col-md-12 clearfix">
				<div class="container_inside">
					<div class="content_left">
						<ul>
							<li class="border_right"><i class="fa fa-phone"></i>Call us: 9680872618</li>
							<li><i class="fa fa-envelope"></i>
								<a href="mailto:mailidto@rooprajat.com?subject=Admission">Email: psbvmjaipur@gmail.com</a>
							</li>
						</ul>
					</div>
					<div class="content_right">
						<div class="info-top-right border-left">		
							<a class="appoinment" href="logout.php"><i class="fa fa-user" aria-hidden="true"></i>
<?php echo $_SESSION['name'];  ?></a>
						</div>
					</div>
				</div>
			</div>

</div>
</div>
		</div>

		<div class="themesflat_header_wrap header-style2" data-header_style="header-style2"><!-- Header -->
			<header id="header" class="header widget-header header-style2">
    			<div class="container sticky_hide">
    				<div class="row">
    					<div class="col-md-12">
                			<div class="header-wrap clearfix">
                        		<div id="logo" class="logo">                  
        							<a href="https://www.bhushaniti.com/" title="Best ITI College in Jaipur, Rajasthan, Private ITI Institute">
                            		<img class="site-logo" src="img/web_title.png" alt="" data-retina="">
                    				</a>
    							</div>

                   				 <div class="wrap-header-content">
                                              
                    			</div><!-- wrap-widget-header -->
                			</div> 
                		  </div>               
            			</div>
    			</div><!-- /.container -->    


<!-- Mainnav -->
				<div class="mainnav">
    				<div class="container">
        				<div class="row">
            				<div class="col-md-12 clearfix">
                
								<div class="nav-wrap">
    								<div class="btn-menu">
        				
   									</div><!-- //mobile menu button -->
               
    						<nav id="mainnav" class="mainnav" role="navigation">
        						<ul id="menu-menu-1" class="menu">
        							<li>
        									<a href="admin-home.php" aria-current="page">Managing Society</a>
        							</li>
        							<li>
											<a href="admin-news.php">New & Notificaton</a>
												
									</li>
									<li>
											<a href="admin-technical">Technical Staff</a>
												
									</li>
									<li>
											<a href="#">Admistrative Staff</a>
												
									</li>
									<li>
											<a href="">Inspection</a>
												<ul class="sub-menu">
										
												</ul>
											
									</li>
										
									
								

							</ul>    
						</nav><!-- #site-navigation -->  
</div><!-- /.nav-wrap -->                                                   
                     
            </div>
        </div><!-- /.row -->       
    </div><!-- /.container -->    
</div>

</header><!-- /.header --></div>





<div class="clearfix"></div>