<?php
$tasks = array(
    array(                                    
        'classname' => 'quiz_nitroreportpdf\task\mathmlatex',
		'blocking' => 0,                                 
        'minute' => '*/10',                
        'hour' => '*',                   
        'day' => '*',                     
        'dayofweek' => '*',           
        'month' => '*'                  
    ),
    array(                                    
        'classname' => 'quiz_nitroreportpdf\task\clearcache',
		'blocking' => 0,                                 
        'minute' => '*',                
        'hour' => '*/12',                   
        'day' => '*',                     
        'dayofweek' => '*',           
        'month' => '*'                  
    )	
);
?>