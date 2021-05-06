<?php
// include 'includes/connection.php';


// $output ='';

// //collect
// if (isset($_GET['search'])){
//     $searchq = $_GET['search'];
//     $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
//     $query = "SELECT * FROM uploads WHERE file_name LIKE '$search_text' OR file_description LIKE '$search_text'";
//     $result = mysqli_query($conn, $query);
//     $count = mysqli_num_rows($result);
//     echo $count;
//     exit("damn");
//     if($count == 0){
//         $output = 'There was no search results!';
//     }else{
//         while($row = mysql_fetch_array($result)){
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
// $query = "SELECT * FROM uploads WHERE file_name LIKE '$search_text'";
// SELECT * FROM mytable
// WHERE column1 LIKE '%word1%'
//    OR column1 LIKE '%word2%'
//    OR column1 LIKE '%word3%'
$query = "SELECT * FROM uploads WHERE file_name LIKE '%$search_text%'";
$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
$count = mysqli_num_rows($result);
$ids = [];
    if($count == 0){
        header("Location:search_results.php?found=".$count);
    }else{
		while($row=mysqli_fetch_assoc($result))
		{	
			$ids[] = $row['file_id']; 
		}
		$url = '&ids[]=' . implode('&ids[]=', array_map('urlencode', $ids));
        header("Location:search_results.php?found=".$count.$url);
    }

?>