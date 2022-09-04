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
                $resultmainabout = mysql_query("SELECT id,text FROM abouttext",$db);
                while ($myrowmainabout = mysql_fetch_assoc($resultmainabout)){
                        $i = $myrowmainabout['id'];
                echo ($i."<br>");
                        if (isset($_POST[$i])) {
                        $name = mysql_real_escape_string($_POST[$i]);     
                        if ($name == $myrowmainabout['text']){
                                echo("Текст збігся");
                                echo ($i.$name."<br>");
                                }
                                else {
                                        echo($i."Текст треба замінити в базі");
                                        mysql_query("UPDATE abouttext SET text='$name' WHERE id='$i'",$db);
                                }       
                                        if ($name == '') {
                                echo "null";
                                mysql_query("DELETE FROM abouttext WHERE id='$i'",$db);
                                        }
                        }
                }
                        $i++;
                        echo $i;
                        if (isset($_POST[$i])) {
                        $name = mysql_real_escape_string($_POST[$i]);
                                if ($name <> '') {
                                echo 'insert';
                                mysql_query("INSERT INTO abouttext(id,text) VALUES ('$i','". mysql_real_escape_string($name) ."')",$db);
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