<?php
//All models extend from Model
class LoginModel extends Connection{
    /**
     * @var PDO
     */
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function getUser(): array
    {
        $stmt = $this->con->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


}