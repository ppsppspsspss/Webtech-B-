<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Home</title>
</head>
<body>
<table id="loginPanel" cellspacing="25">
        <tr>
            <td colspan="6">
                <font size="6">Pending Transactions</font><br><br>
            </td>
        </tr>
        <tr>
            <td>From</td>
            <td>To</td>
            <td>Amount</td>
            <td>Date</td>
            <td>Approval Votes</td>
            <td>Action</td>
        </tr>
        <tr></tr>
        <?php

            $uid = $_COOKIE['id'];

            $currentData = file_get_contents('JSON/pending-transaction-log.json');
            $arrayData = json_decode($currentData, true);

            if($uid == 2) $currentData2 = file_get_contents('JSON/Admin1/valid-list-1.json');
            else if($uid == 3) $currentData2 = file_get_contents('JSON/Admin2/valid-list-2.json');
            else if($uid == 4) $currentData2 = file_get_contents('JSON/Admin3/valid-list-3.json');
            $arrayData2 = json_decode($currentData2, true);

            if($arrayData == null) {

                ?> <tr><td colspan="6">No Transactions At This Moment</td></tr><?php

            }
            else {
                foreach($arrayData as $row){
                    $flag = false;
                    if($arrayData2 == null) {}
                    else{
                    foreach($arrayData2 as $row2){
                        if($arrayData2 == null) {}
                        else{
                        if($row["ID"]==$row2["ID"]) $flag = true;
                        }
                    }
                    }
                    if($flag == true) continue;
                    else{
                ?>
                    <tr>
                        <td> <?php echo $row["From"]; ?> </td>
                        <td> <?php echo $row["To"]; ?> </td>
                        <td> <?php echo $row["Amount"]; ?> </td>
                        <td> <?php echo $row["Date"]; ?> </td>
                        <td> <?php echo $row["Approval Votes"]; ?> </td>
                        <td> <a href="approval-controller.php?id=<?php echo $row["ID"]; ?>"><button class="btn">Approve</button></a></td>
                    </tr>
                <?php
                }
            }
            };
        ?>
</table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<table id="loginPanel" cellspacing="50">
        <tr>
            <td colspan="5">
                <font size="6">Valid Transactions</font><br><br>
            </td>
        </tr>
        <tr>
            <td>From</td>
            <td>To</td>
            <td>Amount</td>
            <td>Date</td>
            <td>Approval Votes</td>
        </tr>
        <?php

            $uid = $_COOKIE['id'];

            if($uid == 2) $currentData = file_get_contents('JSON/Admin1/valid-list-1.json');
            else if($uid == 3) $currentData = file_get_contents('JSON/Admin2/valid-list-2.json');
            else if($uid == 4) $currentData = file_get_contents('JSON/Admin3/valid-list-3.json');
            $arrayData = json_decode($currentData, true);

            if($arrayData == null) {

                ?> <tr><td colspan="6">No Transactions At This Moment</td></tr><?php

            }
            else {
                foreach($arrayData as $row){
                ?>
                    <tr>
                        <td> <?php echo $row["From"]; ?> </td>
                        <td> <?php echo $row["To"]; ?> </td>
                        <td> <?php echo $row["Amount"]; ?> </td>
                        <td> <?php echo $row["Date"]; ?> </td>
                        <td> <?php echo $row["Approval Votes"]; ?> </td>
                    </tr>
                <?php
                } 
            };

        ?>
        
</table>
</body>
</html>