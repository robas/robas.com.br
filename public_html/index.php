<HTML>

<HEAD>
<TITLE>Idéias Escritas</TITLE>
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen">
</HEAD>

<BODY>

<div id="header">
<?php include("header.php"); ?>
</div>

<!-- Content goes here -->
<div id="index_content">
<?php
include_once "markdown.php";
include_once "crawler.php";
$lala = listDir(); 
echo $lala;
//$my_text = arquivoo
//$my_html = Markdown($my_text);
//echo $my_html;
?>

</div>
<!-- Content ends here -->

<div id="footer">
<?php include("footer.php"); ?>
</div>

</BODY>

</HTML>
