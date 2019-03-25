<?php
// include database connection file
include_once("koneksi.php");
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_video = $_POST['id_video'];
    $title_video=$_POST['title_video'];
    $description=$_POST['deskripsi'];
    $thumbnail=$_POST['thumbnail'];
    // update user data
    $result = mysqli_query($mysqli, "UPDATE video SET id_video='$id_video',title_video='$title_video',deskripsi='$deskripsi',thumbnail='$thumbnail' WHERE id_video=$id_video");
    // Redirect to homepage to display updated user in list
    header("Location: beranda.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_video = $_GET['id_video'];
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM video WHERE id_video=$id_video");
while($data_video = mysqli_fetch_array($result))
{
    $id_video = $data_video['id_video'];
    $title_video = $data_video['title_video'];
    $description = $data_video['deskripsi'];
    $thumbnail = $data_video['thumbnail'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="beranda.php">Home</a>
    <br/><br/>

    <form name="update_video" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Id_video</td>
                <td><input type="text" name="id_video" value=<?php echo $id_video;?>></td>
            </tr>
            <tr> 
                <td>Judul</td>
                <td><input type="text" name="title_video" value=<?php echo $title_video;?>></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value=<?php echo $description;?>></td>
            </tr>
            <tr> 
                <td>Thumbnail</td>
                <td><input type="text" name="thumbnail" value=<?php echo $thumbnail;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_video" value=<?php echo $_GET['id_video'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>