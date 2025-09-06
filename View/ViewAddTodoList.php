<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
function viewAddTodoList()
{
    $add = "MENAMBAH TODO";
    echo $add . PHP_EOL;
    echo str_repeat("=", strlen($add)) . PHP_EOL;
    $todo = input("Todo (x untuk membatalkan)");
    if ($todo == "x") {
        // batal
        echo "batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
