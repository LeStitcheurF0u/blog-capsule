<?php
$pdf_content = file_get_contents('test.pdf');

$result = base64_encode($pdf_content);
$decode = base64_decode($result);

echo $decode;
