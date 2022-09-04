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
		if (isset($_POST['id'])) {
                        $id = $_POST['id']; 
                        echo($id);
                
                        
                $resulttx = $mysqli->query("SELECT * FROM news WHERE id='$id'");
                $myrowtx = $resulttx->fetch_assoc();
                
                if (isset($_POST['data'])) {
                        $data = $mysqli->real_escape_string($_POST['data']); 
                        if ($data == $myrowtx['data']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE news SET data='$data' WHERE id='$id'");
                        }
                }
                if (isset($_POST['minitext'])) {
                        $minitext = $mysqli->real_escape_string($_POST['minitext']); 
                        if ($minitext == $myrowtx['minitext']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE news SET minitext='$minitext' WHERE id='$id'");
                        }
                }
				if (isset($_POST['theme'])) {
                        $theme = $mysqli->real_escape_string($_POST['theme']); 
                        if ($theme == $myrowtx['theme']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE news SET theme='$theme' WHERE id='$id'");
                        }
                }
				if (isset($_POST['texth1'])) {
                        $texth1 = $mysqli->real_escape_string($_POST['texth1']); 
                        if ($texth1 == $myrowtx['texth1']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE news SET texth1='$texth1' WHERE id='$id'");
                        }
                }
				}
				

        if (isset($_POST['description'])) { 
        $description = $_POST['description'];   
        if (isset($description)) {
                        $id = $description; 
                        echo($id);
                if(isset($_POST['delete'])){
                echo ("del");
                $path_directory = '../images/news/';
                $result = $mysqli->query("SELECT * FROM news WHERE theme='$theme'");
                $myrow = $result->fetch_assoc();
                if ($id == $myrow['id']){ 
                echo "yes-";
                echo $myrow['minifoto'];
                echo $myrow['bigfoto'];
                $mysqli->query("DELETE FROM news WHERE theme='$theme'");
				$resulttxdel = $mysqli->query("SELECT * FROM newstext WHERE theme='$theme'");
                $myrowtxdel = $resulttxdel->fetch_assoc();
				$mysqli->query("DELETE FROM newstext WHERE theme='$theme'");
				$old = $path_directory.$myrow['minifoto'].'.jpg';
                $old2 = $path_directory.$myrow['bigfoto'].'.jpg';
                echo $old.$old2;
                unlink ($old);  
                unlink ($old2); 
				$resulttxdel2 = $mysqli->query("SELECT * FROM newsgallery WHERE theme='$theme'");
                        while ($myrowtxdel2 = $resulttxdel2->fetch_assoc()){
						unlink ($path_directory.$myrowtxdel2['mini'].'.jpg');
						unlink ($path_directory.$myrowtxdel2['big'].'.jpg');
						}
				$mysqli->query("DELETE FROM newsgallery WHERE theme='$theme'");						
			
		?>
				<script language="JavaScript" type="text/javascript">
					<!-- 
					location="../admin/anews&events.php" 
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
        $path_directory = '../images/news/';
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
                                        $w = 640;
                                        $h = round($h_src*$w/$w_src);
                                        $w2 = 250;
                                        $h2 = 250;
                         echo $w.$h.$w2.$h2;
                         $dest = imagecreatetruecolor($w,$h);
                         $dest2 = imagecreatetruecolor($w2,$h2);
						 imagecopyresampled($dest, $im, 0, 0, 0, 0, $w, $h, $w_src, $h_src);
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
                                        $w = 640;
                                        $h = round($h_src*$w/$w_src);
                                        $w2 = 250;
                                        $h2 = 250;
                         echo $w.$h.$w2.$h2;
                         $dest = imagecreatetruecolor($w,$h);
                         $dest2 = imagecreatetruecolor($w2,$h2);
                         imagecopyresampled($dest, $im, 0, 0, 0, 0, $w, $h, $w_src, $h_src);
                         if(isset($_POST['center'])){
                                 imagecopyresampled($dest2, $im, 0, 0,
                                 0,
                                 0, 
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
                $result = $mysqli->query("SELECT * FROM news WHERE id='$id'");
                $myrow = $result->fetch_assoc();
                if ($id == $myrow['id']){ 
                echo "yes-";
                echo $myrow['minifoto'];
                echo $myrow['bigfoto'];
                $mysqli->query("UPDATE news SET minifoto='$date2', bigfoto='$date' WHERE id='$id'");
                $old = $path_directory.$myrow['minifoto'].'.jpg';
                $old2 = $path_directory.$myrow['bigfoto'].'.jpg';
                echo $old.$old2;
                unlink ($old);  
                unlink ($old2);         
                }
                        if ($id > $myrow['id']){
						$result = $mysqli->query("SELECT * FROM news WHERE id='$id'");
						$myrow = $result->fetch_assoc();
						$id = $mysqli->real_escape_string($id);
						$data = $mysqli->real_escape_string($_POST['data']);
						$minitext = $mysqli->real_escape_string($_POST['minitext']);
						//$theme = $mysqli->real_escape_string($_POST['theme']);
						$theme2 = ('newsANDevents'.$id);
						$texth1 = $mysqli->real_escape_string($_POST['texth1']);
                                echo ("insert".$id."||||".$minitext.$theme2);
                                $mysqli->query("INSERT INTO news(id,theme,minifoto,bigfoto,data,minitext,texth1) VALUES ('$id','$theme2','$date2','$date','$data','$minitext','$texth1')");
                                
                        }

						
                
                }
                }} 
                ?>
    </body>
</html>
<script language="JavaScript" type="text/javascript">
		<!-- 
		location="../admin/anews&events.php" 
		//--> 
</script>