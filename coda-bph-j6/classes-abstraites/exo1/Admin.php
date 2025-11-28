<?php
class Admin extends AbstractUser
{
    public function __construct(protected string $username, protected string $password, protected string $role)
    {
        parent::__construct($username, $password, "ADMIN");
    }

    public function changeMemberRole(Member $member) : void
    {
        $role_act=$member->getRole();

        if ($role_act==="MEMBER")
        {
            $member->setRole("PREMIUM_MEMBER");
        } 
        else 
        {
            $member->setRole("MEMBER");
        }
    }
}
?>