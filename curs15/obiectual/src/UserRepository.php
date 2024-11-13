<?php

namespace Obiectual;

use PDO;

class UserRepository extends Repository
{
    private User $user;

    /*
    public function __construct(User $user)
    {
        $this->user = $user;
        parent::__construct();
    }
    */

    public function save($user): void
    {
        $this->user = $user;
        $sql = 'INSERT INTO users (username, password, full_name) VALUES (:user, :pass, :full_name)';
        $statemnt = $this->pdo->prepare($sql);
        $statemnt->execute([
            ':user' => $this->user->getUsername(),
            ':pass' => $this->user->getPassword(),
            ':full_name' => $this->user->getFullName()
        ]);
    }

    public function getUsers(): array
    {
        $sql = 'SELECT * FROM users';
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);
        $usersArray = [];
        foreach ($users as $user) {
            $userObject = new User(
                $user['username'],
                $user['password'],
                $user['full_name']
            );
            $userObject->setId($user['id']);
            $usersArray[] = $userObject;
        }
        return $usersArray;
    }
}