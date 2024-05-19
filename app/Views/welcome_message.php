<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <style>
        /* CSS untuk body */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('/library/univ.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        /* CSS untuk navbar */
        .navbar {
            background-color: #ff7f00;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1;
        }

        .navbar a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .navbar a:hover {
            background-color: #ff9933;
        }

        .content {
            margin-top: 60px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        /* Login section styles */
        .login-section {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        .login-section input[type="text"],
        .login-section input[type="password"] {
            width: 100px;
            padding: 5px;
            margin-right: 5px;
            display: none;
        }

        .login-section input[type="submit"] {
            padding: 5px 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .login-section input[type="submit"]:hover {
            background-color: #555;
        }

        /* CSS untuk footer navbar */
        .footer-navbar {
            background-color: #333;
            overflow: hidden;
            position: fixed;
            bottom: 0;
            width: 100%;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        .footer-navbar p {
            margin: 0;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="/pegawai">Akademik</a>
        <a href="/dosen">Dosen</a>
        <a href="/mahasiswa">Mahasiswa</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h2>Walcome To Our website</h2>
        <p>Universitas Pribumi Asli.</p>
    </div>

    <!-- Login Section -->
    <div class="login-section">
        <form action="/login" method="post">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit" value="Login">
        </form>
    </div>

    <!-- Footer Navbar -->
    <div class="footer-navbar">
        <p>&copy; 2024 - Copy Right Universitas Pribumi Asli</p>
    </div>

    <!-- Script for debugging -->
    <script>
        window.onload = function() {
            var img = new Image();
            img.src = '/library/univ.jpg';
            img.onload = function() {
                console.log("Image loaded successfully");
            };
            img.onerror = function() {
                console.log("Error loading image");
            };
        };
    </script>

</body>

</html>