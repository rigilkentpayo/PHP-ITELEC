<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>

<body>
    <!-- 
    Options under Employee Status:
    Regular
    Probationary
    Casual

    Salary Rate:
    Regular - 500
    Probationary - 400
    Casual - 300

    Options under Civil Status:
    Single
    Married
    Widow

    Tax Rate:
    Single - 12%
    Probationary - 10%
    Widow - 7% 
    
    Sample Case #1:
    No. of Days Worked: 15
    Employee Status:    Regular
    Civil Status:       Single
    Result:

    Gross Salary:       7,500.00
    Tax:                12%
    Deduction:          900.00
    Net Salary:         6,600.00

    Sample Case #2:
    No. of Days Worked: 15
    Employee Status:    Probationary
    Civil Status:       Married
    Result:

    Gross Salary:       4,800.00
    Tax:                10%
    Deduction:          480.00
    Net Salary:         4,320.00
    -->

    <h1>Exercise 1</h1>
    <form action="">
        No. of Days Worked <input type="number" name="days"><br /><br />
        Employee Status:
        <select name="empstat">
            <option>Regular</option>
            <option>Probationary</option>
            <option>Casual</option>
        </select><br /><br />
        Civil Status:
        <select name=civstat>
            <option>Single</option>
            <option>Married</option>
            <option>Widow</option>
        </select><br /><br />
        <button>Compute Salary</button>
    </form><br /><br />
    <?php
    // Do your code here
    $days = $_GET['days'];
    $empstat = $_GET['empstat'];
    $civstat = $_GET['civstat'];

    switch($empstat){
        case 'Regular':
            if($civstat == "Single"){
                $salary = $days*500;
                $tax = "12%";
                $deduction = $salary*.12;
                $netsalary = $salary - $deduction;
            }
            else if($civstat =="Married"){
                $salary = $days*500;
                $tax = "10%";
                $deduction = $salary*.10;
                $netsalary = $salary - $deduction;
            }
            else if($civstat == "Widow"){
                $salary = $days*500;
                $tax = "10%";
                $deduction = $salary*.7;
                $netsalary = $salary - $deduction;
            }
            break;
        case 'Probationary':
            if($civstat == "Single"){
            $salary = $days*400;
            $tax = "12%";
            $deduction = $salary*.12;
            $netsalary = $salary - $deduction;
            }
            else if($civstat =="Married"){
            $salary = $days*400;
            $tax = "10%";
            $deduction = $salary*.10;
            $netsalary = $salary - $deduction;
            }
            else if($civstat == "Widow"){
            $salary = $days*400;
            $tax = "10%";
            $deduction = $salary*.7;
            $netsalary = $salary - $deduction;
            }
            break;
        case 'Casual':
            if($civstat == "Single"){
            $salary = $days*300;
            $tax = "12%";
            $deduction = $salary*.12;
            $netsalary = $salary - $deduction;
            }
            else if($civstat =="Married"){
            $salary = $days*300;
            $tax = "10%";
            $deduction = $salary*.10;
            $netsalary = $salary - $deduction;
            }
            else if($civstat == "Widow"){
            $salary = $days*300;
            $tax = "10%";
            $deduction = $salary*.7;
            $netsalary = $salary - $deduction;
            }
            break;

    }
    // OUTPUT
    echo "Gross Salary: $salary<br />";
    echo "Tax: $tax<br />";
    echo "Deduction: $deduction<br />";
    echo "Net Salary: $netsalary<br />";
    ?>


</body>

</html>