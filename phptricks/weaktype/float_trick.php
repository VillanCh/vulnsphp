<?php
    echo 'This page is for float_trick! <br>';

    
    $fill = '0.';
    for ($i = 0; $i < 20; $i ++ ):
        $fill = $fill.'0';
        $val1 = floatval($fill.'1');
        $val2 = floatval($fill.'2');
        
        echo $val1,'==',$val2, ' result: ', $val1 == $val2, '<br>';
        
    
    endfor;
    
    echo '----------------------------------------------------------------------<br>';
    
    $fill = '2.';
    for ($i = 0; $i < 20; $i ++ ):
        $fill = $fill.'0';
        $val1 = floatval($fill.'1');
        $val2 = floatval($fill.'2');
    
    echo $val1,'==',$val2, ' result: ', $val1 == $val2, '<br>';
    
    
    endfor;
    
    echo '----------------------------------------------------------------------<br>';
    
    $fill = '2.';
    for ($i = 0; $i < 20; $i ++ ):
    $fill = $fill.'3';
    $val1 = floatval($fill.'1');
    $val2 = floatval($fill.'2');
    
    echo $val1,'==',$val2, ' result: ', $val1 == $val2, '<br>';
    
    
    endfor;
?> 