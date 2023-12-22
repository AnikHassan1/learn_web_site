<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Learning | PostList</title>
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

        <?php if (isset($_GET['Deletid'])) {
            echo $getid = $_GET['Deletid'];
            $sqlD2 = "DELETE   FROM posts WHERE post_id=$getid";
            if ($conn->query($sqlD2) === TRUE) {
                echo " <h1>Record Data Deleted</h1>";
                echo "<script>window.open('PostCreate.php')</script>";
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
            }
        } ?>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    PostList
                    <a class="btn btn-success ms-5" href="PostCreate.php">Post List</a>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">PostList</li>
                </ol>
            </section>
           
            <?php
            $sql = "SELECT * FROM posts";
            $result = $conn->query($sql);
            ?>
            <!-- Main content -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">PostsList</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="width: 10px"> id:</th>
                                        <th> cat_id:</th>
                                        <th>title:</th>
                                       
                                        <th> author:</th>
                                        <th> keywords:</th>
                                        <th> image:</th>
                                        <th> content:</th>
                                        <th> link:</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                    while ($data = $result->fetch_assoc()) {
                                        $post_id = $data['post_id'];
                                        $cat_id = $data['cat_id'];
                                        $post_title= substr($data['post_title'],0,20);
                                       
                                        $post_author= $data['post_author'];
                                        $post_keywords = substr($data['post_keywords'],0,10);
                                        $post_image = $data['post_image'];
                                        $post_content= substr($data['post_content'],0,20);
                                        $video_link = substr($data['video_link'],0,10);
                                        ?>
                                        <tr>
                                            <td><?php echo $post_id  ?></td>
                                            <td><?php echo $cat_id ?></td>
                                            <td><?php echo $post_title ?></td>
                                           
                                            <td><?php echo  $post_author ?></td>
                                            <td><?php echo   $post_keywords ?></td>
                                            <td>
                                          <img style="width: 40px; height:50px;" src="images/<?php echo   $post_image ?>" alt="img">
                                            </td>
                                            
                                            <td><?php echo   $post_content ?></td>
                                            <td><?php echo  $video_link ?></td>
                                            <td>
                                                <a class='btn btn-primary' href='editPost.php?id=<?php echo  $post_id  ?>'>Edit</a>
                                                <a class='btn btn-danger' href='PostList.php?Deletid=<?php echo  $post_id  ?>'>Delete</a>
                                            </td>
                                        </tr>

                                      
                                    <?php  } ?>



                                </table>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div>
            </div>
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->

    <!-- add new calendar event modal -->
    <?php include("./includes/footer.php") ?>

</body>

</html>