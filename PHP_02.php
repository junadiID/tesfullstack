<?php 

$message = "";

function reverseString($string) {
    $length = 0;
    while (isset($string[$length])) {
        $length++;
    }
    $reversed = '';
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }
    return $reversed;
}


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

     $dataLogin =  reverseString($username);

     if($password === $dataLogin){
        $message = "Login Berhasil!";
     } else{
        $message = "Login Gagal!";
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

<form method="POST">
    <i class="pesan"><?= $message; ?></i>
    <table>
        <tr>
            <td><label for="nama">Username </label></td>
            <td><input type="text" id="username" name="username"></td>
        </tr>
        <tr>
            <td><label for="alamat">Password </label></td>
            <td><input type="text" id="password" name="password"></td>
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
