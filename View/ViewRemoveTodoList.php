<?php


require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
function viewRemoveTodoList()
{
    $remove = "MENGHAPUS TODO";
    echo $remove . PHP_EOL;
    echo str_repeat("=", strlen($remove)) . PHP_EOL;
    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == "x") {
        echo "batal menghapus todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Sukses Menghapus Todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal Menghapus Todo nomor $pilihan" . PHP_EOL;
        }
    }
}
