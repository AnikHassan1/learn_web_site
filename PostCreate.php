<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | PostCreate</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php include("./includes/header.php")?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include("./includes/Sildebar.php")?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Post
                        
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Post Create</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                   
                   
                    
                    
                    
                    
                    
                   
                    
                    
                    <form>
                        <div class="mb-3">
                          <label for=" Title" class="form-label"> Title</label>
                          <input type="text" class="form-control" id=" Title" aria-describedby="emailHelp" name="Title">
                        </div>
                        <div class="mb-3">
                            <label for="Content" class="form-label">Content</label>
                            <textarea class="form-control" id="Content" rows="3"></textarea>
                          </div>
                        <div class="mb-3">
                          <label for="Keyword" class="form-label">Keyword</label>
                          <input type="text" class="form-control" id="Keyword" aria-describedby="emailHelp" name="Keyword">
                        </div>
                        <div class="mb-3">
                          <label for="Image" class="form-label">Image</label>
                          <input type="file" class="form-control" id="Image" aria-describedby="emailHelp" name="Image">
                        </div>
                        <div class="mb-3">
                          <label for="Video" class="form-label">Video</label>
                          <input type="file" class="form-control" id="Video" aria-describedby="emailHelp" name="Video">
                        </div>
                        <div class="mb-3">
                          <label for="Author" class="form-label">Author</label>
                          <input type="text" class="form-control" id="Author" aria-describedby="emailHelp" name="Author">
                        </div>
                        <div class="mb-3">
                          <label for="Category _d" class="form-label">Category id</label>
                          <input type="text" class="form-control" id="Category _d" aria-describedby="emailHelp" name="Category _d">
                        </div>
                        <div class="mb-3">
                          <label for=" Date" class="form-label"> Date</label>
                          <input type="date" class="form-control" id=" Date" aria-describedby="emailHelp" name=" Date">
                        </div>
                        <div class="mb-3">
                          <label for="Status" class="form-label">Status</label>
                          <input type="text" class="form-control" id="Status" aria-describedby="emailHelp" name="Status">
                        </div><br>
                       
                        <input  type="submit" class="btn btn-primary mt-3"></input>
                      </form>
                   

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <?php include("./includes/footer.php")?>

    </body>
</html>