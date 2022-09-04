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
        if (isset($_POST['description'])) { 
        $description = $_POST['description'];   
        if (isset($description)) {
                        $id = $description; 
                        echo($id);
                if(isset($_POST['delete'])){
                echo ("del");
                $path_directory = '../images/hairs/';
                $result = $mysqli->query("SELECT * FROM hairsfoto WHERE id='$id'");
                $myrow = $result->fetch_assoc();
                if ($id == $myrow['id']){ 
                echo "yes-";
                echo $myrow['mini'];
                echo $myrow['big'];
                $mysqli->query("DELETE FROM hairsfoto WHERE id='$id'");
                $old = $path_directory.$myrow['mini'].'.jpg';
                $old2 = $path_directory.$myrow['big'].'.jpg';
                echo $old.$old2;
                unlink ($old);  
                unlink ($old2); 
		?>
				<script language="JavaScript" type="text/javascript">
					<!-- 
					location="../admin/ahairs.php" 
					//--> 
				</script>
		<?php 
        exit;
                }
                }
                }
        }
        if (isset($_POST['description'])) { 
        $description = $_POST['description'];
        if ($description == '') { 
         unset($description);
         } 
         }
         if (empty($_FILES['imgupload']['name']))
        {
        echo ("nofiledirectory");
        }
        else 
        {
        $path_directory = '../images/hairs//';
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
        // якщо вертикальне фото робим 1024хХХХХ
                         if ($w_src < $h_src) {
                                        $w = 800;
                                        $h = round($h_src*$w/$w_src);
                                        $w2 = 640;
                                        $h2 = 425;
                         echo $w.$h.$w2.$h2;
                         $dest = imagecreatetruecolor($w,$h);
                         $dest2 = imagecreatetruecolor($w2,$h2);
                         imagecopyresampled($dest, $im, 0, 0, 0, 0, $w, $h, $w_src, $h_src);
                                 if(isset($_POST['center'])){
                                 imagecopyresampled($dest2, $im, 0, 0,
                                 0,
                                 round((max($w_src,$h_src)-min($w_src,$h_src))), 
                                 $w2, $w2, min($w_src,$h_src), min($w_src,$h_src)); 
                                 }
                                 else {
                                 imagecopyresampled($dest2, $im, 0, 0, 0, 0, $w2, $w2,
                 min($w_src,$h_src), min($w_src,$h_src));
                                 }
                         //imagecopyresampled($dest2, $im, 0, 0, 0, 0, $w2, $h2, $w_src, $h_src);
		}
                         if (($w_src > $h_src) or ($w_src == $h_src)) {
                                        $h = 800;
                                        $w = round($w_src*$h/$h_src);
                                        $w2 = 640;
                                        $h2 = 425;
                         echo $w.$h.$w2.$h2;
                         $dest = imagecreatetruecolor($w,$h);
                         $dest2 = imagecreatetruecolor($w2,$h2);
                         imagecopyresampled($dest, $im, 0, 0, 0, 0, $w, $h, $w_src, $h_src);
                         if(isset($_POST['center'])){
                                 imagecopyresampled($dest2, $im, 0, 0,
                                 round((max($w_src,$h_src)-min($w_src,$h_src))/2),
                                 round((max($w_src,$h_src)-min($w_src,$h_src))/2), 
                                 $w2, $w2, min($w_src,$h_src), min($w_src,$h_src)); 
                                 }
                                 else {
                                 imagecopyresampled($dest2, $im, 0, 0, 0, 0, $w2, $w2,
                 min($w_src,$h_src), min($w_src,$h_src));
                                 }
                         //imagecopyresampled($dest2, $im, 0, 0, 0, 0, $w2, $h2, $w_src, $h_src);
		}
                         $date=('www.victoria-visage.lutsk.ua'.time());		
                         $date2=('www.victoria-visage.lutsk.ua'.(time()+1));
        imagejpeg($dest, $path_directory.$date.".jpg");
        imagejpeg($dest2, $path_directory.$date2.".jpg");
        $fotoZ = $path_directory.$date.".jpg";
        $fotoZ2 = $path_directory.$date2.".jpg";
        $delfull = $path_directory.$filename; 
        unlink ($delfull);
                if (isset($description)) {
                        $id = $description; 
                        echo($id.$date);
                $result = $mysqli->query("SELECT * FROM hairsfoto WHERE id='$id'");
                $myrow = $result->fetch_assoc();
                if ($id == $myrow['id']){ 
                echo "yes-";
                echo $myrow['mini'];
                echo $myrow['big'];
                $mysqli->query("UPDATE hairsfoto SET mini='$date', big='$date2' WHERE id='$id'");
                $old = $path_directory.$myrow['mini'].'.jpg';
                $old2 = $path_directory.$myrow['big'].'.jpg';
                echo $old.$old2;
                unlink ($old);  
                unlink ($old2);         
                }
                        if ($id > $myrow['id']){ 
                $mysqli->query("INSERT INTO hairsfoto(id,mini,big) VALUES ('$id','$date','$date2')");
                }
                }}} 
                ?>
    </body>
</html>
<script language="JavaScript" type="text/javascript">
		<!-- 
		location="../admin/ahairs.php" 
		//--> 
</script>