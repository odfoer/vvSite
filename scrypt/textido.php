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
                $result = $mysqli->query("SELECT * FROM indexpageido");
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
                                        $mysqli->query("UPDATE indexpageido SET text='$name' WHERE id='$i'");
                                }       
                                        if ($name == '') {
                                echo "null";
                                $mysqli->query("DELETE FROM indexpageido WHERE id='$i'");
                                        }
                        }
                }
                        $i++;
                        echo $i;
                        if (isset($_POST[$i])) {
                        $name = $mysqli->real_escape_string($_POST[$i]);
                                if ($name <> '') {
                                echo ("insert".$i.$name);
                                $mysqli->query("INSERT INTO indexpageido (id,href,text) VALUES ('$i', '', '$name')");
                                }
                        }               
                ?>
    </body>
</html>
<script language="JavaScript" type="text/javascript">
		<!-- 
		location="../admin/aindex.php" 
		//--> 
</script>