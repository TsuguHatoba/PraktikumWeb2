<?php
session_start();


function GetNama($pdo, $nomor_member)
{
    $sql = "SELECT nama_member FROM member WHERE nomor_member = $nomor_member";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $member = $statement->fetch(PDO::FETCH_OBJ);
    $pdo = null;
    return $member;
}
function CekMember($pdo, $nomor_member)
{
    $sql = "SELECT nomor_member FROM member WHERE nomor_member=$nomor_member";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $member = $stmt->fetch(PDO::FETCH_OBJ);
    $pdo = null;
    if ($member == null) {
        header('Location: ErrorPage.php');
        exit();
    }
}
require 'Koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Perpus</title>
</head>

<body background="bg.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid" style="background-image: url('bg.jpg')">
            <a class="navbar-brand" href="index.php">Perpus</a>
            <a class="text-primary" href="index.php"><?php
                                                        if ($_SESSION['NomorMember'] == "Guest")
                                                            echo "Guest";
                                                        else
                                                            echo GetNama($connection, $_SESSION['NomorMember'])->nama_member; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Member.php">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Buku.php">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Peminjaman.php">Peminjaman</a>
                    </li>
                    <li>
                        <a class="nav-link" href="FormLogin.php">Log Out</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="Member.php">Member</a></li>
                            <li><a class="dropdown-item" href="Buku.php">Buku</a></li>
                            <li><a class="dropdown-item" href="Peminjaman.php">Peminjaman</a></li>
                            <li><a class="dropdown-item" href="FormLogin.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <form class="d-flex ">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
</body>

</html>