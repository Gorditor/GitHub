<?php

// Carga las tareas que existen en el JSON
$tasks = loadTasks();

// Guarda en una variable el valor de la tarea que se quiere completar
$id = (int)($argv[2] ?? 0);

// Variable para decir si se ha completado o no 
$completed = false;

// Recorre las tareas hasta encontrar la indicada
foreach($tasks as &$task) {

    // Si lo encuentra, la actualiza
    if ($task['id'] === $id) {
        $task['completed'] = true;
        $completed = true;
        break;
    }
}

// Si se ha completado, se guarda
if($completed) {

    saveTasks($tasks);
    echo "Tarea marcada como completada.\n";
} else{
    echo "Error: Tarea no encontrada.\n";
}
