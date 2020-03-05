<?php
include "start.html";
function post(){
    $finishText = "";
    $firstText = $_REQUEST["arguments"];
    $firstText = str_split($firstText, 1);
    foreach (generator($firstText) as $elem) {
        $finishText .= $elem;
        print $finishText;
    }
}

function generator($firstText){
    $counter = 0;
    for ($i = 0; $i = strlen($firstText); $i++) {
        switch ($firstText[$i]) {
            case "h" :
                $firstText[$i] = "4";
                yield $firstText[$i];
                break;
                $counter++;
            case "i" :
                $firstText[$i] = "1";
                yield $firstText[$i];
                break;
                $counter++;
            case "e" :
                $firstText[$i] = "3";
                yield $firstText[$i];
                break;
                $counter++;
            case "o" :
                $firstText[$i] = "0";
                yield $firstText[$i];
                break;
                $counter++;
            default :
                $firstText[$i];
        }
    }
    return $counter;
}

?>
