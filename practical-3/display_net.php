<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    h1 {
        text-align: center;
        margin-top: 20px;
        color: #333;
    }
    #result {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin: 20px;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    #result > div {
        flex: 1;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    h2, h3 {
        margin: 0 0 10px;
        color: #007bff;
    }
    p {
        margin: 5px 0;
        color: #555;
    }
</style>
<?php
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

    echo "<h1>Net Salary Calculation</h1>
        <div id='result'>
            <div>
                <h2>Organization name: {$org_name}</h2>
                <h3>Employee name: {$emp_name}</h3>
                <p>Basic Pay: {$basic_pay}</p>
                <p>DA: {$da}</p>
                <p>HRA: {$hra}</p>
                <p>Medical: {$medical}</p>
            </div>
            <div>
                <h3>Designation: {$desg}</h3>
                <p>Insurance: {$insurance}</p>
                <p>Gross Salary: {$gross_salary}</p>
                <p>Deduction: {$deduction}</p>
                <p><strong>Net Salary: {$net_salary}</strong></p>
            </div>
        </div>";
}
?>
