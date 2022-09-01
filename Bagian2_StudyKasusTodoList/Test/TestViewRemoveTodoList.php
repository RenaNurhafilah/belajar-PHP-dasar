<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Rena");
addTodoList("Nurhafilah");
addTodoList("Hafidzah");
addTodoList("Inpired");
addTodoList("Muslimah");

showTodoList();

viewRemoveTodoList();

showTodoList();
