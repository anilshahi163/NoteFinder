<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php 

if (isset($_GET)) {
	$faculty = $_GET['faculty'];
}

 ?>
<div class="container">

  <div class="jumbotron">
    <h1><?php echo $faculty; ?> Notes</h1>
    <p>Here are some notes that are recently approved for <?php echo $faculty; ?> Faculty.</p>      
  </div> <!-- div close for jumbotron -->

 <div id="products" class="row list-group">
       <?php 
                $query = "SELECT * FROM uploads WHERE file_uploaded_to = '$faculty' ORDER BY file_id DESC ";
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
        
        <div class="item  col-xs-4 col-lg-4 list-group-item">
            <div class="thumbnail">
              <div class="note-img" id="note-img">
                <img class="group list-group-image" src="https://cdn.stocksnap.io/img-thumbs/280h/notebook-desk_GRGCZJ7CNE.jpg" alt="" />
<!--                 <div class="centered">
                  <p class="lead"><?php echo $file_faculty; ?></p>
                </div> -->
                </div>
                <div class="caption">
                    <h3 class="group inner list-group-item-heading">
                        <p class="lead"><?php echo $file_name; ?></p></h3>
                    <p class="group inner list-group-item-text">
                      <?php echo $file_description; ?>
                        </p>
                        <p class="group inner list-group-item-text">
                      Uploaded by: <?php echo $file_uploader; ?>
                        </p>
                        <p class="group inner list-group-item-text">
                      
                        Uploaded On: <?php echo $file_uploaded_date; ?>
                        </p>
                    <div class="row">
                       <!--  <div class="col-xs-12 col-md-6">
                           
                                Uploaded by: <?php echo $file_uploader; ?>
                                <br>
                                On <?php echo $file_uploaded_date; ?>
                        </div> -->
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
</div> <!-- div close for container -->
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
    width: auto;
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
    /*background: #eeeeee;*/
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

<?php include 'includes/footer.php';?>
</body>

</html>