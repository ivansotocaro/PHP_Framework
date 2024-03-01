<?php

class UserModel extends Connection{
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
        $sql = "SELECT u.*, c.id, c.box FROM users u INNER JOIN box c ON u.id_box = c.id;";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}

