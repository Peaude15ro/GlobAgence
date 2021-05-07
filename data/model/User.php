<?php


/**
 * Class User
 */
class User extends Model
{
    /**
     * @var
     */
    //protected $id;
    /**
     * @var
     */
    //protected $firstname;
    /**
     * @var
     */
    //protected $lastname;
    /**
     * @var
     */
    //protected $email;
    /**
     * @var
     */
    //protected $password;
    /**
     * @var
     */
    //protected $isAdmin;
    /**
     * @var Role
     */
    //protected $role;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstName = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void
    {
        $this->lastName = $lastname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * @param mixed $isAdmin
     */
    public function setIsAdmin($isAdmin): void
    {
        $this->isAdmin = $isAdmin;
    }

    /**
     * @return Role
     */
    public function getRole(): Role
    {
        $this->role=Role::find($this->role_id);
        return $this->role;
    }

    /**
     * @param Role $role
     */
    public function setRole(Role $role): void
    {
        $this->role = $role;
    }

    public static function findOneWithCredentials($userEmail, $userPwd)
    {
        $results=self::where("email='".$userEmail."' AND password='".sha1($userPwd)."'");
        if(isset($results[0]))
            return $results[0];
        else
            return null;
    }
}