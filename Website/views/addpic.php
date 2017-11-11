<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Todo App | addpic</title>
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
                    
                    <!--header content component (you can put these component according to your needs)-->
                    <div class=" w-100 text-right px-2 mb-5 py-1 row text-center">
                        <div class="col-12">   
                            <img src="../public/images/logo.png" alt="">
                                                 
                            <a class="font-1 d-block my-3" href="#">Add profile picture</a>

                            <button type="button" class="btn btn-primary rounded-0">Done</button>
                        </div><!--end col 8-->
                    </div><!--end profile header block-->
                     <!--header content component end here(you can put these component according to your needs)-->

                    
                    <!--add reminder content block-->
                    <!--add reminder content block-->
                    <div class="content-block row w-100 text-center justify-content-center py-5">
                        <div class="col-12 login-form px-5">
                            <h3 class="font-1">Todo App</h3>
                            <hr>

                            <form action="#" method="post">

                                <div class="form-group mt-5">
                                    <label for="title" class="sr-only">full name</label>
                                   <div class="input-group mb-2">
                                        <input type="text" class="form-control rounded-0" id="title" placeholder="Task Title">
                                   </div><!--end input group-->
                                </div><!--end form group-->

                                <div class="form-group">
                                    <textarea class="form-control rounded-0" id="description" rows="3" placeholder="description"></textarea>
                                </div><!--end form group-->

                                <div class="form-group">
                                    <span class="mr-5">Task Priority</span>
                                    <select class="custom-select my-3 rounded-0" required>
                                        <option value="low">Lowest</option>
                                        <option value="med">Medium</option>
                                        <option value="high">Highest</option>
                                    </select>
                                </div><!--end form group-->

                                <div class="form-group">                  
                                    <button class="btn btn-primary rounded-0">
                                        Done
                                    </button>                             
                                </div><!--end form group-->
                            </form><!--end form-->                        
                        </div><!--end left col-->
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