<html>
<head>
    <title>Tambah Video</title>
</head>

<body>
    <a href="beranda.php">Ke Beranda</a>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Id Video</td>
                <td><input type="text" name="id_video"></td>
            </tr>
            <tr> 
                <td>Judul</td>
                <td><input type="text" name="title_video"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr> 
                <td>Thumbnail</td>
                <td><input type="text" name="thumbnail"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_video = $_POST['id_video'];
        $title_video = $_POST['title_video'];
        $description = $_POST['deskripsi'];
        $thumbnail = $_POST['thumbnail'];
        // include database connection file
        include_once("koneksi.php");
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO video(id_video,title_video,deskripsi,thumbnail) VALUES('$id_video','$title_video','$description','$thumbnail')");
        // Show message when user added
        echo "User added successfully. <a href='beranda.php'>Lihat daftar video</a>";
    }
    ?>
</body>
</html>