<?php include("./includes/connection.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>AdminLTE | Dashboard</title>
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
    <?php include("./includes/header.php") ?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <?php include("./includes/Sildebar.php") ?>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Category Create
                    <a class="btn btn-success ms-5" href="CategoryList.php">Category List</a>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Category Create</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <?php
                if (isset($_POST['cat_publish'])) {
                    $name = $_POST['cat_name'];
                    $cat_desc = $_POST['cat_desc'];
                    $cat_icon = $_POST['cat_icon'];

                    if (empty($name) || empty($cat_desc) || empty($cat_icon)) {
                        echo "feild";
                    } else {
                        $sql="INSERT INTO categories(cat_name,cat_desc,cat_icon)
                        VALUES('$name',' $cat_desc','$cat_icon')";
                        if($conn->query($sql)=== TRUE){
                            echo "insert Data";
                        }else{
                            echo "feild";
                        }
                    }

                } 
                ?>
                <form method="POST" action="CategoryCreate.php">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="Name" aria-describedby="emailHelp" name="cat_name">
                    </div><br><br>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="cat_desc"></textarea>
                    </div><br><br>
                    <div class="mb-3">
                        <label for="Icon" class="form-label">Icon</label>
                        <input type="text" class="form-control" id="Name" aria-describedby="emailHelp" name="cat_icon">
                    </div><br><br>

                    <input type="submit" class="btn btn-primary mt-3" name="cat_publish"></input>
                </form>


            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->

    <!-- add new calendar event modal -->
    <?php include("./includes/footer.php") ?>
</body>

</html>