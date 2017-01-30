<?php 

    include('lib/qrlib.php');  
     
    $codeContents = 'www.facebook.com'; 
     
    // we need to generate filename somehow,  
    // with md5 or with database ID used to obtains $codeContents... 
    $fileName = md5($codeContents).'.png'; 
     
    $pngAbsoluteFilePath = 'codes/'.$fileName; 
     
    // generating 
    if (!file_exists($pngAbsoluteFilePath)) { 
        QRcode::png($codeContents, $pngAbsoluteFilePath, QR_ECLEVEL_L, 4); 
    }
     
    // displaying 
    echo '<img src="'.$pngAbsoluteFilePath.'" />'; 
    
	?>