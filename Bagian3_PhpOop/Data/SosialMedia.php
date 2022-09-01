<?php

class SosialMedia {
    public  string $name;
}

class Facebook extends SosialMedia {
    public function login(string $username, string $password): bool {
        return true;
    }
}

//error
class FakeFacebook extends Facebook {
    //error
    public function login(string $username, string $password): bool {
        return false;
    }
}


