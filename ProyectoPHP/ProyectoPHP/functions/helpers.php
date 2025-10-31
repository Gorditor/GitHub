<?php

// Carga las tareas que existen en el JSON aunque no haya ninguna y las devuelve
function loadTasks() {

    if(!file_exists('tasks.json')) return [];
    $json = file_get_contents('tasks.json');
    $data = json_decode($json, true);
    return $data['tasks'] ?? [];
}

// Guarda el array de tareas en el JSON
function saveTasks($tasks) {

    $json = json_encode(['tasks' => $tasks], JSON_PRETTY_PRINT);
    file_put_contents('tasks.json', $json);
}

// Genera un ID para cada nueva tarea
function generateNewId($tasks) {

    $ids = array_column($tasks, 'id');
    return empty($ids) ? 1 : max($ids) + 1;
}

// Verifica que la fecha esté correcta 
function validateDate($date) {

    return preg_match('/^\d{4}-\d{2}-\d{2}$/', $date);
}