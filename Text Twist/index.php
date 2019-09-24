<?php

    $dbhandle = new PDO("sqlite:scrabble.sqlite") or die("Failed to open DB");
    if (!$dbhandle) die ($error);
 
    $query = "SELECT rack, words FROM racks WHERE length=7 and weight <= 10 order by random() limit 0, 10";
    
    $statement = $dbhandle->prepare($query);
    $statement->execute();
    
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $myrack = [0][""];
    
    $racks = [];
    for($i = 0; $i < pow(2, ans); $i++){
        
    }
    $ans = "";
    for($j = 0; $j < strlen($myrack); $j++){
        if (($i >> $j) % 2){
            $ans .= $myrack[$j];
    }
}
    if(strlen($ans) > 1){
        $racks[] = $ans;
    
}
$racks = array_unique($racks);
$numracks = sizeof($racks);
$words = [];
for($i = 0; $i < $numracks; $i++){
    $thisrack = $racks[$i];
    $query = "SELECT rack, words FROM racks WHERE length=7 and weight <= 10 order by random() limit 0,10";
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    if(sizeof($results) > 0){
        $answer = $results[0];
        print_r($answer); 
    }

}

header('HTTP/1.1 200 OK');
header('Content-Type: application/json');
echo json_encode($results);
?>

