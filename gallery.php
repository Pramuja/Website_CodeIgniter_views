<!DOCTYPE html>
<html lang="en">
<head>
    <title>Galeri</title>
    <style>
        .container
{
    width: 1280px;
    margin: 70px auto 0;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}
.container .box
{
    width: 300px;
    height: 300px;
    margin: 10px;
    box-sizing: border-box;
    display: inline-block;
}
.container .box .imgBox
{
    position: relative;
    z-index: -1;
    overflow: hidden;
}
.container .box .imgBox img 
{
    max-width: 100%;
    height: 300px;
    transition: transform 2s;
}
.container .box:hover .imgBox img 
{
    transform: scale(1.2)
}
.container .box .details 
{
    position: absolute;
    top: 10px;
    left: 10px;
    bottom: 10px;
    right: 10px;
    font-family: sans-serif;
    text-align: center;
}
    </style>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style2.css">
</head>
<body style="margin: 0; padding: 0; font-family: 'Century Gothic', sans-serif; background-color: 
#ededed; text-align: center;">
<header class="ob">
        <div class="atas">
            <div id="logo"><h1 style="color: #cc0099; font-family: sans-serif;">Pramuja</h1></div>
            <nav>
                <ul>
                    <li><a href="<?=base_url()?>index.php/welcome/dashboard/Angga/Pariwisata">Home</a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/profil">MyProfil</a></li>
                </ul>
            </nav>
        </div>
    </header>
<section class="content">
        <h1>Koleksi foto tempat wisata</h1>
        <div class="container">
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/mountain.jpeg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/beach.jpeg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/goldengate.jpeg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/berlin.jpeg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/africa.jpeg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/sydney.jpeg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/thailand.jpeg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/venice.jpeg" alt="">
                </div>
            </div>
        </div>
    
</body>
</html>