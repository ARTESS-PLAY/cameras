<?php

// reference the Dompdf namespace
use Dompdf\Dompdf;

function generate_pdf()
{
    ob_start();
    get_template_part('content', 'pdf');
    $pdf = ob_get_contents();
    ob_end_clean();
    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml($pdf);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->set_option('enable_remote', TRUE);

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();
}
// generate_pdf();
