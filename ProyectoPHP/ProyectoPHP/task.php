<?php

// Cargamos las funciones comunes desde helpers
require_once 'functions/helpers.php';

// Enseña el menú de opciones
function mostrarMenu() {
    echo "\nGESTOR DE TAREAS - MENÚ\n";
    echo "-------------------------------------\n";
    echo "Comandos disponibles:\n";
    echo "add \"Título\" \"Descripción\" \"YYYY-MM-DD\" → Agregar tarea\n";
    echo "delete ID → Eliminar tarea\n";
    echo "edit ID \"Nuevo título\" \"Nueva descripción\" \"YYYY-MM-DD\" → Editar tarea\n";
    echo "complete ID → Marcar tarea como completada\n";
    echo "list → Listar todas las tareas\n";
    echo "list --completed → Listar solo tareas completadas\n";
    echo "list --pending → Listar solo tareas pendientes\n";
    echo "help → Mostrar este menú\n";
    echo "-------------------------------------\n\n";
}

$command = $argv[1] ?? null;

// Si no se pasa ningún comando o se pide ayuda, enseña el menú
if($command ===null || $command ==='help') {
    mostrarMenu();
    exit;
}

// Seleccionamos el primer argumento donde se indica el comando
$order = $argv[1] ?? null;

//  Depende del comando se elije la función
switch($order) {
    case 'add':
        require 'functions/add.php';
        break;
    case 'delete':
        require 'functions/delete.php';
        break;
    case 'edit':
        require 'functions/edit.php';
        break;
    case 'complete':
        require 'functions/complete.php';
        break;
    case 'list':
        require 'functions/list.php';
        break;
    default:
        // Si no se reconoce, enseña que comandos son los correctos 
        echo "Comando desconocido. Prueba con: add, delete, edit, complete, list o help.\n";
}



?>