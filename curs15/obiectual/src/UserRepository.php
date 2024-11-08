<?php

namespace Obiectual;

class UserRepository extends Repository
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
        parent::__construct();
    }

    public function save(): void
    {
        $sql = 'INSERT INTO users (username, password, full_name) VALUES (:user, :pass, :full_name)';
        $statemnt = $this->pdo->prepare($sql);
        $statemnt->execute([
            ':user' => $this->user->getUsername(),
            ':pass' => $this->user->getPassword(),
            ':full_name' => $this->user->getFullName()
        ]);
    }
}