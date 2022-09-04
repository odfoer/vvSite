<?php include '../blocks/reset.php';?>
<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta name="generator" content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php   
        if (isset($_POST['description'])) 
        { 
        $description = $_POST['description'];
        if ($description == '') 
        { 
         unset($description);} 
         }
         if (empty($_FILES['imgupload']['name']))
        {
        echo ("nofiledirectory");
        }
        else 
        {
        $path_directory = '../images/';
        echo ("OK");
        if(preg_match('/[.](JPG)|(jpg)|(jpeg)|(JPEG)|(gif)|(GIF)|(png)|(PNG)$/',$_FILES['imgupload']['name']))
                 {      
                        $filename = $_FILES['imgupload']['name'];
                        $source = $_FILES['imgupload']['tmp_name'];     
                        $target = $path_directory . $filename;
                        move_uploaded_file($source, $target);
                if(preg_match('/[.](GIF)|(gif)$/', $filename)) {
                $im = imagecreatefromgif($path_directory.$filename) ;
                }
                if(preg_match('/[.](PNG)|(png)$/', $filename)) {
                $im = imagecreatefrompng($path_directory.$filename) ;
                }       
                if(preg_match('/[.](JPG)|(jpg)|(jpeg)|(JPEG)$/', $filename)) {
            $im = imagecreatefromjpeg($path_directory.$filename); 
                }
        $w_src = imagesx($im);
        $h_src = imagesy($im); 
                        $w = $_POST['w'];
                        $h = $_POST['h']; 
                 $dest = imagecreatetruecolor($w,$h); 
                        if (($w_src == $w) and ($h_src == $h)){
                                imagecopyresampled($dest, $im, 0, 0, 0, 0, $w, $h, $w_src, $h_src); 
                        } else {
                 if ($w_src > $h_src) {
                                 if(isset($_POST['center'])){
                                 imagecopyresampled($dest, $im, 0, 0,
                                 round((max($w_src,$h_src)-min($w_src,$h_src))/2),
                                 round((max($w_src,$h_src)-min($w_src,$h_src))/1.5), 
                                 $w, $w, min($w_src,$h_src), min($w_src,$h_src)); 
                                 }
                                 else {
                                 imagecopyresampled($dest, $im, 0, 0, 0, 0, $w, $w,
                 min($w_src,$h_src), min($w_src,$h_src));
                                 }
                         }
                 if ($w_src < $h_src) {
                                 if(isset($_POST['center'])){
                                 imagecopyresampled($dest, $im, 0, 0,
                                 0,
                                 round((max($w_src,$h_src)-min($w_src,$h_src))), 
                                 $w, $w, min($w_src,$h_src), min($w_src,$h_src)); 
                                 }
                                 else {
                                 imagecopyresampled($dest, $im, 0, 0, 0, 0, $w, $w,
                 min($w_src,$h_src), min($w_src,$h_src));
                                 }
                         }
                 if ($w_src == $h_src) 
                 imagecopyresampled($dest, $im, 0, 0, 0, 0, $w, $w, $w_src, $w_src); 
                        }
			if(isset($_POST['radio'])){
				echo "You have selected :".$_POST['radio'];  //  Displaying Selected Value
			}
		
		$old = ($_POST['radio'].'.jpg');
        imagejpeg($dest, $path_directory.$old);
        $delfull = $path_directory.$filename; 
        unlink ($delfull);
        }
        else 
        {
        exit ("Аватар должен быть в формате <strong>JPG,GIF или PNG</strong>"); 
        }
        }
                
                
                       
                ?>
    </body>
</html>
<script language="JavaScript" type="text/javascript">
		<!-- 
		<?php
			if (($h == '420') or ($h == '852')){
			echo ("location='../admin/aabout.php'");
			} else {
			echo ("location='../admin/aindex.php'");
			}
			?>
		
		//--> 
</script>