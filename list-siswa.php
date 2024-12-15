<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran Siswa Baru | SMK</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

    body {
        background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        color: #0f2027;
    }

    header {
        text-align: center;
        padding: 20px;
        background-color: transparent;
    }

    header h3 {
        color: #ffffff;
        font-size: 2rem;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    nav {
        text-align: center;
        margin: 20px 0;
    }

    nav a {
        display: inline-block;
        padding: 12px 25px;
        background-color: rgb(41, 57, 194);
        color: white;
        text-decoration: none;
        border-radius: 6px;
        font-weight: 600;
        transition: all 0.3s ease-in-out;
        margin: 0 10px;
    }

    nav a:hover {
        background-color: rgb(50, 72, 219);
        transform: translateY(-3px);
    }

    table {
        width: 95%; /* Lebar tabel diperbesar */
        margin: 30px auto;
        border-collapse: collapse;
        background: whitesmoke;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    th, td {
        text-align: center;
        padding: 15px; /* Lebih besar dari sebelumnya */
        border-bottom: 1px solid #dddddd;
        font-size: 14px; /* Lebih besar agar lebih mudah dibaca */
    }

    th {
        background-color: rgb(41, 57, 194);
        color: white;
        font-weight: 600;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #d4e4f7; /* Efek hover pada baris tabel */
        transition: background-color 0.2s ease-in-out;
    }

    img {
        max-width: 80px;
        max-height: 80px;
        object-fit: cover;
        border-radius: 5px;
        border: 2px solid #ddd;
    }

    .actions a {
        color: rgb(41, 57, 194);
        text-decoration: none;
        font-weight: bold;
        transition: all 0.2s ease-in-out;
    }

    .actions a:hover {
        text-decoration: underline;
        color: #2a45c2;
    }

    p {
        text-align: center;
        font-weight: bold;
        color: #ffffff;
        font-size: 1.2rem;
    }
</style>

</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="pdf.php" class="btn">Download File PDF</a>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Foto</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td><img src='gambar/" . $siswa['foto'] ."' width='100' height='100'></td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>