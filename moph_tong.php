<?php 


$userId = 'U0ccd01887ffcbb7ea66b577190e8f424' ;
$hospitalName = 'กระทรวงสาธารณสุข' ;
$origin = 'test' ;
$queueNumber = '124' ;
$patientName = '111' ;
$appointmentDate = '25/07/2018' ;
$appointmentTime = '11:00' ;
$detailsLink = '' ;
$currentQueueLink = '' ;
   
        $data = array(
            'userId' => $userId,
            'hospitalName' => $hospitalName,
            'origin' => $origin,
            'queueNumber' => $queueNumber,
            'patientName' => $patientName,
            'appointmentDate' => $appointmentDate,
            'appointmentTime' => $appointmentTime,
            'detailsLink' => $detailsLink,
            'currentQueueLink' => $currentQueueLink,
        );                                                                    
        $data_string = json_encode($data);
        
        $url = 'https://mophconnect.go.th/test/api/queue';
        $ch = curl_init($url);                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json',                                                                                
            'Content-Length: ' . strlen($data_string))                                                                       
        );
        curl_setopt($ch, CURLOPT_SSLVERSION, 'all');                                                                                                                   
                                                                                                                            
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        echo "<br> endpoint: $urls[$i]";
        echo "<br> response message: $result";
        echo "<br> status code: $httpcode";
        echo "<br> error: $error";
      
?>