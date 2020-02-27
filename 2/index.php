<?php
post();
function post(){
    include "start.html";
    $firstText = $_REQUEST["text"];
    $finishText = "";
    foreach (generator($firstText) as $elem) {
        $finishText .= $elem;
    }
    print "; Итоговое слово: " . $finishText;
}

function generator($firstText){
    $counter = 0;
    for ($i = 0; $i < strlen($firstText); $i++) {
        switch ($firstText[$i]) {
            case "h" :
                $firstText[$i] = "4";
                yield $firstText[$i];
                $counter++;
                break;
            case "i" :
                $firstText[$i] = "1";
                yield $firstText[$i];
                $counter++;
                break;
            case "e" :
                $firstText[$i] = "3";
                yield $firstText[$i];
                $counter++;
                break;
            case "o" :
                $firstText[$i] = "0";
                yield $firstText[$i];
                $counter++;
                break;
            default :
                yield $firstText[$i];
        }
    }
    print "Перестановок: " . $counter;
}


?>
