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
                }
                        
                $result = $mysqli->query("SELECT * FROM pages WHERE id='$id'");
                $myrow = $result->fetch_assoc();
                
                if (isset($_POST['title'])) {
                        $title = $mysqli->real_escape_string($_POST['title']); 
                        if ($title == $myrow['title']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET title='$title' WHERE id='$id'");
                        }
                }
                if (isset($_POST['meta_d'])) {
                        $meta_d = $mysqli->real_escape_string($_POST['meta_d']); 
                        if ($meta_d == $myrow['meta_d']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET meta_d='$meta_d' WHERE id='$id'");
                        }
                }
                        if (isset($_POST['meta_k'])) {
                        $meta_k = $mysqli->real_escape_string($_POST['meta_k']); 
                        if ($meta_k == $myrow['meta_k']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET meta_k='$meta_k' WHERE id='$id'");
                        }
                }
				if (isset($_POST['text1'])) {
                        $text1 = $mysqli->real_escape_string($_POST['text1']); 
						echo ($text1);
                        if ($text1 == $myrow['text1']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET text1='$text1' WHERE id='$id'");
                        }
				}
				if (isset($_POST['text2'])) {
                        $text2 = $mysqli->real_escape_string($_POST['text2']); 
						echo ($text2);
                        if ($text2 == $myrow['text2']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET text2='$text2' WHERE id='$id'");
                        }
				}
				if (isset($_POST['text3'])) {
                        $text3 = $mysqli->real_escape_string($_POST['text3']); 
						echo ($text3);
                        if ($text3 == $myrow['text3']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET text3='$text3' WHERE id='$id'");
                        }
				}
				if (isset($_POST['text4'])) {
                        $text4 = $mysqli->real_escape_string($_POST['text4']); 
						echo ($text4);
                        if ($text4 == $myrow['text4']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET text4='$text4' WHERE id='$id'");
                        }
				}
				if (isset($_POST['text5'])) {
                        $text5 = $mysqli->real_escape_string($_POST['text5']); 
						echo ($text5);
                        if ($text5 == $myrow['text5']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET text5='$text5' WHERE id='$id'");
                        }
				}
				if (isset($_POST['text6'])) {
                        $text6 = $mysqli->real_escape_string($_POST['text6']); 
						echo ($text6);
                        if ($text6 == $myrow['text6']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET text6='$text6' WHERE id='$id'");
                        }
				}
				if (isset($_POST['text7'])) {
                        $text7 = $mysqli->real_escape_string($_POST['text7']); 
						echo ($text7);
                        if ($text7 == $myrow['text7']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET text7='$text7' WHERE id='$id'");
                        }
				}
				if (isset($_POST['text8'])) {
                        $text8 = $mysqli->real_escape_string($_POST['text8']); 
						echo ($text8);
                        if ($text8 == $myrow['text8']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET text8='$text8' WHERE id='$id'");
                        }
				}
				if (isset($_POST['text9'])) {
                        $text9 = $mysqli->real_escape_string($_POST['text9']); 
						echo ($text9);
                        if ($text9 == $myrow['text9']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET text9='$text9' WHERE id='$id'");
                        }
				}
				if (isset($_POST['text10'])) {
                        $text10 = $mysqli->real_escape_string($_POST['text10']); 
						echo ($text10);
                        if ($text10 == $myrow['text10']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET text10='$text10' WHERE id='$id'");
                        }
				}
				if (isset($_POST['text11'])) {
                        $text11 = $mysqli->real_escape_string($_POST['text11']); 
						echo ($text11);
                        if ($text11 == $myrow['text11']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET text11='$text11' WHERE id='$id'");
                        }
				}
				if (isset($_POST['text12'])) {
                        $text12 = $mysqli->real_escape_string($_POST['text12']); 
						echo ($text12);
                        if ($text12 == $myrow['text12']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET text12='$text12' WHERE id='$id'");
                        }
				}
				if (isset($_POST['text13'])) {
                        $text13 = $mysqli->real_escape_string($_POST['text13']); 
						echo ($text13);
                        if ($text13 == $myrow['text13']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET text13='$text13' WHERE id='$id'");
                        }
				}
				if (isset($_POST['text14'])) {
                        $text14 = $mysqli->real_escape_string($_POST['text14']); 
						echo ($text14);
                        if ($text14 == $myrow['text14']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET text14='$text14' WHERE id='$id'");
                        }
				}
				if (isset($_POST['text15'])) {
                        $text15 = $mysqli->real_escape_string($_POST['text15']); 
						echo ($text15);
                        if ($text15 == $myrow['text15']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET text15='$text15' WHERE id='$id'");
                        }
				}
				if (isset($_POST['text16'])) {
                        $text16 = $mysqli->real_escape_string($_POST['text16']); 
						echo ($text16);
                        if ($text16 == $myrow['text16']){
                        echo("Текст збігся");
                        }
                        else {
                                echo("Текст треба занести в базу");
                                $mysqli->query("UPDATE pages SET text16='$text16' WHERE id='$id'");
                        }
				}
                ?>
    </body>
</html>
<script language="JavaScript" type="text/javascript">
		<!-- 
		location="../admin/<?php 
		$result = $mysqli->query("SELECT page FROM pages WHERE id='$id'");
        $myrow = $result->fetch_assoc();
		if ($myrow['page'] == "news"){
		echo ('anews&events');	
			
		}else {
		echo ('a'.$myrow['page']);
		}
		?>.php" 
		//--> 
</script>