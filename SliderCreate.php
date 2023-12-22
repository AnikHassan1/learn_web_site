<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>AdminLTE | SliderCreate</title>
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
                    Slider Create
                    <a class="btn btn-success ms-5" href="SliderList.php">Slider List</a>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Slider Create</li>
                </ol>
            </section>
            <?php
            if (isset($_POST['Upload'])) {
                $img = $_FILES['Image']['name'];
                $imgs = $_FILES['Image']['tmp_name'];
                $Status = $_POST['Status'];

                if(empty($img)|| empty($Status)){
                    echo "feild";
                }else{
                    move_uploaded_file($imgs,'sliderImage/'.$img);
                    $sql2="INSERT INTO  slider(slide_image,Status) VALUES('$img','$Status')";
                    if($conn->query($sql2)===TRUE){
                        
                        echo "insert data";
                       
                    }else{
                        echo "Not Insert data";
                    }
                }
            }
            ?>

            <!-- Main content -->
            <section class="content">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="Image" class="form-label"> Image</label>
                        <input type="file" class="form-control" id="Image" aria-describedby="emailHelp" name="Image">
                    </div><br>

                    <div class="mt-4">
                        <span class="pt-4">Status</span><br>
                        <select name="Status" style="width:100%">
                            <option value="1">Published</option>
                            <option value="0">Pending</option>
                        </select>
                        <!-- <input type="text" class="form-control" id="Status" aria-describedby="emailHelp" name="Status"> -->
                    </div><br>

                    <input type="submit" class="btn btn-primary mt-3" name="Upload"></input>
                </form>
            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->

    <!-- add new calendar event modal -->


    <?php include("./includes/footer.php") ?>

</body>

</html>