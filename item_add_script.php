<?php
include "conn.php";

session_start();

function redirect_to($location = NULL)
{
    if ($location != NULL)
    {
        header("Location: {$location}");
        exit;
    }
}

if (isset($_POST['add']))
{
    $user_id = $_SESSION['user_id'];
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $date_added = date("Y-m-d");
    $photopath = $_FILES["photo"]["name"];

    $query = "INSERT INTO item_table (artist, album, year, genre, price, date_added, album_cover, user_id)
    VALUES ('$artist', '$album', '$year', '$genre', '$price', '$date_added', CONCAT ('images/', '$photopath'), '$user_id')";
                
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }



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

// Check whether file exists before uploading it
        if ( file_exists ("images/" . $_FILES["photo"]["name"]))
            {
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













// IMAGE UPLOAD END



    
}


?>
