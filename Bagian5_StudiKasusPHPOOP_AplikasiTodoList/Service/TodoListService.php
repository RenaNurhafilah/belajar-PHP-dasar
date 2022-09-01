<?php

namespace Service {

    use Entity\TodoList;
    use Repository\TodoListRepository;

    interface TodoListService {
        function showTodoList(): void;

        function addTodoList(string $todo): void;

        function removeTodolist(int $number): void;
    }

    class TodoListServiceImpl implements TodoListService {

        private TodoListRepository $todoListRepository;

        public function __construct(TodoListRepository $todoListRepository) {
            $this->todoListRepository = $todoListRepository;
        }

        function showTodoList(): void
        {
            echo "TODOLIST" . PHP_EOL;
            $todoList = $this->todoListRepository->findAll();
            foreach ($todoList as $number => $value) {
                echo "$number. ". $value->getTodo() . PHP_EOL;
            }
        }

        function addTodoList(string $todo): void
        {
            $todoList = new TodoList($todo);
            $this->todoListRepository->save($todoList);
            echo "SUKSES MENAMBAH TODOLIST" . PHP_EOL;
        }

        function removeTodolist(int $number): void
        {
            if($this->todoListRepository->remove($number)) {
                echo "SUKSES MENGHAPUS TODOLIST" . PHP_EOL;
            } else {
                echo "GAGAL MENAMBAH TODOLIST" . PHP_EOL;
            }
        }
    }
}
