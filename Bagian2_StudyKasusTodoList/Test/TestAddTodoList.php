<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Rena");
addTodoList("Nurhafilah");
addTodoList("Hafidzah");

var_dump($todoList);