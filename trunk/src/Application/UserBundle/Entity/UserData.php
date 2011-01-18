<?php
namespace Application\UserBundle\Entity;

/**
 * @orm:Entity
 */
class UserData {

    /**
     * @orm:Id
     * @orm:Column(type="integer")
     * @orm:GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @orm:Column(type="integer")
     * @orm:OneToOne(targetEntity="User")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    public $user_id;

    /**
     * @orm:Column(nullable=true)
     */
    public $country;

    /**
     * @orm:Column(nullable=true)
     */
    public $city;

    /**
     * @orm:Column(nullable=true)
     */
    public $address;

    /**
     * @orm:Column(nullable=true)
     */
    public $address2;


    public function getId(){
        return $this->id;
    }
}
