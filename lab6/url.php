<?php

$url = 'http://sw.muet.edu.pk/faculty/cvs/sample.pdf';

$url1 = parse_url($url);

echo 'URL : ' .$url."<br/>";
echo 'Scheme : '.$url1['scheme']."<br/>";
echo 'Host : '.$url1['host']."<br/>";
echo 'Path : '.$url1['path']."<br/>";

?>