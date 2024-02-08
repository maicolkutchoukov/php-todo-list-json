<?php

// Recupero il contenuto del file contenente i dati

$stringaJSONPresaDalDB = file_get_contents('todo.json');




// Trasformo la stringa in una struttura dati utilizzabile in PHP

$todos = json_decode($stringaJSONPresaDalDB, true);




// Qui dentro metto tutti gli studenti "validi"

$allTodos = [];


    

        $alltodos[] = $todos;








// Dico al client che la risposta contiene un json

header('Content-Type: application/json');




// Rispondo con il json preso dal file

echo json_encode($allTodos);