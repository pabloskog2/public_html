<?php
session_start();
require_once("root_adm/adm_R.php");
require_once("validador/fx.php");
	
	
if ($_POST['minombre'] == "" || $_POST['miemail'] == "" || $_POST['mitelefono'] == "" || $_POST['mimensaje'] =="") {
    
}
else if ($_POST['minombre'] != "" && $_POST['miemail'] != "" && $_POST['mitelefono'] != ""  && $_POST['mimensaje'] !="") {
    
envio_contacto($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5ZSHML5L');</script>
<!-- End Google Tag Manager -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Colores de Barón</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilo.css">
	


<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1233657463732294');
fbq('track', 'PageView');
fbq('track', 'CompleteRegistration');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1233657463732294&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->



</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZSHML5L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php include 'include/nav.php' ?>
	
	<div class="white text-center curba">
		<div class="container-xs">
			<h1>Gracias por contactarnos!</h1><br>
<p>Pronto nos comunicaremos contigo.
</p><br>

		</div>
	</div>





<div class="white" style="padding: 0;">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3344.6175625523965!2d-71.6039135848113!3d-33.040204680893375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689e0c8d425eca9%3A0x713c2197cece45a5!2sTocornal%20125%2C%20Valpara%C3%ADso!5e0!3m2!1ses!2scl!4v1624477368007!5m2!1ses!2scl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>



	<?php include 'include/footer.php' ?>	
</body>
</html>

<?php
}

?>