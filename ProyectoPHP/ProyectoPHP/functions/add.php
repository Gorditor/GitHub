<?php

// Carga las tareas que existen en el JSON
$tasks = loadTasks();

// Genera una nueva ID para la nueva tarea(Está en helpers)
$id = generateNewId($tasks);

// Guarda los valores de la tarea en variables
$title = $argv[2] ?? '';
$description = $argv[3] ?? '';
$dueDate = $argv[4] ?? '';

// Valida que la fecha esté correcta
if(!validateDate($dueDate)) {
    
    echo "Error: Formato inválido de fecha.\n";
    exit;
}

// Crea la nueva tarea y la añade al JSON
$tasks[] = [

    'id' => $id,
    'title' => $title,
    'description' => $description,
    'due_date' => $dueDate,
    'completed' => false
];

saveTasks($tasks);
echo "Tarea añadida correctamente.\n";
