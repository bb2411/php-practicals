<form method="POST">
    <label for="name">Name :</label>
    <input type="text" name="name">
    <label for="empcode">Emp Coe :</label>
    <input type="number" name="empcode">
    <label for="basic">Basic Salary :</label>
    <input type="text" name="basic" placeholder="basic pay">
    <input type="submit">
</form>

<?php 

    include 'vendor/autoload.php';
    use Dompdf\Options;
    use Dompdf\Dompdf;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        header("Content-Type:application/pdf");
        $name=$_POST['name'];
        $empcode=$_POST['empcode'];
        $bap=$_POST['basic'];
        $da=(50/100)*$bap;
        $med=(4/100)*$bap;
        $hra=(10/100)*$bap;
        $gs=$bap+$da+$hra+$med;
        $ins=(7/100)*$gs;
        $pf=(5/100)*$gs;
        $de=$ins+$pf;
        $ns=$gs-$de;
        $html=file_get_contents('Pdf.html');
        $html=str_replace(["__NAME__","__EMP_CODE__","__NS__","__GS__","__DA__","__PF__","__DE__"],["  ".$name,"  ".$empcode,$ns,$gs,$da,$pf,$de],$html);
        $option=new Options;
        $option->setChroot(__DIR__);
        $option->setIsRemoteEnabled(true);
        $dom=new Dompdf($option);
        $dom->loadHtml($html);
        $dom->render();
        $pdfcont=$dom->output();
        echo $pdfcont;
    }
?>