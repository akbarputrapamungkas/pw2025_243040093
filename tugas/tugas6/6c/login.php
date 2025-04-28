<?php
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {


    // cek username atau password
    if ($_POST["username"] == "admin" && $_POST["password"] == "12345") {
        // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah tampilkan pesan kesalahan
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url('img/bg001.jpg');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }



        .container {
            width: 420px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(5px);
            border-radius: 10px;
            padding: 30px 40px;
            text-align: center;


        }

        .container h1 {
            margin-bottom: 20px;
            font-size: 2rem;

        }

        ul {
            list-style: none;
        }

        ul li {
            margin-bottom: 10px;
            font-size: 1.3rem;
        }

        ul li label {
            margin-bottom: 10px;
        }

        ul input {
            width: 100%;
            height: 35px;
            border-radius: 20px;
            border: none;
            padding-left: 10px;
            margin-top: 10px;
        }

        button {
            width: 60%;
            height: 35px;
            background: #fff;
            border: none;
            border-radius: 20px;
            margin-top: 20px;
        }

        .error {
            text-align: center;
            color: red;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login Admin</h1>
        <div class="error">
            <?php if (isset($error)) : ?>
                <p>username atau password salah</p>
            <?php endif; ?>
        </div>

        <ul>
            <form action="" method="post">
                <li>
                    <label for="username">username :</label>
                    <input type="text" name="username" placeholder="masukan username" id="username">
                </li>
                <li>
                    <label for="password">password :</label>
                    <input type="password" name="password" placeholder="masukan password" id="password">
                </li>
                <li>
                    <button type="submit" name="submit">Login</button>
                </li>
            </form>
        </ul>
    </div>

</body>

</html>