<?php     
    session_start();     
    if (!$_SESSION['isLogin']) {         
        header("location: ../page/loginPage.php");     
    }else {         
        include('../db.php');     
    }     
    echo '         
        <!Doctype html>         
        <html lang="en">             
            <head>                 
                <!-- Required meta tags -->                 
                <meta charset="utf-8">                 
                <meta name="viewport" content="width=device-width, initial-scale=1">                 
                <!-- Bootstrap CSS -->                 
                <link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
crossorigin="anonymous">                 
                <link rel="stylesheet" href="./style.css">                 
                <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                 
                <link rel="preconnect" href="https://fonts.googleapis.com">                 
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>                 
                <link 
href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">                 
                <title>Dashboard!</title> 
 
                <style>                         
                    *{
                        font-family: "Poppins";                         
                    }                         
                    .side-bar {                             
                        width: 260px;                             
                        background-color: #D40013;                             
                        min-height: 100vh;                         
                    }                         
                    a {                             
                        padding-left: 10px;                             
                        font-size: 13px;                             
                        text-decoration: none;                             
                        color: white;                         
                    }                         
                    .menu i {                             
                        padding-left: 20px;                         
                    }                         
                    .menu .content-menu {                             
                        padding: 9px 7px;                         
                    } 
 
                    .isActive {                             
                        background-color: #071853 !important;                             
                        border-right: 8px solid #010E2F;                         
                    }                         
                    i{                             
                        color:white;                         
                    } 
                    </style>             
                </head> 
 
                <body>                 
                    <aside >                     
                        <div class="d-flex">                         
                            <div class="side-bar">                             
                            <h2 class="text-light text-center pt-2">P3L</h2>                             
                            <hr>                             
                            <div class="menu">                                 
                                <div class="content-menu" >                                     
                                    <i class="fa fa-dashboard"></i>                                     
                                    <a href="./dashboardPage.php" style="font-weight:600" >Dashboard</a>                                 
                                </div>                                 
                                <div class="content-menu " >                                     
                                    <i class="fa fa-hand-paper-o "></i>                                     
                                    <a href="./listInstrukturPage.php" style="font-weight:600">List Instruktur</a>                                 
                                </div>
                                <div class="content-menu " >                                     
                                    <i class="fa fa-address-card "></i>                                     
                                    <a href="./listMemberPage.php" style="font-weight:600">List Member</a>                                 
                                </div>  
                                <div class="content-menu " >                                     
                                    <i class="fa fa-list "></i>                                     
                                    <a href="./listJadwalPage.php" style="font-weight:600">List Jadwal</a>                                 
                                </div> 
                                <div class="content-menu " >                                     
                                    <i class="fa fa-envelope-open "></i>                                     
                                    <a href="./listIzinPage.php" style="font-weight:600">List Izin</a>                                 
                                </div> 
                                <div class="content-menu " >                                     
                                    <i class="fa fa-envelope "></i>                                     
                                    <a href="./listPresensiKPage.php" style="font-weight:600">List Presensi Kelas</a>                                 
                                </div>
                                <div class="content-menu " >                                     
                                    <i class="fa fa-envelope "></i>                                     
                                    <a href="./listPresensiGPage.php" style="font-weight:600">List Presensi Gym</a>                                 
                                </div>
                                <div class="content-menu " >                                     
                                    <i class="fa fa-spinner "></i>                                     
                                    <a href="./aktivasiPage.php" style="font-weight:600">Aktivasi Paket(const.)</a>                                 
                                </div>
                                <div class="content-menu " >                                     
                                    <i class="fa fa-spinner "></i>                                     
                                    <a href="./depositUPage.php" style="font-weight:600">Deposit Uang(const.)</a>                                 
                                </div>
                                <div class="content-menu " >                                     
                                    <i class="fa fa-spinner "></i>                                     
                                    <a href="./depositKPage.php" style="font-weight:600">Deposit Kelas(const.)</a>                                 
                                </div>      
                                <div class="content-menu " >                                     
                                    <i class="fa fa-envelope-open "></i>                                     
                                    <a href="./laporanPPage.php" style="font-weight:600">Laporan Pendapatan Bulanan</a>                                 
                                </div>
                                <div class="content-menu " >                                     
                                    <i class="fa fa-envelope-open "></i>                                     
                                    <a href="./laporanKPage.php" style="font-weight:600">Laporan Kelas Bulanan</a>                                 
                                </div>   
                                <div class="content-menu " >                                     
                                    <i class="fa fa-envelope-open "></i>                                     
                                    <a href="./laporanGPage.php" style="font-weight:600">Laporan Gym Bulanan</a>                                 
                                </div>           
                                <div class="content-menu " >                                     
                                    <i class="fa fa-envelope-open "></i>                                     
                                    <a href="./laporanIPage.php" style="font-weight:600">Laporan Instruktur Bulanan</a>                                 
                                </div>  
                                <div class="content-menu " >                                     
                                    <i class="fa fa-sign-out"></i>                                     
                                    <a href="../process/logoutProcess.php" style="font-weight:600">&nbspLogout</a>                                 
                                </div>                                 
                                <hr>                             
                            </div>                         
                        </div>  
    ' 
?> 