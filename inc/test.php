<?php
$f = 0001;
$e = 1;
    $orQuery = "data_of = ".$f." AND denomination_id = 0";
    while($e <= 10){
        $orQuery = $orQuery." OR data_of = ".$f." AND denomination_id = ".$e;
        $e++;
    }

    $gProSectorDenominationTableQuery = "SELECT * FROM project_denominations WHERE $orQuery";

    echo $gProSectorDenominationTableQuery;
?>