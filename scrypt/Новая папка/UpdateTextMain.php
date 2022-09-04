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
                $resultmainfoto = mysql_query("SELECT id,name FROM mainfoto",$db);
                while ($myrowmainfoto = mysql_fetch_assoc($resultmainfoto)){
                        $i = $myrowmainfoto['id'];
                echo ($i."<br>");
                        if (isset($_POST[$i])) {
                        $name = mysql_real_escape_string($_POST[$i]);     
                        if ($name == $myrowmainfoto['name']){
                                echo("Текст збігся");
                                echo ($i.$name."<br>");
                                }
                                else {
                                        echo($i."Текст треба замінити в базі");
                                        mysql_query("UPDATE mainfoto SET name='$name' WHERE id='$i'",$db);
                                }
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