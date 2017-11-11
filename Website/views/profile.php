
<?php
	require_once("../controller/attachments.php");
	$loader = new Loader();
?>

<!doctype html>
<html class="no-js">
    <head>
        <title>Todo App | Profile</title>
        <?php $loader->head_load(); ?>
    </head>
    <body>
		<!-- work to do for signup -->
   	 	<?php $loader->body_load(); ?>

<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Todo App | profile</title>
        <meta name="description" content="A reminder list management">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <!-- Place favicon.ico in the root directory -->
		
		<!-- external css libs -->
        <link rel="stylesheet" href="../pulbic/css/normalize.css">
        <link rel="stylesheet" href="../public/css/bootstrap.css">
        <link rel="stylesheet" href="../public/css/font-awesome/css/font-awesome.css">
		
		<!-- custom styles -->
        <link rel="stylesheet" href="../public/css/main.css">

        <!-- external js libs -->
        <script src="../public/js/jquery.js"></script>
    </head>
    <body>
       
       <!-- external js libs -->
       <script src="../public/js/bootstrap.js"></script>
		
		 <!--pick me from here-->
        <!--index page view (html) code start here you can put it according to your adjustment-->

        <main class="main container mt-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-sm-7">
                    
                    <!--header content block-->
                    <!--header content block-->
                    <div class="content-block profile-header w-100 text-right px-2 mb-5 py-1 row">
                        <div class="col-8 ">                            
                            <h3 class="font-1">Todo App <img src="../public/images/logo.png" alt=""></h3>
                        </div><!--end col 8-->

                        <div class="col-4">
                            <p class="text-muted mb-0"><img src="../public/images/user.png" alt=""> Hi, Crakers <i class="fa fa-power-off"></i></p>
                        </div><!--end col 4-->   
                    </div><!--end profile header block-->

                    
                    <!--listing content block-->
                    <!--listing content block-->
                    <div class="content-block row w-100 text-center justify-content-center py-5">
                        <div class="col-8">
                            <i class="fa fa-plus" id="add"></i>

                            <div class="card priority-1 custom-card">
                                <div class="card-body">
                                    <h5>Home Work</h5>
                                    <p>Complete data structure to answer my team.</p>
                                </div><!--end card body-->
                            </div><!--end card-->

                            <div class="card priority-2 custom-card">
                                <div class="card-body">
                                    <h5>Happy bdy</h5>
                                    <p>Coder bday is here don't forget to wish him on 2nd October.</p>
                                </div><!--end card body-->
                            </div><!--end card-->

                            <div class="card priority-3 custom-card">
                                <div class="card-body">
                                    <h5>Main work</h5>
                                    <p>Let's complete the Todo project work given to me.</p>
                                </div><!--end card body-->
                            </div><!--end card-->
                        </div><!--end col 8-->
                    </div><!--end content block-->
                </div><!--end col sm6-->
            </div><!--end row-->
        </main><!--end main container-->

        <!--stop html struct finish here-->
        <!--stop html struct finish here-->

       <!-- custom js -->
       <script src="../public/js/bootstrap.js" async="true"></script>

    </body>
</html>