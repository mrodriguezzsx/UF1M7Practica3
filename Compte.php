<?php
class Compte {
    private $user = "Mati";
    private $cuenta = 1000;

    /**
     * @param string $user
     * @param int $cuenta
     */
    public function __construct($user, $cuenta)
    {
        $this->user = $user;
        $this->cuenta = $cuenta;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return int
     */
    public function getCuenta()
    {
        return $this->cuenta;
    }

    /**
     * @param int $cuenta
     */
    public function setCuenta($cuenta)
    {
        $this->cuenta = $cuenta;
    }
    function afegir() {
        $bar = new cuenta( "Mati", 1000);



    }
}