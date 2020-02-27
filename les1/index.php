<?php
$source = $_REQUEST["symbols"];
$source = str_split( $source);
$chain = array(0);
$cell = 0;
$brackets = 0;
for($i=0; $i<count($source); ++$i) {
    switch($source[$i]) {
        case "+" :
            $chain[$cell]++;
            break;
        case "-" :
            $chain[$cell]--;
            break;
        case "." :
            print chr($chain[$cell]);
            break;
        case "," :
            $chain[$cell] = ord(fgetc(STDIN));
            break;
        case ">" :
            $cell++;
            if(!isset($chain[$cell])) {
                $chain[$cell] = 0;
            }
            break;
        case "<" :
            $cell--;
            if(!isset($chain[$cell])) {
                $chain[$cell] = 0;
            }
            break;
        case "[" :
            if(!$chain[$cell]) {
                $brackets = 1;
                while($brackets) {
                    $i++;
                    if($source[$i] == "[") {
                        $brackets++;
                    } else if($source[$i] == "]") {
                        $brackets--;
                    }
                }
            }
            break;
        case "]" :
            if($chain[$cell]) {
                $brackets = 1;
                while($brackets) {
                    $i--;
                    if($source[$i] == "]") {
                        $brackets++;
                    } else if($source[$i] == "[") {
                        $brackets--;
                    }
                }
            }
            break;
    }
}
?>
