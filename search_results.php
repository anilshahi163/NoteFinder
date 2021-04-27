<?php
// include 'includes/connection.php';


// $output ='';

// //collect
// if (isset($_GET['search'])){
//     $searchq = $_GET['search'];
//     $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
//     $query = mysql_query("SELECT * FROM uploads WHERE file_name LIKE '%"$searchq"%' OR file_description LIKE '%"$searchq"%'") or die("could not search");
//     $count = mysql_num_rows($query);
//     if($count == 0){
//         $output = 'There was no search results!';
//     }else{
//         while($row = mysql_fetch_array($query)){
//             $file_name = $row['file_name'];
//             $file_desc = $row['file_description'];
//             $id = $row['id'];

//             $output .= '<div>'.$file_name.''.$file_desc.'</div>';
//         }
//     }
// }
?>

<?php
include 'includes/connection.php';
$search_text = $_GET['search'];
$query = "SELECT * FROM uploads WHERE file_name LIKE '$search_text'";
$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
// print_r($search_text);exit;
while($row=mysqli_fetch_assoc($result))
{	
	echo "<pre>";
	print_r($row);
	echo "</pre>";
	exit;
}

?>