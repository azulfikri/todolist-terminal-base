<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";


addTodoList('Eko');
addTodoList('Kurniawan');
addTodoList('Khannedy');
addTodoList('Achmad');
addTodoList('Zulfikri');
showTodoList();
removeTodoList(2);
showTodoList();
removeTodoList(2);
showTodoList();
removeTodoList(2);
showTodoList();
$success = removeTodoList(3);
var_dump($success);
removeTodoList(2);
showTodoList();
addTodoList('Programmer');
showTodoList();
