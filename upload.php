<?php
/*****************************************************************
Author : Mr. Khwanchai Kaewyos (LookHin)
Source Code On Github : https://github.com/LookHin/instagram-photo-video-upload-api
Rewrite Code From : https://github.com/mgp25/Instagram-API

Recode by Thoriq Al Mahdi
*****************************************************************/

include_once("instagram-api.php");


function instagram($jumlah, $username, $pw, $caption, $wait){

for($i=0; $i<$jumlah;) {
           	


// Akun dan data upload
$obj = new InstagramUpload();
$obj->Login("$username", "$pw");
$obj->UploadPhoto("thoriq.jpg", "$caption");
$i++;

// Delay
sleep($wait);


// Biar rapih aja
$d = date("Y");
if ($d < "2020") {
	echo "\r\n";
    echo '['.$i.'/'.$jumlah.'] => Sukses upload !! - tunggu delay';
}
  }    
    } 



// Print 
print "\n\n";     
echo "================================";
echo "\r\n";
echo '   Instagram Photos Uploader';
echo "\r\n";
echo '      Thoriq Al Mahdi';
echo "\r\n";
echo "================================";

print "\n\n";
echo "Username    : ";
$username = trim(fgets(STDIN));

echo "Password    : ";
$pw = trim(fgets(STDIN));

echo "Jumlah Foto : ";
$jumlah = trim(fgets(STDIN));

echo "Caption     : ";
$caption = trim(fgets(STDIN));

echo "Delay (s)   : ";
$wait = trim(fgets(STDIN));

$execute = instagram($jumlah, $username, $pw, $caption, $wait);
print $execute;

print "\n\n";
print "Your Photos Have Been Uploaded\n";


?>