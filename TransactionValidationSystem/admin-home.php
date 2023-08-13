<?php

    if(file_exists('login.php')) unlink('login.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Home</title>
</head>
<body><br><br><br>
<p align="right"><a href="logout-controller.php">Log Out</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<br><br><br>
<center>
<table border="1" cellspacing="0" cellpadding="20" width=80%>
        <tr align="center">
            <td colspan="6">
                <br>
                <font size="6">Pending Transactions</font><br><br>
            </td>
        </tr>
        <tr bgcolor="black">
            <td>&nbsp;&nbsp;<font color="white">From</font></td>
            <td>&nbsp;&nbsp;<font color="white">To</font></td>
            <td>&nbsp;&nbsp;<font color="white">Amount</font></td>
            <td>&nbsp;&nbsp;<font color="white">Date</font></td>
            <td>&nbsp;&nbsp;<font color="white">Approval Votes</font></td>
            <td>&nbsp;&nbsp;<font color="white">Action</font></td>
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

                ?> <tr align="center"><td colspan="6"><br>No Transactions At This Moment <br><br></td></tr><?php

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
                        <td>&nbsp;&nbsp; <?php echo $row["From"]; ?> </td>
                        <td>&nbsp;&nbsp; <?php echo $row["To"]; ?> </td>
                        <td>&nbsp;&nbsp; <?php echo $row["Amount"]; ?> </td>
                        <td>&nbsp;&nbsp; <?php echo $row["Date"]; ?> </td>
                        <td>&nbsp;&nbsp; <?php echo $row["Approval Votes"]; ?> </td>
                        <td> <a href="approval-controller.php?id=<?php echo $row["ID"]; ?>"><button class="btn">Approve</button></a></td>
                    </tr>
                <?php
                }
            }
            };
        ?>
</table><br><br><br>
<table border="1" cellspacing="0" cellpadding="10" width=80%>
        <tr align="center">
            <td colspan="5">
                <br>
                <font size="6">Valid Transactions</font><br><br>
            </td>
        </tr>
        <tr bgcolor="black">
            <td>&nbsp;&nbsp;<font color="white">From</font></td>
            <td>&nbsp;&nbsp;<font color="white">To</font></td>
            <td>&nbsp;&nbsp;<font color="white">Amount</font></td>
            <td>&nbsp;&nbsp;<font color="white">Date</font></td>
            <td>&nbsp;&nbsp;<font color="white">Approval Votes</font></td>
        </tr>
        <?php

            $uid = $_COOKIE['id'];

            if($uid == 2) $currentData = file_get_contents('JSON/Admin1/valid-list-1.json');
            else if($uid == 3) $currentData = file_get_contents('JSON/Admin2/valid-list-2.json');
            else if($uid == 4) $currentData = file_get_contents('JSON/Admin3/valid-list-3.json');
            $arrayData = json_decode($currentData, true);

            if($arrayData == null) {

                ?> <tr align="center"><td colspan="6"><br>No Transactions At This Moment<br><br></td></tr><?php

            }
            else {
                foreach($arrayData as $row){
                ?>
                    <tr>
                        <td>&nbsp;&nbsp; <?php echo $row["From"]; ?> </td>
                        <td>&nbsp;&nbsp; <?php echo $row["To"]; ?> </td>
                        <td>&nbsp;&nbsp; <?php echo $row["Amount"]; ?> </td>
                        <td>&nbsp;&nbsp; <?php echo $row["Date"]; ?> </td>
                        <td>&nbsp;&nbsp; <?php echo $row["Approval Votes"]; ?> </td>
                    </tr>
                <?php
                } 
            };

        ?>
        
</table>
<br><br><br>
</center>
</body>
</html>