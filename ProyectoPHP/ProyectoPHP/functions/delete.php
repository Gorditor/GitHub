<?php

// Carga las tareas que existen en el JSON
$tasks = loadTasks();

// Guara en una variable el valor de la tarea que se quiere eliminar
$id = (int)($argv[2] ?? 0);

// Variable qeu dice si se ha encontrado o no
$found = false;

// Recorre las tareas para encontrar la indicada
foreach($tasks as $i => $task) {

    // Si la encuantra, la borra
    if ($task['id'] === $id) {
        unset($tasks[$i]);
        $found = true;
        break;
    }
}

// Si se encuentra, se guarda
if($found) {
    
    saveTasks(array_values($tasks));
    echo "Tarea borrada.\n";
} else {
    echo "Error: Tarea no encontrada.\n";
}
