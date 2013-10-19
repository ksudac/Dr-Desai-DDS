<?php
header('Content-disposition: attachment; filename=HIPAA_Policy.pdf');
header('Content-type: application/pdf');
readfile('HIPAA_Policy.pdf');
?>