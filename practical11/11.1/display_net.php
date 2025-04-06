<?php
require('fpdf/fpdf.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emp_name = $_POST['emp-name'];
    $org_name = $_POST['org-name'];
    $desg = $_POST['desg'];
    $basic_pay = $_POST['basic-salary'];
    $da = ($basic_pay / 100) * 50;
    $hra = ($basic_pay / 100) * 10;
    $medical = ($basic_pay / 100) * 4;
    $gross_salary = $basic_pay + $da + $hra + $medical;
    $insurance = ($gross_salary / 100) * 7;
    $pf = ($gross_salary / 100) * 5;
    $deduction = $insurance + $pf;
    $net_salary = $gross_salary - $deduction;

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(0,10,'Net Salary Calculation of '.$emp_name,0,1,'C');
    $pdf->Ln(10);

    $pdf->Cell(50,10,'Organization',1);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(140,10,$org_name,1,1);

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,'Employee Name',1);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(140,10,$emp_name,1,1);

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,'Designation',1);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(140,10,$desg,1,1);

    $pdf->Ln(5);
    $pdf->SetFont('Arial','B',12);
    $pdf->setFillColor(200, 200, 200);

    
    $pdf->Cell(95, 10, 'Earnings', 1, 0, 'C', true);
    $pdf->Cell(95, 10, 'Deductions', 1, 1, 'C', true);

    
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(47.5,10,'Basic Pay',1,0,'C');
    $pdf->Cell(47.5,10,number_format($basic_pay,2),1,0,'C');
    $pdf->Cell(47.5,10,'Insurance (7%)',1,0,'C');
    $pdf->Cell(47.5,10,number_format($insurance,2),1,0,'C');
    $pdf->Ln();

    $pdf->Cell(47.5,10,'DA (50%)',1,0,'C');
    $pdf->Cell(47.5,10,number_format($da,2),1,0,'C');
    $pdf->Cell(47.5,10,'PF (5%)',1,0,'C');
    $pdf->Cell(47.5,10,number_format($pf,2),1,0,'C');
    $pdf->Ln();

    
    $pdf->Cell(47.5,10,'HRA (10%)',1,0,'C');
    $pdf->Cell(47.5,10,number_format($hra,2),1,0,'C');
    

    $pdf->Cell(47.5,10,'Medical  (4%)',1,0,'C');
    $pdf->Cell(47.5,10,number_format($medical,2),1,0,'C');
    $pdf->Ln(5);
    $pdf->Ln();

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(47.5,10 ,'Gross Salary',1,0,'C');
    $pdf->Cell(47.5,10,number_format($gross_salary,2),1,0,'C');
    $pdf->Cell(47.5,10,'Total Deduction',1,0,'C');
    $pdf->Cell(47.5,10,number_format($deduction,2),1,0,'C');
    
    $pdf->Ln();

    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(95,10,'Net Salary',1,0,'C');
    $pdf->Cell(95,10,number_format($net_salary,2),1,1,'C');

    $pdf->Output();
}
?>
