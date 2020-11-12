<?php
include "conn.php";


$item_id = (isset($_GET["item_id"]) && !empty($_GET["item_id"]) ? $_GET["item_id"] : "");

$query = "SELECT * FROM item_table WHERE item_id= $item_id";
$result = mysqli_query($conn, $query);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();}



while ($row = mysqli_fetch_array($result))
{
        $item_id = $row['item_id'];
        $artist = $row['artist'];
        $album = $row['album'];
        $year = $row['year'];
        $genre = $row['genre'];
        $album_cover = $row['album_cover'];
        $date_added = $row['date_added'];
        $price = $row['price'];
        $user_id = $row['user_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Music Online - <?php echo "$artist $album"; ?></title>
</head>

<body>




  <?php 

include "inc_header.php";


?>

<div class="itemDetailWrapper">
<div class="itemDetailInfo">





<div class="itemDetail">
<div class="itemLegend">
    <span>Artist</span>
    <span>Album</span>
    <span>Year</span>
    <span>Genre</span>
    <span>Date added</span>
    <span>Price</span>
    <span>Seller</span>
</div>
  
<div class="item">
        <span> <?php echo "$artist"; ?> </span>
        <span> <?php echo "$album"; ?> </span>
        <span> <?php echo "$year"; ?> </span>
        <span> <?php echo "$genre"; ?> </span>
        <span> <?php echo "$date_added"; ?> </span>
        <span> <?php echo "$price"; ?> </span>
        <span> <?php echo "$user_id"; ?> </span>
</div>


</div>
</div>
<div class="detailInfoImage">
<img src=" <?php echo " $album_cover"; ?>" class="detailImage" alt="Big image">
</div>
</div>



    <?php } ?>




    <!--
        if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
        }
}

-->



<?php   include "inc_footer.php"  ?>
</body>
</html>