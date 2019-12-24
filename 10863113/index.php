<?php
    $imgRnd = array("ANIMALS","ARCHITECTTURE","NATURE","PEOPLE","TECH");
    for($i=0;$i<10;$i++){
        $imgUrl="https://placeimg.com/30".($i%10)."/300/".$imgRnd[rand(0,4)];
        echo "<img src='".$imgUrl."'>".PHP_EOL;
    }
?>