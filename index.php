<?php

require './app/bootstrap.php';
$pageContents = file_get_contents('./public/index_page.html');
echo $pageContents;