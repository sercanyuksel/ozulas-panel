<?php



function get_title($path){
	switch($path){
					case '/cems/index.php';
					return 'Anasayfa';
					break;

					case '/cems/hakkimizda.php';
					return 'Hakkımızda';
					break;

					case '/cems/iletisim.php';
					return 'İletişim';
					break;

					case '/cems/hizmetler.php';
					return 'Hizmetler';
					break;

					case '/cems/teklif.php';
					return 'Teklif';
					break;

					default;
					return 'Anasayfa';
					break;
				  }
}
function guvenlik($gelen2){

$zararli2= array("&",'script','SCRIPT','Script','script','object','OBJECT','Object','object','applet','APPLET','Applet','applet','embed','EMBED','Embed','embed','event','EVENT','Event','event','document','DOCUMENT','Document','document','cookie','COOKIE','Cookie','cookie','form','FORM','Form','form','ON','On','on','OR','Or','or','document.cookie','javascript:','vbscript:','SELECT','DROP',';','--','INSERT','UNION','xp_','DELETE','Delete','delete','<','>','^','"', "'", ' \"' , " \'");

$yararli2 = array('&amp;','&#115cript','&#083CRIPT','&#083cript','&#083cript','&#111bject','#079BJECT','&#079bject','&#079bject','&#097pplet','&#065PPLET','&#065pplet','&#065pplet','&#101mbed','&#069MBED','&#069mbed','&#069mbed','&#101vent','&#069VENT','&#069vent','&#069vent','&#100ocument','&#068OCUMENT','&#068ocument','&#068ocument','&#099ookie','&#067OOKIE','&#067ookie','&#067ookie','&#102orm','&#0700RM','&#070orm','&#070orm','&#079N','&#079n','&#111n','&#079R','&#079r','&#111r','&#068ocument.cookie','javascript','vbscript','&#83elect','&#68rop','&#59','&#45-','&#73nsert','&#85nion','&#120p&#95','&#68elete','&#68elete','&#68elete','','','','?','?' , '?' , '?');
$giden2 = str_replace($yararli2,$zararli2,$gelen2);
return $giden2;
}
/*GÜVENLİK FONKSİYONU BİTİŞ*/

/*GÜVENLİK FONKSİYONU BAŞLAR*/
function PaypalTR($gelen2){

$zararli2= array('Ç','Ğ','İ','Ö','Ş','Ü','ç','ğ','ı','ö','ş','ü');

$yararli2 = array('C','G','I','O','S','U','c','g','i','o','s','u');
$giden2 = str_replace($zararli2,$yararli2,$gelen2);
return $giden2;
}
/*GÜVENLİK FONKSİYONU BİTİŞ*/

/* IP ADRESİ FONKSİYONU BAŞLAR*/
function GetIP(){
    if(getenv("HTTP_CLIENT_IP")) {
        $ip = getenv("HTTP_CLIENT_IP");
    } elseif(getenv("HTTP_X_FORWARDED_FOR")) {
        $ip = getenv("HTTP_X_FORWARDED_FOR");
        if (strstr($ip, ',')) {
            $tmp = explode (',', $ip);
            $ip = trim($tmp[0]);
        }
    } else {
        $ip = getenv("REMOTE_ADDR");
    }
    return $ip;
}
/* IP ADRESİ FONKSİYONU BİTİŞ */

/*TÜRKÇE KARAKTER FONKSİYONU BAŞLAR*/
function turkceyap($tcye){

$tcgelen = array('Ç','Ğ','İ','Ö','Ş','Ü','ç','ğ','ı','ö','ş','ü','ç','"',' ');
$tcgiden = array('c','g','i','o','s','u','c','g','i','o','s','u','c','-','-');
$tcsonuc = str_replace($tcgelen,$tcgiden,$tcye);
return $tcsonuc;
}
/*TÜRKÇE KARAKTER FONKSİYONU BİTİŞ*/

/*RESİM UPLOAD FONKSİYONU BAŞLAR*/
function resimupload($kaynak,$gklasor,$tur,$isim,$en){

$klasor= "../".$gklasor; // Hedef klasörümüz  
$yukle= $klasor.basename($isim);  
if(move_uploaded_file($kaynak,$yukle)){  
$dosya= $klasor.$isim;
if 	($tur 	 == "image/gif"  ) { $uzantis = ".gif"; $resim=imagecreatefromgif($dosya); }
elseif ($tur == "image/jpeg" ) { $uzantis = ".jpg"; $resim=imagecreatefromjpeg($dosya);}
elseif ($tur == "image/pjpeg") { $uzantis = ".jpg"; $resim=imagecreatefromjpeg($dosya);}
elseif ($tur == "image/png"  ) { $uzantis = ".png"; $resim=imagecreatefrompng($dosya);}
else{header('Location:index.php');}
$boyutlar=getimagesize($dosya); // Resmimizin boyutlarını öğreniyoruz  
$resimorani=$en/$boyutlar[0]; // Resmi küçültme/büyütme oranımızı hesaplıyoruz..  
$yeniyukseklik=$resimorani*$boyutlar[1]; // Bulduğumuz orandan yeni yüksekliğimizi hesaplıyoruz..  
$yeniresim=imagecreatetruecolor($en,$yeniyukseklik); // Oluşturulan boş resmi istediğimiz boyutlara getiriyoruz..  
imagecopyresampled($yeniresim, $resim, 0, 0, 0, 0, $en, $yeniyukseklik, $boyutlar[0], $boyutlar[1]);  
// Yüklenen resmimizi istediğimiz boyutlara getiriyoruz ve boş resmin üzerine kopyalıyoruz..  
$hdosya = $gklasor.rand(0,9999).'_'.turkceyap($isim);
$hedefdosya= "../".$hdosya; // Yeni resimin kaydedileceği konumu belirtiyoruz..
imagejpeg($yeniresim,$hedefdosya,100); // Ve resmi istediğimiz konuma kaydediyoruz..
//Kaydettiğimiz yeni resimin yolunu $hedefdosya değişkeni taşımaktadır..  
chmod ($hedefdosya, 0755); // chmod ayarını yapıyoruz dosyamızın..  
unlink($yukle);
}else{
echo '
			<div class="alert alert-error">
				Beklenmeyen bir hata oluştu. Yönlendiriliyorsunuz...
			</div>
';
}
return($hdosya);
}
/*RESİM UPLOAD FONKSİYONU BİTİŞ*/

/*ICON UPLOAD FONKSİYONU BAŞLAR*/
function iconupload($kaynak,$gklasor,$isim,$en){
	$hdosya	= $gklasor.rand(0,9999).'_'.turkceyap($isim);
	$yukle	= "../".$hdosya;

	if(move_uploaded_file($kaynak,$yukle)){
	list($gen, $yük) = getimagesize($filename);
	$oran=$en/$gen;
	$yenigen = $en;
	$yeniyük = $yük*$oran;
	$yeniresim  = imagecreatetruecolor($yenigen, $yeniyük);
	$kaynak1 = imagecreatefromjpeg($dosya);
		return($hdosya);
	}else{
	echo '
				<div class="alert alert-error">
					Beklenmeyen bir hata oluştu. Yönlendiriliyorsunuz...
				</div>
	';
		return("");
	}
}
/*ICON UPLOAD FONKSİYONU BİTİŞ*/

/*SEO BAŞLIK KODLARI BAŞLAR*/
function seobaslik($deger) { 
$turkce=array("ş","Ş","ı","(",")","'","ü","Ü","ö","Ö","ç","Ç"," ","/","*","?","ş","Ş","ı","ğ","Ğ","İ","ö","Ö","Ç","ç","ü","Ü"); 
$duzgun=array("s","S","i","","","","u","U","o","O","c","C","-","-","-","","s","S","i","g","G","I","o","O","C","c","u","U"); 
$deger=str_replace($turkce,$duzgun,$deger); 
$deger = preg_replace("@[^A-Za-z0-9\-_]+@i","",$deger); 
$deger = strtolower($deger);
return $deger; 
}
/*SEO BAŞLIK KODLARI BİTİŞ*/

/*OZET HAZIRLA KODLARI BAŞLAR */
function ozetHazirla($deger,$limit){ 
$deger = stripslashes($deger);
$deger = strip_tags($deger);
$deger = trim($deger);
$deger = mb_substr($deger,0,$limit,'UTF-8');
return $deger;
}
/*OZET HAZIRLA KODLARI BİTİŞ */

?>