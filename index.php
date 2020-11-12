<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="icofont/icofont.min.css">
    <title>Music Online Com</title>
</head>

<body>
    <div id="wrapper">
        <?php   include "inc_header.php"  ?>


        <div id="description">
            <div class="description__text">
                <h2>What is Music Online?</h2>
                <p>
                    Music Online store is a business that facilitates consumer-to-consumer and business-to-consumer sales of vinyls. Some customers also sell recorded speech files, such as podcasts, and video files of movies.
                </p>
				<p>
				Many electronic dance music and hip hop releases today are still preferred on vinyl; however, digital copies are still widely available. This is because for disc jockeys ("DJs"), vinyl has an advantage over the CD: direct manipulation of the medium. DJ techniques such as slip-cueing, beatmatching, and scratching originated on turntables. With CDs or compact audio cassettes one normally has only indirect manipulation options, e.g., the play, stop, and pause buttons. With a record one can place the stylus a few grooves farther in or out, accelerate or decelerate the turntable, or even reverse its direction, provided the stylus, record player, and record itself are built to withstand it. However, many CDJ and DJ advances, such as DJ software and time-encoded vinyl, now have these capabilities and more.
				</p>
            </div>
        </div>


        <main>

            <?php   
                include "inc_search_form.php";
                include "conn.php"; 
            ?>






            <section id="newItemsQuery">
                <h2>New items in database</h2>
                <div id="newItemQueryList">


                    <?php


    $query="SELECT * FROM item_table ORDER BY item_id DESC LIMIT 8";
    $result=mysqli_query($conn, $query);

if (!$result){
    echo "Error: " .mysqli_error($conn);
    exit();
    }

    while ($row = mysqli_fetch_array($result)){
        $artist=$row['artist'];
        $album=$row['album'];
        $price=$row['price'];
        $albumCover=$row['album_cover']

?>

                    <div class="main__newItemsQuery__newItem">

                        <p class="itemLine">
                            <span>Artist: </span>
                            <span><?php echo $artist ?></span>
                        </p>

                        <p class="itemLine">
                            <span>Album: </span>
                            <span><?php echo $album ?></span>
                        </p>

                        <p class="itemLine">
                            <span>Price: </span>
                            <span><?php echo $price ?></span>
                        </p><br>
                        <p class="itemLine">
                            <span><img src="<?php echo $albumCover ?>" alt="Album image of <?php echo $album ?>"></span>
                        </p>
                        

                        <p><a href="item_details.php?item_id=<?=$row['item_id']?>">More Info</a></p>

                    </div>


                    <?php   }  ?>



    </div>
            </section>
        </main>
        <?php   include "inc_footer.php"  ?>
    </div>
</body>

</html>