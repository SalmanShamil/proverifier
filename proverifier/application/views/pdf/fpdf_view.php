<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    $this->load->library('Pdf');
    
    class MyPDF extends Pdf
    {
        /**
         * "Remembers" the template id of the imported page
         */
        //var $_tplIdx;
        

        /**
         * Draw an imported PDF logo on every page
         */
        /*function Header()
        {            
            $file = dirname(__FILE__)."/PdfDocument.pdf";
            if (is_null($this->_tplIdx)) {
                $this->setSourceFile($file);
                $this->_tplIdx = $this->importPage(1);
            }
            $specs = $this->getTemplateSize($this->_tplIdx);
            $size = $this->useTemplate($this->_tplIdx, 0, 0, 220);
        }*/
    
        function Footer()
        {
            // emtpy method body
        }
    }
    $fileName = 'Verified.pdf';

    /*$pdfSource = dirname(__FILE__)."/PdfDocument.pdf";
    $imgSource = dirname(__FILE__)."/img.jpg";
    $output = dirname(__FILE__)."/output/$fileName";*/

    $pdfSource = "./uploaded_files/pdf.pdf";
    $imgSource = "./uploaded_files/img.jpg";
    $output = "./verified_files/$fileName";

    $pdf = new MyPDF();
    $pageCount = $pdf->setSourceFile($pdfSource);
    for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++)
{
    $tplIdx = $pdf->importPage($pageNo);
    $pdf->AddPage();
    $pdf->setSourceFile($pdfSource);
    $tplIdx = $pdf->importPage(1);
    $pdf->Image($imgSource,2,2,30);
    $pdf->useTemplate($tplIdx, 0, 0, 200);
}
    

    $pdf->Output('F',$output);

?>
