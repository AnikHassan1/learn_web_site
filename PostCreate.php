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
  <?php include("./includes/header.php") ?>
  <div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <?php include("./includes/Sildebar.php") ?>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Post Create
          <a class="btn btn-success ms-5" href="PostList.php">Post List</a>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Post Create</li>
          
        </ol>
      </section>
      <?php
            $sql2="SELECT * FROM categories";
            $result2=$conn->query($sql2);
            ?>
      <!-- Main content -->
      <section class="content">

        <?php
        if (isset($_POST['submit'])) {
          $Category_id = $_POST['Category_id'];
          $post_title = $_POST['post_title'];
          $post_date = $_POST['post_date'];
          $post_author = $_POST['post_author'];
          $post_keywords = $_POST['post_keywords'];
         $post_image = $_FILES['post_image']['name'];
         $post_temp=$_FILES['post_image']['tmp_name'];
          $post_content = $_POST['post_content'];
          $video_link = $_POST['video_link'];
         

          if (empty($Category_id) || empty($post_title) || empty($post_date) || empty($post_author)|| empty($post_keywords)|| empty( $post_image)|| empty($post_content)|| empty( $video_link)) {
            echo "feild";
          } else {
            move_uploaded_file($post_temp,"images/".$post_image);
            $sql = "INSERT INTO posts(cat_id,post_title,post_date,post_author,post_keywords,post_image,post_content,video_link)
                        VALUES('$Category_id ','$post_title',' $post_date','$post_author','$post_keywords','$post_image','$post_content','$video_link')";
            if ($conn->query($sql) === TRUE) {
              echo "insert Data";
            } else {
              echo "feild";
            }
          }
        }
        ?>

        <form method="POST" action="PostCreate.php" enctype="multipart/form-data">
          <div class="mb-3 ">
          <label for="Category_id" class="form-label">Category_name</label><br>
            <select name="Category_id" style="width:100%" >
              <?php while($cat=$result2->fetch_assoc()){
                $cat_id=$cat['cat_id'];
                $cat_name=$cat['cat_name'];
                echo"<option class='form-label' value=' $cat_id'> $cat_name</option>";
              } ?>
              
            </select>
            <!-- <label for="Category _d" class="form-label">Category id</label>
            <input type="text" class="form-control" id="Category_d" aria-describedby="emailHelp" name="Category_id"> -->
          </div><br>
          <div class="mb-3">
            <label for=" Title" class="form-label"> Title</label>
            <input type="text" class="form-control" id=" Title" aria-describedby="emailHelp" name="post_title">
          </div><br>
          <div class="mb-3">
            <label for=" Date" class="form-label"> Date</label>
            <input type="date" class="form-control" id=" Date" aria-describedby="emailHelp" name=" post_date">
          </div><br>
          <div class="mb-3">
            <label for="Author" class="form-label">Author</label>
            <input type="text" class="form-control" id="Author" aria-describedby="emailHelp" name="post_author">
          </div><br>

          <div class="mb-3">
            <label for="Keyword" class="form-label">Keyword</label>
            <input type="text" class="form-control" id="Keyword" aria-describedby="emailHelp" name="post_keywords">
          </div><br>
          <div class="mb-3">
            <label for="Image" class="form-label">Image</label>
            <input type="file" class="form-control" id="Image" aria-describedby="emailHelp" name="post_image">
          </div><br>
          <div class="mb-3">
            <label for="Content" class="form-label">Content</label>
            <textarea class="form-control" id="Content" rows="3" name="post_content"></textarea>
          </div><br>
          <div class="mb-3">
            <label for="Video" class="form-label">Video Link</label>
            <input type="url " class="form-control" id="Video" aria-describedby="emailHelp" name="video_link">
          </div><br>
          <input type="submit" class="btn btn-success mt-3" name="submit"></input>
        </form>


      </section><!-- /.content -->
    </aside><!-- /.right-side -->
  </div><!-- ./wrapper -->

  <!-- add new calendar event modal -->


  <?php include("./includes/footer.php") ?>

</body>

</html>