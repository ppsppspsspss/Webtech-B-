<?php

    $uid = $_COOKIE['id'];
    $id = $_GET['id'];
    $currentData = file_get_contents('JSON/pending-transaction-log.json');
    $arrayData = json_decode($currentData, true);
    foreach ($arrayData as $key => $entry) {
        if ($entry['ID'] == $id) {

            $arrayData[$key]['Approval Votes']++;

            if($arrayData[$key]['Approval Votes']<2){
            
            $jsonData = json_encode($arrayData, JSON_PRETTY_PRINT);

            if($uid == 2) $currentData2 = file_get_contents('JSON/Admin1/valid-list-1.json');
            else if($uid == 3) $currentData2 = file_get_contents('JSON/Admin2/valid-list-2.json');
            else if($uid == 4) $currentData2 = file_get_contents('JSON/Admin3/valid-list-3.json');
                
            $arrayData2 = json_decode($currentData2, true);

            $data2 = array(

                'ID' => $id,
                'To' => $arrayData[$key]['To'],
                'From' => $arrayData[$key]['From'],
                'Date' => $arrayData[$key]['Date'],
                'Amount' => $arrayData[$key]['Amount'],
                'Signature' => $arrayData[$key]['Signature'],
                'Approval Votes' => $arrayData[$key]['Approval Votes']
            
            );

            $arrayData2 [] = $data2;
            $jsonData2 = json_encode($arrayData2, JSON_PRETTY_PRINT);

            if($uid == 2) file_put_contents('JSON/Admin1/valid-list-1.json', $jsonData2);
            else if($uid == 3) file_put_contents('JSON/Admin2/valid-list-2.json', $jsonData2);
            else if($uid == 4) file_put_contents('JSON/Admin3/valid-list-3.json', $jsonData2);

            if(file_put_contents('JSON/pending-transaction-log.json', $jsonData)) header('location: admin-home.php');
        }
        else{

            $flag2 = false;
            $flag3 = false;
            $flag4 = false;

            $jsonData = json_encode($arrayData, JSON_PRETTY_PRINT);

            $currentData2 = file_get_contents('JSON/Admin1/valid-list-1.json');
            $currentData3 = file_get_contents('JSON/Admin2/valid-list-2.json');
            $currentData4 = file_get_contents('JSON/Admin3/valid-list-3.json');
                
            $arrayData2 = json_decode($currentData2, true);
            $arrayData3 = json_decode($currentData3, true);
            $arrayData4 = json_decode($currentData4, true);

            $data2 = array(

                'ID' => $id,
                'To' => $arrayData[$key]['To'],
                'From' => $arrayData[$key]['From'],
                'Date' => $arrayData[$key]['Date'],
                'Amount' => $arrayData[$key]['Amount'],
                'Signature' => $arrayData[$key]['Signature'],
                'Approval Votes' => $arrayData[$key]['Approval Votes']
            
            );

            foreach($arrayData2 as $row2){

                if ($row2["ID"] == $id) $flag2 = true;

            }
            foreach($arrayData3 as $row3){

                if ($row3["ID"] != $id) $flag3 = true;

            }
            foreach($arrayData4 as $row4){

                if ($row4["ID"] != $id) $flag4 = true;

            }


            if ($flag2 == false) $arrayData2 [] = $data2;
            if ($flag3 == false) $arrayData3 [] = $data2;
            if ($flag4 == false) $arrayData4 [] = $data2;
            

            $jsonData2 = json_encode($arrayData2, JSON_PRETTY_PRINT);
            $jsonData3 = json_encode($arrayData3, JSON_PRETTY_PRINT);
            $jsonData4 = json_encode($arrayData4, JSON_PRETTY_PRINT);

            file_put_contents('JSON/Admin1/valid-list-1.json', $jsonData2);
            file_put_contents('JSON/Admin2/valid-list-2.json', $jsonData3);
            file_put_contents('JSON/Admin3/valid-list-3.json', $jsonData4);

            unset($arrayData[$key]);
            $arrayData = array_values($arrayData);
            $jsonData = json_encode($arrayData, JSON_PRETTY_PRINT);

            if(file_put_contents('JSON/pending-transaction-log.json', $jsonData)) header('location: admin-home.php');

        }
    }
    }

?>