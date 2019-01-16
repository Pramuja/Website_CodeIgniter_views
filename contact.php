<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <style>
        .contact {
            font-size: 1cm; text-decoration: none;
            color: blanchhedalmond; padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.6s ease; font-family:sans-serif;
        }
        .contact :hover{
            background-color: tomato; color: black;
            border: 2px solid tomato; border-radius: 40px;
            transition-duration: 0.5s;
        }
        .icon
        {
            width: 50px;
        }
        td {
            font-size: 20px;
            font-family: sans-serif;
            color: white;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style2.css">
</head>
<body style="margin: 0; padding: 0; font-family: fantasy; background: linear-gradient(135deg,
#325adf 0%, #e753Of 100%); text-align: center">
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
    <div style="background-color: tomato; border-radius: 5px; width: 500px; height: 500px; margin-left: 400px;
    padding-top: 50px;">
        <h1>My Social media</h1>
        <table style="margin-left: 160px;">
            <tr>
                <td><a href="#"><img src="<?=base_url()?>assets/instagram.png" class="icon"></a></td>
                <td></td>
                <td>Instagram</td>
            </tr>
            <tr>
                <td><a href="#"><img src="<?=base_url()?>assets/facebook.png" class="icon"></a></td>
                <td></td>
                <td>Facebook</td>
            </tr>
            <tr>
                <td><a href="#"><img src="<?=base_url()?>assets/twitter.png" class="icon"></a></td>
                <td></td>
                <td>Twitter</td>
            </tr>
            <tr>
                <td><a href="#"><img src="<?=base_url()?>assets/whatsapp.png" class="icon"></a></td>
                <td></td>
                <td>Whatsapp</td>
            </tr>
            <tr>
                <td><a href="#"><img src="<?=base_url()?>assets/youtube.png" class="icon"></a></td>
                <td></td>
                <td>Youtube</td>
            </tr>
        </table>
    </div>
</body>
</html>