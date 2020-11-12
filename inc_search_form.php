<section id="searchItems">
    <h2>Search vinyl database</h2>





<div id="searchItemsWrapper">

    <div class="main__searchItems__form">
        <form id="searchArtist" method="post" action="search_script.php">
            <label>Artist:</label>
            <div class="rightForm">
                <input type="text" placeholder="Type artist name" name="artist" list="artist">
                <datalist id="artist">
                    <option value="Abba">
                    <option value="Beatles, The">
                    <option value="Daft Punk">
                    <option value="Led Zeppelin">
                    <option value="Madonna">
                    <option value="Michael Jackson">
                    <option value="Pink Floyd">
                    <option value="Slayer">
                </datalist>
                <input type="submit" value="Search" name="searchArtist">
            </div>
        </form>
    </div>


    <div class="main__searchItems__form">
        <form id="searchAlbum" method="post" action="search_script.php">
            <label>Album:</label>
            <div class="rightForm">
                <input type="text" placeholder="Type album name" name="album" list="album">
                <datalist id="album">
                    <option value="Thriller">
                    <option value="Like A Prayer">
                    <option value="Homework">
                    <option value="Discovery">
                    <option value="Beatles For Sale">
                    <option value="Long Tall Sally">
                    <option value="Atom Heart Mother">
                    <option value="Divine Intervention">
                </datalist>
                <input type="submit" value="Search" name="searchAlbum">
            </div>
        </form>
    </div>

    
    <div class="main__searchItems__form">
        <form id="searchGenre" method="post" action="search_script.php">
            <label>Genre:</label>
            <div class="rightForm">
                <input type="text" placeholder="Type genre name" name="genre" list="genre">
                <datalist id="genre">
                    <option value="Rock">
                    <option value="Pop">
                </datalist>
                <input type="submit" value="Search" name="searchGenre">
            </div>
        </form>
        </div>
    </div>
</section>