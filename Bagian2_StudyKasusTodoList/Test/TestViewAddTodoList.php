<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Rena");
addTodoList("Nurhafilah");
addTodoList("Hafidzah");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();
