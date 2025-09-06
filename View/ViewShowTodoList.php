<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/ViewAddTodoList.php";
require_once __DIR__ . "/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowTodoList()
{
    global $todoList;
    while (true) {
        ShowTodoList();
        if (!$todoList) {
            echo "Tidak ada data Todo" . PHP_EOL;
        } else {
            echo "+++++++++++++++++++++" . PHP_EOL;
        }

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");
        if ($pilihan == "1") {
            viewAddTodoList();
        } else if ($pilihan == "2") {
            viewRemoveTodoList();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan Tidak Ditemukan" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa Lagi" . PHP_EOL;
}
