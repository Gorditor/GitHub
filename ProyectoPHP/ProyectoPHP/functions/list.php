<?php

// Carga las tareas que existen en el JSONs
$tasks = loadTasks();

// Guarda el filtro opcional
$filter = $argv[2] ?? null;

// Recorre todas las tareas
foreach($tasks as $task) {

    // Si el filtro es "--completed", solo enseña las completadas
    if($filter === '--completed' && !$task['completed']) continue;
    
    // Si el filtro es "--pending", solo enseña las no completadas
    if($filter === '--pending' && $task['completed']) continue;

    // Enseña los datos de cada tarea
    echo "ID: {$task['id']}\n";
    echo "Titulo: {$task['title']}\n";
    echo "Descripcion: {$task['description']}\n";
    echo "Fecah limite: {$task['due_date']}\n";
    echo "Completado: " . ($task['completed'] ? 'Yes' : 'No') . "\n";
    echo "-------------------------\n";
}
