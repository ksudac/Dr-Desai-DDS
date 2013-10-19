<?php
header('Content-disposition: attachment; filename=dental_factsheet_2004.pdf');
header('Content-type: application/pdf');
readfile('dental_factsheet_2004.pdf');
?>