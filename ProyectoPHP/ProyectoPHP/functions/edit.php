<?php

// Carga las tareas que existen en el JSON
$tasks = loadTasks();

// Guarda en una variable el valor de la tarea que se quiere editar
$id = (int)($argv[2] ?? 0);

// Guarda los valores de la tarea que se quieren cambiar en variables
$title = $argv[3] ?? '';
$description = $argv[4] ?? '';
$dueDate = $argv[5] ?? '';

// Variable para decir si se ha editado o no
$edited = false;

// Recorre las tareas hasta encontrar la indicada
foreach($tasks as &$task) {

    // Si lo encuentra, la actualiza
    if($task['id'] === $id) {
        $task['title'] = $title;
        $task['description'] = $description;
        $task['due_date'] = $dueDate;
        $edited = true;
        break;
    }
}

// Si se ha editado, se guarda
if($edited) {
    
    saveTasks($tasks);
    echo "Tarea actualizada.\n";
} else{
    echo "Error: Tarea no encontrada.\n";
}
