<!DOCTYPE html>
<html>
<head>
    <title>PPDB | SMK JAKARTA</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Peserta Didik Baru</h3>
        <h1>SMK JAKARTA</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-murid.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>
    </body>
</html>