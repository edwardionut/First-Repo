<?php

namespace Obiectual;

class DetailsRepository extends Repository
{
    private Details $details;

    public function __construct(Details $details)
    {
        $this->details = $details;
        parent::__construct();
    }

    public function save(): void
    {
        $sql = "INSERT INTO details (user_id, email, city) VALUES (:user_id, :email, :city)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([
           ':user_id' => $this->details->getUserId(),
           ':email' => $this->details->getEmail(),
           ':city' => $this->details->getCity(),
        ]);
    }
}