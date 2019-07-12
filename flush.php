    echo "<pre>";
function callback($a){

    ob_flush();
    flush();
    sleep(1);
    print($a);
    return $a * 5;
    
}


$arr = [1,2,3,4,5];

$b = array_map("callback",$arr);

