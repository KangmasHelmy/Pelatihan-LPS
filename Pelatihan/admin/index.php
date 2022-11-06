<html>
    <head>
        <title>Membuat Login Dengan PHP dan MySQLi </title>
    </head>
    <body>
        <h2>Halaman Admin</h2>
        <br/>
        <!– cek apakah sudah login –>
        <?php
        session_start();
        if($_SESSION['status']!="login"){
        header("location:../login.php?pesan=belum_login");
        }
        ?>
        <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
        <h4>Master Data</h4>
        <a href="dosen"><button>Data Dosen</button></a>||
        <a href="mahasiswa"><button>Data Mahasiswa</button></a>||
        <a href="matakuliah"><button>Data Matakuliah</button></a>||
        <a href="semester"><button>Data Semester</button></a>
        <br/>
        <h4>Transaksi</h4>
        <a href="jadwal"><button>BUAT JADWAL</button></a>||

        <a href="krs"><button>KRS MAHASISWA</button></a>

        <h4>Pengaturan</h4>
        <a href="user"><button>Kelola Data User</button></a>
        <br/>
        <br/>
        <a href="logout.php">LOGOUT</a>
    </body>
</html>