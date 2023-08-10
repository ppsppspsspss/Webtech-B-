<?php

    $currentData = file_get_contents('JSON/pending-transaction-log.json');
    $arrayData = json_decode($currentData, true);

    $id = random_int(00000000, 99999999);
    $to = $_POST["to"];
    $from = $_POST["from"];
    $amount = $_POST["amount"];
    $signature = $_POST["signature"];

    $data = array(

        'ID' => $id,
        'To' => $to,
        'From' => $from,
        'Date' => date("d-m-Y"),
        'Amount' => $amount,
        'Signature' => $signature,
        'Approval Votes' => 0

    );

    $arrayData [] = $data;

    $jsonData = json_encode($arrayData, JSON_PRETTY_PRINT);

    if(file_put_contents('JSON/pending-transaction-log.json', $jsonData)) echo "Transaction added to transaction log. Please wait for approval.";
    else echo "Could not add transaction, Something went wrong.";

?>