<?php

trait ParentClass {
    public function method(string $name) {

    }
}

class ChildClass extends ParentClass {
    use SampleTrait;

    public function method(int $name) {

    }
}