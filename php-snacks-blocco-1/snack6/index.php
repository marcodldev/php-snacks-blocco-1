<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];


foreach ( $db as $key => $valore) {
   if ($key == "pm") {
        foreach ($valore as $singoloArray) {
        echo "<br />" ;
        echo $singoloArray["name"];
    } 
        }
     }


?>