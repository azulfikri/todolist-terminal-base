<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
function viewAddTodoList()
{
    $add = "MENAMBAH TODO";
    echo $add . PHP_EOL;
    echo str_repeat("=", strlen($add)) . PHP_EOL;
    $todo = input("Tambah Todo (x untuk membatalkan)");
    if ($todo == "x") {
        // batal
        $batal = "batal menambah todo";
        echo $batal . PHP_EOL;
        echo str_repeat("+", strlen($batal)) . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
