<?php

class Usuario{
    public $nombre;

    public $apellidos;

    public $email;

    public $password;

function getNombre(){
    return $this->nombre;
}
    function getApellido(){
    return $this->apellidos;
}
    function getEmail(){
    return $this->email;

}
    function getPassword(){
    return $this->password;
}


function setNombre(){
    return $this->nombre;
}
    function setApellido(){
    return $this->apellidos;
}
    function setEmail(){
    return $this->email;

}
    function setPassword(){
    return $this->password;
}


}


