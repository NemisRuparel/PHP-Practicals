<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9; 
        color: #333;
    }

    #info-tab, #result-tab {
        width: 100%;
        margin-top: 2%;
        border-collapse: separate;
        border-spacing: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
        background-color: #fff; 
        border-radius: 10px; 
        overflow: hidden;
    }

    #info-tab th, #result-tab th {
        background-color: #4CAF50; 
        color: white; 
        padding: 10px;
        text-align: center;
        font-size: 1.1rem; 
    }

    #info-tab td, #result-tab td {
        border: 2px solid #ddd;
        padding: 10px;
        text-align: center;
        font-size: 1rem;
        border-radius: 5px;
    }

    #info-tab td:first-child, #result-tab td:first-child {
        font-weight: bold;
    }

    #info-tab td {
        background-color: #f4f4f4;
    }

    #result-tab tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    #result-tab td {
        background-color: #fff;
    }

    #marksheet {
        border: 5px double #333;
        padding: 20px;
        margin: 20px auto;
        background-color: #fefefe; 
        border-radius: 10px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    }
    .success {
            background-color: rgb(10, 83, 49);
            border: 10px solid rgb(10,83,49);
            border-radius: 5px;
            width: 460px;
            color: #fff;
            height: 20px;
            align-items: justify;
            text-align: center;
            margin-top: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 

        }

    .failure {
            background-color: rgb(219, 16, 16);
            border: 10px solid rgb(219,16,16);
            border-radius: 5px;
            width: 460px;
            color: #fff;
            text-align: center;
            margin-top: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            align-items: justify;
        }   
    h2, h3 {
        text-align: center;
        color: #444; 
        margin: 10px 0;
        letter-spacing: 2px;
        font-weight: 700;
    }

    h3 {
        text-transform: uppercase;
    }

    #result-tab tr:last-child td {
        font-weight: bold;
        font-size: 1.2rem;
        background-color: #4CAF50; 
        color: white;
    }
</style>
<?php
if (isset($_POST["calculate"])) {

$student_name = $_POST["student-name"];
$student_enrollment = $_POST["enrollment"];
$student_sem = $_POST["sem"];
$student_branch = $_POST["branch"];

$subject_one_name = $_POST["subject-one-name"];
$subject_two_name = $_POST["subject-two-name"];
$subject_three_name = $_POST["subject-three-name"];
$subject_four_name = $_POST["subject-four-name"];

$subject_one_marks = $_POST["subject-one-marks"];
$subject_two_marks = $_POST["subject-two-marks"];
$subject_three_marks = $_POST["subject-three-marks"];
$subject_four_marks = $_POST["subject-four-marks"];

$subject_one_grade;
$subject_two_grade;
$subject_three_grade;
$subject_four_grade;

$subject_one_outcome = "PASS";
$subject_two_outcome = "PASS";
$subject_three_outcome = "PASS";
$subject_four_outcome = "PASS";

$subject_one_spi;
$subject_two_spi;
$subject_three_spi;
$subject_four_spi;

$subjects_sum_spi;


if ($subject_one_marks >= 85 && $subject_one_marks <= 100) {
$subject_one_grade = "AA";
$subject_one_spi = 10;
} elseif ($subject_one_marks >= 75 && $subject_one_marks <= 84) {
    $subject_one_grade = "AB";
    $subject_one_spi = 9;
} elseif ($subject_one_marks >= 65 && $subject_one_marks <= 74) {

    $subject_one_grade = "BB";
    $subject_one_spi = 8;

} elseif ($subject_one_marks >= 55 && $subject_one_marks <= 64) {

    $subject_one_grade = "BC";
    $subject_one_spi = 7;

} elseif ($subject_one_marks >= 45 && $subject_one_marks <= 54) {

    $subject_one_grade = "CC";
    $subject_one_spi = 6;

} elseif ($subject_one_marks >= 40 && $subject_one_marks <= 44) {

    $subject_one_grade = "CD";
    $subject_one_spi = 5;

} elseif ($subject_one_marks >= 35 && $subject_one_marks <= 39) {

    $subject_one_grade = "DD";
    $subject_one_spi = 4;

} else {

    $subject_one_grade = "FF";
    $subject_one_outcome = "FAIL";
    $subject_one_spi = 0;

}

if ($subject_two_marks >= 85 && $subject_two_marks <= 100) {

    $subject_two_grade = "AA";
    $subject_two_spi = 10;

} elseif ($subject_two_marks >= 75 && $subject_two_marks <= 84) {

    $subject_two_grade = "AB";
    $subject_two_spi = 9;

} elseif ($subject_two_marks >= 65 && $subject_two_marks <= 74) {

    $subject_two_grade = "BB";
    $subject_two_spi = 8;

} elseif ($subject_two_marks >= 55 && $subject_two_marks <= 64) {

    $subject_two_grade = "BC";
    $subject_two_spi = 7;

} elseif ($subject_two_marks >= 45 && $subject_two_marks <= 54) {

    $subject_two_grade = "CC";
    $subject_two_spi = 6;

} elseif ($subject_two_marks >= 40 && $subject_two_marks <= 44) {

    $subject_two_grade = "CD";
    $subject_two_spi = 5;

} elseif ($subject_two_marks >= 35 && $subject_two_marks <= 39) {

    $subject_two_grade = "DD";
    $subject_two_spi = 4;

} else {

    $subject_two_grade = "FF";
    $subject_two_outcome = "FAIL";
    $subject_two_spi = 0;

}

if ($subject_three_marks >= 85 && $subject_three_marks <= 100) {

    $subject_three_grade = "AA";
    $subject_three_spi = 10;

} elseif ($subject_three_marks >= 75 && $subject_three_marks <= 84) {

    $subject_three_grade = "AB";
    $subject_three_spi = 9;

} elseif ($subject_three_marks >= 65 && $subject_three_marks <= 74) {

    $subject_three_grade = "BB";
    $subject_three_spi = 8;

} elseif ($subject_three_marks >= 55 && $subject_three_marks <= 64) {

    $subject_three_grade = "BC";
    $subject_three_spi = 7;

} elseif ($subject_three_marks >= 45 && $subject_three_marks <= 54) {

    $subject_three_grade = "CC";
    $subject_three_spi = 6;

} elseif ($subject_three_marks >= 40 && $subject_three_marks <= 44) {

    $subject_three_grade = "CD";
    $subject_three_spi = 5;

} elseif ($subject_three_marks >= 35 && $subject_three_marks <= 39) {

    $subject_three_grade = "DD";
    $subject_three_spi = 4;

} else {

    $subject_three_grade = "FF";
    $subject_three_outcome = "FAIL";
    $subject_three_spi = 0;

}

if ($subject_four_marks >= 85 && $subject_four_marks <= 100) {

    $subject_four_grade = "AA";
    $subject_four_spi = 10;

} elseif ($subject_four_marks >= 75 && $subject_four_marks <= 84) {

    $subject_four_grade = "AB";
    $subject_four_spi = 9;

} elseif ($subject_four_marks >= 65 && $subject_four_marks <= 74) {

    $subject_four_grade = "BB";
    $subject_four_spi = 8;

} elseif ($subject_four_marks >= 55 && $subject_four_marks <= 64) {

    $subject_four_grade = "BC";
    $subject_four_spi = 7;

} elseif ($subject_four_marks >= 45 && $subject_four_marks <= 54) {

    $subject_four_grade = "CC";
    $subject_four_spi = 6;

} elseif ($subject_four_marks >= 40 && $subject_four_marks <= 44) {

    $subject_four_grade = "CD";
    $subject_four_spi = 5;

} elseif ($subject_four_marks >= 35 && $subject_four_marks <= 39) {

    $subject_four_grade = "DD";
    $subject_four_spi = 4;

} else {

    $subject_four_grade = "FF";
    $subject_four_outcome = "FAIL";
    $subject_four_spi = 0;

}

$subjects_sum_spi = $subject_one_spi + $subject_two_spi + $subject_three_spi + $subject_four_spi;
$spi = $subjects_sum_spi / 4;

        $final_result = "PASS";

        if ($subject_one_outcome == "FAIL" || $subject_two_outcome == "FAIL" || $subject_three_outcome == "FAIL" || $subject_four_outcome == "FAIL") {
            $final_result = "FAIL";
        }
        // $final_result_class = $final_result === "PASS" ? "success" : "failure";
        if ($final_result=="PASS") {
            $final_result_class = '<div class="success">PASS</div>';
        }
        if($final_result=="FAIL"){
            $final_result_class = '<div class="failure">FAIL</div>';
        }

$display = "
<h2 style = 'text-align: center;margin-top:30px;'>MARKSHEET</h2>
<div id='marksheet'>
<h3 style = 'letter-spacing:4px;font-weight:900;'> Student Information </h3>
<table id='info-tab'>
  <tr id='name-row'>
        <td colspan='1'>Name:</td>
        <td colspan='9'>{$student_name}</td>
    </tr>
    <tr id='ent-row'>
        <td colspan='2'>Enrollment:</td>
        <td colspan='2'>{$student_enrollment}</td>
        <td colspan='1'><b>Sem:</b></td>
        <td colspan='2'>{$student_sem}</td>
    </tr>
    <tr id='branch-row'>
        <td colspan = '1'>&nbsp;&nbsp;&nbsp;Branch:</td>
        <td colspan = '9'>{$student_branch}</td>
    
        
    </tr>
    </table>    

    <br/>
    <h3 style = 'letter-spacing:4px;font-weight:900;'> Result </h3>
    <table id='result-tab'>
    <tr id='subject-row' style='margin-top:200px;'>
        <th>Subject Name</th>
        <th>Subject Marks</th>
        <th>Subject Grade</th>
        <th>Pass / Fail</th>
    </tr>
    <tr>
        
        <td>{$subject_one_name}</td>
        <td>{$subject_one_marks}</td>
        <td>{$subject_one_grade}</td>
        <td>{$subject_one_outcome}</td>
    </tr>
    <tr>
    
        <td>{$subject_two_name}</td>
        <td>{$subject_two_marks}</td>
        <td>{$subject_two_grade}</td>
        <td>{$subject_two_outcome}</td>
    </tr>
    <tr>
        <td>{$subject_three_name}</td>
        <td>{$subject_three_marks}</td>
        <td>{$subject_three_grade}</td>
        <td>{$subject_three_outcome}</td>
    </tr>
    <tr>
       
        <td>{$subject_four_name}</td>
        <td>{$subject_four_marks}</td>
        <td>{$subject_four_grade}</td>
        <td>{$subject_four_outcome}</td>
    </tr>
    <tr>
        <td colspan='3' style='font-size:17px;font-weight:800;'>SPI</td>
        <td colspan='2' style='background-color:lightseagreen;color:white;font-size:20px;font-weight:700;'>{$spi}</td>
    </tr>
 
 
</table>
{$final_result_class}
</div>
";

echo $display;
}