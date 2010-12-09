<?php

function listDir() {
	// Filter kids out: ../ or /
	$out = array();
	exec('ls /home/robas/public_html/content', $out);

	foreach ($out as $file) {
		$year = $file[0].$file[1];
		$month = $file[2].$file[3];
		$day = $file[4].$file[5];
		$date = $day."/".$month."/".$year;
		$fileName = preg_replace('/^[0-9]*\./','',$file);
		$humanFileName = str_replace("-"," ",$fileName);
		$links .= "<p class=\"article\">$date -  <a href=\"read?a=$file\">$humanFileName</a></p>";

	}
	return $links;
}

?>
