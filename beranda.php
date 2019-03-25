<?php
    session_start();
    include "koneksi.php";
    if (isset($_SESSION["username"])&& !empty($_SESSION ["username"])) {
        $username = $_SESSION["username"];
    } else {
        header("location: index.php");
    }
?>
welcome <?= $username ?>
<br><br>
<a href="keluar.php">Log Out</a>
<table>
    <thead>
    <tr>
      <th scope="col">Id Video</th>
      <th scope="col">Judul</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Thumbnail</th>
    </tr>
    </thead>
    <tbody>
            <?php
                $query = "SELECT * FROM video";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row["id_video"]; ?></td>
                        <td><?= $row["title_video"]; ?></td>
                        <td><?= $row["description"]; ?></td>
                        <td><?= $row["thumbnail"]; ?></td>
                        <td>
                            <a href="hapus.php?id=<?= $row['id_video']; ?>">hapus</a>
                            <a href="edit.php?id=<?= $row['id_video']; ?>">edit</a>
                        </td>
                    </tr>
                    <?php
                    }
                }
            ?>
    </tbody>
</table>