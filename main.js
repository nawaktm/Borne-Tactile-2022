$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
        const navbutton = '#navbutton';
        $(navbutton).click(() => { //Quand on clique sur l'id navbutton
            if(!$(navbutton).hasClass('actived')) { //on verfie si il a la classe actived
                $(navbutton).addClass('actived') //on ajoute la classe actived
            } else {
                $(navbutton).removeClass('actived') //on retire la classe actived
            }
        });
    });
});
function QR() {
   var Texte = document.getElementById("QRC").value;
  //  var xo = document.getElementById("Dim").value;
    var url = "http://chart.googleapis.com/chart?&chs=" + 500 + "x" + 500 + "&cht=qr&chl=" + Texte + "&choe=UTF-8";
    document.getElementById("url").value = url;
    document.getElementById("image").src = url;
}
    /*function retirerIframe(){
    var iframe_url = $('#lien').attr('src');
    $('body').append(iframe_url);
    $('#lien').remove();
   */



