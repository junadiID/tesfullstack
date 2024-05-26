<?php 

$message = "";

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $numberTelpon = $_POST['nomor_telpon'];
    $jenisKelamin = $_POST['jenis_kelamin'];

    if(empty($nama) || empty($alamat) || empty($numberTelpon) || empty($jenisKelamin)){
        $message =  "Tidak boleh ada inputan kosong";
    } else if (!preg_match('/^[a-zA-Z]+$/', $nama)) {
        $message = "Nama harus berisi huruf saja.";
    } else if(!is_numeric($numberTelpon)){
        $message = "Number telpon hanya boleh berisi angka";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        table {
            width: 100%;
            max-width: 400px;
            margin: auto;
        }
        td {
            padding: 5px;
        }

        i {
            width: 100%;
            margin-left:600px;
        }
    </style>
</head>
<body>

<form action="PHP_01.php" method="POST">
    <i class="pesan"><?= $message; ?></i>
    <table>
        <tr>
            <td><label for="nama">Nama</label></td>
            <td><input type="text" id="nama" name="nama"></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat</label></td>
            <td><input type="text" id="alamat" name="alamat"></td>
        </tr>
        <tr>
            <td><label for="nomor_telpon">Nomor Telepon</label></td>
            <td><input type="text" id="nomor_telpon" name="nomor_telpon"></td>
        </tr>
        <tr>
            <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
            <td>
                <select id="jenis_kelamin" name="jenis_kelamin">
                    <option value="laki-laki">Laki - Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <button type="submit" name="submit">Submit</button>
            </td>
        </tr>

    </table>
</form>

</body>
</html>
