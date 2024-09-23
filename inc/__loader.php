<?php

/**
 * Файл подключает все нужные зависимости из папки inc
 * 
 * @package ASB Video
 */

require_once __DIR__ . '/lib/vendor/autoload.php';
require_once __DIR__ . '/custom-types.php';
require_once __DIR__ . '/woocommerce/index.php';

// use Dompdf\Dompdf;

// // Fetch website content
// $websiteContent = file_get_contents('https://google.com');

// $dompdf = new Dompdf();
// $dompdf->loadHtml($websiteContent);

// $dompdf->render();
// $dompdf->stream();

/**
 * Струтура для pdf будет похожа на шаблон 
 * template-parts\modals\modal-main.php
 * 
 * Т.е. тут тоже будет приходить по идее 2 массива - созданные продукты (айдишники продуктов от woocommerce)
 * А также массив НЕ созданных продуктов
 */