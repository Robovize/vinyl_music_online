<?php
session_start();
?>



<?php
include "conn.php";

function redirect_to($location = NULL)
{
    if ($location != NULL)
    {
        header("Location: {$location}");
        exit;
    }
}

$query0 = "SELECT * FROM item_table";
$result0 = mysqli_query($conn, $query0);
$row0 = mysqli_fetch_array($result0);


if (isset($_POST['update'])){
    $item_id = $_POST['item_id'];
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    if($_FILES["photo"]["name"] == ""){
        $photopath = $row0['album_cover'];
        $imageFolder = "";
    }else{
        $photopath = $_FILES["photo"]["name"];
        $imageFolder = "images/";
        }





    $query = "UPDATE item_table SET
                artist = '{$artist}',
                album = '{$album}',
                year = '{$year}',
                genre = '{$genre}',
                price = '{$price}', 
                album_cover = CONCAT ('$imageFolder' , '$photopath') WHERE item_id='{$item_id}'";

    $result = mysqli_query($conn, $query);



// Check if file was uploaded without errors
if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
    $filename = $_FILES["photo"]["name"];
    $filetype = $_FILES["photo"]["type"];
    $filesize = $_FILES["photo"]["size"];

// Verify file extension
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

// Vefiry file size = 5MB max
    $maxsize = 5 * 1024 * 1024;
    if($filesize > $maxsize) die ("Error: File size is larger than the allowed limit.");

// Verify MIME type of the file
    if(in_array($filetype, $allowed)){

// CHeck whether file exists before uploading it
        if ( file_exists ("images/" . $_FILES["photo"]["name"]))
            {
            //echo $_FILES["photo"]["name"] . " is already exists, but image path was changed.";
            redirect_to ( 'item_list.php');
            } else {
                move_uploaded_file ( $_FILES["photo"]["tmp_name"], "images/" . $_FILES["photo"]["name"]);
                redirect_to ( 'item_list.php');
            }
    }else{
        echo "Error: There was a problem uploading your file. Please try again.";
    }
}else{
    redirect_to ( 'item_list.php');
    
}




    
}
else if (isset($_POST['delete']))
{
    $item_id = $_POST['item_id'];
    $query = "DELETE FROM item_table WHERE item_id = '{$item_id}' LIMIT 1";

    $result = mysqli_query($conn, $query);
    redirect_to('item_list.php');
}
?>