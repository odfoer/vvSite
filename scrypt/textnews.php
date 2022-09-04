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
                $result = $mysqli->query("SELECT * FROM newstext");
                while ($myrow = $result->fetch_assoc()){
                        $i = $myrow['id'];
                echo ($i."<br>");
                        if (isset($_POST[$i])) {
                        $name = $mysqli->real_escape_string($_POST[$i]);     
                        if ($name == $myrow['text']){
                                echo("Текст збігся");
                                echo ($i.$name."<br>");
                                }
                                else {
                                        echo($i."Текст треба замінити в базі");
                                        $mysqli->query("UPDATE newstext SET text='$name' WHERE id='$i'");
                                }       
                                        if ($name == '') {
                                echo "null";
                                $mysqli->query("DELETE FROM newstext WHERE id='$i'");
                                        }
                        }
                }
                        $i++;
                        if (isset($_POST[$i])){
                        $name = $mysqli->real_escape_string($_POST[$i]);
                                if ($name <> '') {
								if (isset($_POST['theme'])){
								$theme = $_POST['theme'];}
                                
								echo ("insert".$i.$name.$theme);
                                $mysqli->query("INSERT INTO newstext (id,theme,text) VALUES ('$i','$theme','$name')");
                                }
                        }               
                ?>
    </body>
</html>
<script language="JavaScript" type="text/javascript">
		<!-- 
		location="../admin/anews&events_.php?theme=<?php if (isset($_POST['theme'])){$theme = $_POST['theme'];} echo $theme; ?>" 
		//--> 
</script>