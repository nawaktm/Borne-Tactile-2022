<?php
echo '
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="main.js">

    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="main.css">

</head>
<body>

<div id="flip">
    <span id="navbutton" class="nav_button"><i class="fas fa-bars"></i></span>
</div>
<div id="panel">
    <ul>
        <li><a href="#qr">Accueil</a></li>
        <li><a href="#generateur">Générateur QRCodes</a></li>
        <li><a href="#">Se Connecter</a></li>
        <li><a href="#">Portfolio Festival</a></li>
        <li><a href="#">Contacter le festival</a></li>
    </ul>
</div>
<div id="qr">
    <img src="qrcode1site.png" alt="qr code accueil"/>

</div>
<div id="generateur">
    <label type="text" name="Texte QR Code" >Copier URL</label> <input type=text id="QRC" > <br>
    <label type="text" name="Générer"></label> <a type="button" href="#popupqrcode" onclick="QR();">générer</a><br>
    <!-- <label type="text" name="Ajouter la dimension">Dimension <input type=text id="Dim"></label> choix des dimensions-->



    <div class="popover" id="popupqrcode">
    <div class="content">
        <a href="#" class="close"></a>
        <div class="nav">

                <div class="nav_list_item">             <!-- mise en page du qr code -->
                    <h1>Voici votre qr code</h1>
                </div>
                <div class="nav_list_item">

                    
                    <img src="" id="image"  > <br>
                
                    <input type="text" id="url"> <br>
                </div>


        </div>
    </div>
</div>




</body>
</html>'
?>