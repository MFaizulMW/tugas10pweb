<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
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

    form {
        width: 380px; /* Diperbesar dari 320px ke 380px */
        margin: 10vh auto;
        padding: 30px; /* Diperbesar dari 20px ke 30px */
        background-color: whitesmoke;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        font-size: 12px;
    }

    fieldset {
        border: none;
        padding: 0;
    }

    p {
        margin-bottom: 20px; /* Lebih besar agar jarak antar elemen lebih lega */
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #0f2027;
    }

    input[type="text"],
    textarea,
    select,
    input[type="file"] {
        border: 2px solid #f0f0f0;
        border-radius: 4px;
        display: block;
        font-size: 14px; /* Ukuran font lebih besar agar lebih mudah dibaca */
        padding: 12px; /* Diperbesar dari 10px ke 12px */
        width: 100%;
        background-color: #ffffff;
        color: #333;
    }

    input[type="text"]:focus,
    textarea:focus,
    select:focus,
    input[type="file"]:focus {
        border-color: #41a1f6;
        outline: none;
    }

    textarea {
        resize: vertical;
        height: 80px;
    }

    input[type="radio"] {
        margin-right: 5px;
        accent-color: #203a43;
    }

    .radio-group label {
        font-size: 12px;
        font-weight: 400;
        color: #0f2027;
    }

    input[type="submit"] {
        padding: 15px; /* Padding diperbesar dari 10px ke 15px */
        margin-top: 20px; /* Margin atas diperbesar */
        width: 100%;
        color: white;
        background-color: rgb(41, 57, 194);
        border: none;
        border-radius: 4px;
        font-weight: bold;
        font-size: 14px;
        text-transform: uppercase;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    input[type="submit"]:hover {
        background-color: rgb(50, 72, 219);
        transform: translateY(-2px);
    }

    .input-control {
        display: flex;
        flex-direction: column;
    }

    .input-control input {
        border: 2px solid #f0f0f0;
        border-radius: 4px;
        display: block;
        font-size: 12px;
        padding: 10px;
        width: 100%;
    }

    .input-control input:focus {
        border-color: #41a1f6;
        outline: none;
    }

    .input-control.success input {
        border-color: #09c372;
    }

    .input-control.error input {
        border-color: #ff3860;
    }

    .input-control .error {
        color: #ff3860;
        font-size: 9px;
        height: 13px;
    }

    select {
        background-color: #fff;
    }

    form input[type="file"] {
        padding: 5px;
    }

    .radio-group {
        display: flex;
        gap: 10px;
    }
</style>



</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
                <label for="foto">Foto</label>
                <input type="file" name="foto">
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>