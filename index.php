<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(array(
    'format'            => 'A4-L',
    'mode'              => 'utf-8',
    'default_font'      => 'angsana',
    'default_font_size' => 18,
    'margin_left'       => 4,
    'margin_right'      => 6,
    'margin_top'        => 1,
    'margin_bottom'     => 5,
));
$mpdf->SetImportUse();
$mpdf->SetDocTemplate('template/cer.pdf', true);
$mpdf->WriteHTML('<div style="position: absolute;top:266px;left:0px;font-size:2.5em;font-weight:bold;text-align:center;width:100%;">เด็กชายทวีวุฒิ นากอหม๊ะ</div>');
$mpdf->Output();
