<?php
header('Content-disposition: attachment; filename=new_patient_form.pdf');
header('Content-type: application/pdf');
readfile('new_patient_form.pdf');
?>