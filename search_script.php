<?php

include ("conn.php");


/*       //////////////////////////////////////////
            ARTIST NAME SEARCH SCRIPT START 
         ////////////////////////////////////////// */


if(isset($_POST['searchArtist'])){
    
    $artist=mysqli_real_escape_string($conn, $_POST['artist']);
    $pageTitle = mysqli_real_escape_string($conn, $_POST['artist']);
    
    
    
    $query="SELECT * FROM item_table WHERE artist LIKE '%$artist%'";
    
    $result=mysqli_query($conn, $query);
    
       $rowcount=mysqli_num_rows($result);}
/*       //////////////////////////////////////////
            PRODUCTION NAME SEARCH SCRIPT END 
         ////////////////////////////////////////// */
    /*       //////////////////////////////////////////
            PRODUCTION DATE SEARCH SCRIPT START 
         ////////////////////////////////////////// */
if(isset($_POST['searchAlbum'])){
    
    $album=mysqli_real_escape_string($conn, $_POST['album']);
    $pageTitle = mysqli_real_escape_string($conn, $_POST['album']);
    
    
    $query="SELECT * FROM item_table WHERE album LIKE '%$album%'";
    
    $result=mysqli_query($conn, $query);
    }
    /*       //////////////////////////////////////////
            PRODUCTION DATE SEARCH SCRIPT END 
         ////////////////////////////////////////// */
/*       //////////////////////////////////////////
            PRODUCTION GENRE SEARCH SCRIPT START 
         ////////////////////////////////////////// */
if(isset($_POST['searchGenre'])){
    
    $genre=mysqli_real_escape_string($conn, $_POST['genre']);
    $pageTitle = mysqli_real_escape_string($conn, $_POST['genre']);
    
    
    $query="SELECT * FROM item_table WHERE genre  LIKE '%$genre%'";
    
    $result=mysqli_query($conn, $query);
}
/*       //////////////////////////////////////////
            PRODUCTION GENRE SEARCH SCRIPT END 
         ////////////////////////////////////////// */
    ?>

<!doctype html>

<html lang="en">

<head>
    <title>Search for <?php echo $pageTitle  ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil" rel="stylesheet">
</head>

<body>


    <!-- //////////////////////////////////////////
            HEADER START 
         //////////////////////////////////////////-->
    <?php
      include('inc_header.php');
        ?>
    <!-- //////////////////////////////////////////
            HEADER END
         //////////////////////////////////////////-->

    <?php
    include('inc_search_form.php');
    ?>




    <div id="itemList">
        <table>
            <tr class="itemLegend">
                <th>Artist</th>
                <th>Album</th>
                <th>Action</th>
            </tr>
            <?php 
        
        while ($row = mysqli_fetch_array($result)){
        $artist=$row['artist'];
        $album=$row['album'];

    ?>





            <tr class="item">
                <td><?php echo $artist ?></td>
                <td><?php echo $album ?></td>
                <td><a href='item_details.php?item_id=<?=$row['item_id']?>'>More Info</a></td>
            </tr>


            <?php   }
    ?>

        </table>
    </div>



    <?php   include "inc_footer.php"  ?>
</body>

</html>
<?php
mysqli_close($conn);
?>