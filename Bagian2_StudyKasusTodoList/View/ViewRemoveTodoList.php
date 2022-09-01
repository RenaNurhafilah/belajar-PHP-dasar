<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList() {
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batal)");

    if ($pilihan == "x") {
        echo "Batal Menambah Todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Sukses menghapus to do nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus to do nomor $pilihan" . PHP_EOL;
        }
    }
}
