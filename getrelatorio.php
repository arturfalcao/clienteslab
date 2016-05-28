<?php
$id = $_GET["id"];

  $file = '/var/www/html/lab/app/amostras/'. $id .'.pdf';
        $filename = 'filename.pdf';
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="' . $filename . '"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        @readfile($file);

?>