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
<div id="content">
<?php
include_once "markdown.php";
include_once "crawler.php";
$name = $_GET['a'];
$filename = "content/$name";
if (file_exists($filename)) {
	$file_content = file_get_contents($filename);
	$html_content = Markdown($file_content);
	echo $html_content;
} else {
	echo "<p>CREU</p>";
}
?>

</div>
<!-- Content ends here -->

<!-- Comments goes here -->
<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'robas'; // required: replace example with your forum shortname

    // The following are highly recommended additional parameters. Remove the slashes in front to use.
    var disqus_identifier = '<? echo $_GET['a'];?>';
    var disqus_url = 'http://robas.com.br/read?a=<? echo $_GET['a'];?>';

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<!-- Comments ends here -->

<div id="footer">
<?php include("footer.php"); ?>
</div>

</BODY>

</HTML>
