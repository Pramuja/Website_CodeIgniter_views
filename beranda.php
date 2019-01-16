<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style2.css">
</head> 
<body style="margin: 0; padding: 0; ">
<div class="grid-container">
    <div class="left" style=" background-color:#f2f2f2;">
        <header class="ob">
            <div class="atas">
            <nav>
                <ul>
                    <li><a href="<?=base_url()?>index.php/welcome/dashboard/Angga/Pariwisata"><b>Home</b></a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/event"><b>Event</b></a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/gallery"><b>Gallery</b></a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/contact"><b>Contact</b></a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/profil"><b>MyProfil</b></a></li>
                </ul>
            </nav>
            </div>
        </header>
        <div class="main">
            <h1 align="center" style="color: #2929a3; text-align: left; font-size: 10.3mm; margin-top: 97px;
            margin-left: 12px; font-family: sans-serif;">Selamat Datang <?=$nama_lengkap?><br> 
            Ini adalah website <?= $portofolio?></h1>
            <p style="font-size: 20px; margin-left: 12px; margin-top: 39px;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Modi possimus facilis fugit vel tempora similique placeat 
            optio error corporis quaerat. Quas, fuga assumenda! Quidem 
            possimus veniam doloribus voluptates commodi suscipit.
            </p>
        </div>
    </div>
    <div class="right">
    </div>
</div>
</body>
</html>