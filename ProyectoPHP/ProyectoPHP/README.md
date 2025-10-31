GESTOR DE TAREAS EN PHP

El proyecto se trata de una aplicación hecho con PHP que permite gestionar tareas. El usuario puede tanto agregar, como editar, eliminar, completar y listar las tareas desde la consola. Todo mientars las tareas se almacenan en un JSON para que los datos se conserven.

Estructura del proyecto:

- task.php: Archivo principal que lleva los comandos introducidos
- tasks.json: Archivo donde se guardan todas las tareas
- functions/: Carpeta qeu contiene las funcionalidades
    - add.php: Agrega una nueva tarea
    - delete.php: Borra una tarea por le ID
    - edit.php: Modifica una tarea existente
    - complete.php: Marca una tarea como completada
    - list.php: Enseña las tareas, pudiendo filtrarlas
    - helpers.php: Funciones comunes necesarias

Requisitos: 

- Tener PHP instalado y que se pueda usar desde consola
- No es necesario navegador
- Compatible tanto con Windows como con Linux

Uso desde la terminal (Si no pones ningún comando o pones el comando "help", aparece): 

php task.php add "Título" "Descripción" "YYYY-MM-DD"
php task.php delete ID
php task.php edit ID "Nuevo título" "Nueva descripción" "YYYY-MM-DD"
php task.php complete ID
php task.php list
php task.php list --completed
php task.php list --pending
php task.php help




