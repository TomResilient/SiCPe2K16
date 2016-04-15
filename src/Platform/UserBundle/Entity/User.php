<?php 

// src/Platform/UserBundle/User.php 

namespace Platform\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="si_user")
*/

class User extends BaseUser
{

/**
* @ORM\id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/

	protected $id;

}

?>