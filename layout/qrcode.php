<?php
include('phpqrcode/qrlib.php');

session_start();
include_once("../classes/classes.class.php");
$id_p= $_SESSION['id'];
$c=utilisateurs::connexion();
if($c!=null){
$c=utilisateurs::connexion();
      
function strToHex($string){
    $hex='';
    for ($i=0; $i < strlen($string); $i++){
        $hex .= dechex(ord($string[$i]));
    }
    return $hex;
}
     
$identifiant=strToHex($id_p);
                    $day=date('d');
                    $heure=date('H-i');
                    $code='$heure.$identifiant.$day';
// how to save PNG codes to server
    
    $tempDir ='qrcodes/';
    
    $codeContents =$code;
    
    // we need to generate filename somehow, 
    // with md5 or with database ID used to obtains $codeContents...
    $fileName = '005_file_'.md5($codeContents).'.png';
     $_SESSION['filename']=$fileName;
    $pngAbsoluteFilePath = $tempDir.$fileName;
    $urlRelativeFilePath = $tempDir.$fileName;
    $_SESSION['url']= $urlRelativeFilePath;
    // generating
    if (!file_exists($pngAbsoluteFilePath)) {
        QRcode::png($codeContents, $pngAbsoluteFilePath);
        echo 'File generated!';
        echo '<hr />';
    } else {
        echo 'File already generated! We can use this cached file to speed up site on common codes!';
        echo '<hr />';
    }
    
    echo 'Server PNG File: '.$pngAbsoluteFilePath;
    echo '<hr />';
    
    // displaying
    echo '<img src="'.$urlRelativeFilePath.'" />';
}


?>