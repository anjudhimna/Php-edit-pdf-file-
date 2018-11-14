<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'bootstrap.php';

use mikehaertl\pdftk\Pdf;

// Fill form with data array
$pdf = new Pdf('OFTEC_Boiler_Passport.pdf');
$pdf->fillForm([
        'OFTEC'=>'Anju dhiman12321',
        'Date' => '120%',
	'New_System'=>'No',
	'Contact_Telephone'=>13123312,
	'Contact_Email'=>'anju@gmail.com',
	'Replacement'=>'Yes',
	'Open_Vented'=>'Yes',
	'Sealed System'=>'No',
    //'img'=>'https://www.gstatic.com/webp/gallery3/1.png',

    ])
    ->needAppearances()
    ->saveAs('finalpdf.pdf');

// Fill form from FDF
/*
$pdf = new Pdf('form.pdf');
$pdf->fillForm('data.xfdf')
    ->saveAs('filled.pdf');

// Check for errors
if (!$pdf->saveAs('my.pdf')) {
    $error = $pdf->getError();
}

*/

?>
