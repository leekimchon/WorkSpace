<?php 
class User{
    protected string $name;
    protected string $email;
    public int $role;
    public function __construct($name, $email, $role){
        $this->name=$name;
        $this->email=$email;
        $this->role=$role;
    }
    public function getInfo(){
        return $this->name.$this->email.$this->role;
    }
    public function isAdmin(){
        if($this->role==1){
            echo 'La Admin';
        }else if($this->role==2){
            echo 'La User';
        }
    }
}
$user1 = new User('chon', '123@gmail.com',2);
echo $user1->getInfo().'<br>';
$user1->isAdmin();
?>