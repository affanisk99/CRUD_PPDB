<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>PPDB | SMK JAKARTA</title>
</head>

<body>
    <header>
        <h3>Murid yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM murid";
        $query = mysqli_query($connect, $sql);

        while($murid = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$murid['id']."</td>";
            echo "<td>".$murid['nama']."</td>";
            echo "<td>".$murid['alamat']."</td>";
            echo "<td>".$murid['jenis_kelamin']."</td>";
            echo "<td>".$murid['agama']."</td>";
            echo "<td>".$murid['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$murid['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$murid['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>