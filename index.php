<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<br><br>
<link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- FlexSlider -->
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>

     <!-- <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li>
	    		<a href="#"><img src="images/slider/slide1.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Easy Notes Management</h2><p>Now easily manage all kind of notes by uploading them here.</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/slide2.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Upload Various Files</h2><p>User can upload various types of files like PDF, PPT, DOC etc..</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/slide3.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Controled By Admin</h2><p>Everying is managed and controled by administrator</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/slide4.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Login For Both Teacher and Student</h2><p>Both teacher and student can login and upload notes </p></div>
                </div>
	    	</li>
	    </ul>
	  </div>
   </div> -->

   <?php
   $message = $_GET['msg'];

    if ($message == 1) {

      echo '<script>alert("Thank you for the submission. We will check in shortly.")</script>';
    }

    ?>

<div class="slider">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/slider/slide5.png" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h2>Easy Notes Management</h2>
          <p>Now easily manage all kind of notes by uploading them here.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/slider/slide6.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Upload Various Files</h3>
          <p>User can upload various types of files like PDF, PPT, DOC etc..</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/slider/slide8.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Controlled By Admin</h3>
          <p>Everying is managed and controlled by administrator</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
   </div>
</div> <!-- div close for slider -->

<div class="container">
  <div class="jumbotron">
    <h1>Recently published Notes.</h1>
    <p>Here are some notes that are recently approved by the admin.</p>      
  </div> <!-- div close for jumbotron -->

<!--     <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>File Name</th>
        <th>File Description</th>
        <th>File Type</th>
        <th>Uploaded By</th>
        <th>Uploaded On</th>
        <th>Faculty</th>
        <th>File</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody> -->
<!--               </tbody>
  </table> -->

    <div class="well well-sm">
        <strong>View Mode:</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        </div>
    </div>
    <div id="products" class="row list-group">
       <?php 
                $query = "SELECT * FROM uploads where status = 'approved' ORDER BY file_id DESC LIMIT 6 ";
$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($run_query) > 0) {
while ($row = mysqli_fetch_array($run_query)) {
    $file_id = $row['file_id'];
    $file_name = $row['file_name'];
    $file_description = $row['file_description'];
    $file_type = $row['file_type'];
    $file_uploader = $row['file_uploader'];
    $file_uploaded_date = $row['file_uploaded_on'];
    $file_uploaded_date = date("F j, Y, g:i a"); 
    $file_uploaded_date = date("F j, Y, g:i a",strtotime($row['file_uploaded_on']));
    $file_faculty = $row['file_uploaded_to'];
    $file = $row['file'];
    $file_status = $row['status'];

    // echo '<tr>';
    // echo '<td>'.$file_name.'</td>';
    // echo '<td>'.$file_description.'</td>';
    // echo '<td>'.$file_type.'</td>';
    // echo '<td>'.$file_uploader.'</td>';
    // echo '<td>'.$file_uploaded_date.'</td>';
    // echo '<td>'.$file_faculty.'</td>';
    // echo '<td>'.$file.'</td>';
    // echo '<td>'.$file_status.'</td>';
    // echo '</tr>';
    ?>
        
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
              <div class="note-img" id="note-img">
                <img class="group list-group-image" src="https://cdn.stocksnap.io/img-thumbs/280h/notebook-desk_GRGCZJ7CNE.jpg" alt="" />
                <div class="centered">
                  <p class="lead"><?php echo $file_faculty; ?></p>
                </div>
                </div>
                <div class="caption">
                    <h3 class="group inner list-group-item-heading">
                        <p class="lead"><?php echo substr($file_name, 0,40); ?></p></h3>
<!--                     <p class="group inner list-group-item-text">
                      <?php echo $file_description; ?>
                        </p> -->
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                           
                                Uploaded by: <?php echo $file_uploader; ?>
                                <br>
                                On <?php echo $file_uploaded_date; ?>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn download-btn" href="dashboard/allfiles/<?php echo $file; ?>">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
<?php
}
}
else {
    echo "<script>alert('No Notes yet! Start uploading now');
    window.location.href= 'index.php';</script>";
}
                 ?>

</div>
</div>
<style type="text/css">

  .note-img {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-13%, -70%);
  color:black;
}
  .download-btn{
    background-color:#222222;
    color: white;
  }
  .download-btn:hover{
    color:white;
  }
  .glyphicon { margin-right:5px; }
.thumbnail
{
    margin-bottom: 20px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 10px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    /*background: #428bca;*/
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
}
.item.list-group-item .caption
{
    padding: 9px 9px 0px 9px;
}
.item.list-group-item:nth-of-type(odd)
{
    background: #eeeeee;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item img
{
    float: left;
}
.item.list-group-item:after
{
    clear: both;
}
.list-group-item-text
{
    margin: 0 0 11px;
}

</style>

<script type="text/javascript">
  $(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});

    if(jQuery('#products .item').hasClass('list-group-item')){
      // $('#note-img .centered').addClass('toriclass');
      alert("yes");
    }
});
</script>

<?php include 'includes/footer.php';?>
</body>
</html>


        