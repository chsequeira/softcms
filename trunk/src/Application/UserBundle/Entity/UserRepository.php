<?php

namespace Application\UserBundle\Entity;

use Symfony\Component\Security\User\UserProviderInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\User\AccountInterface;

class UserRepository extends EntityRepository implements UserProviderInterface {

    /**
     * Loads the user for the account interface.
     *
     * It is up to the implementation if it decides to reload the user data
     * from the database, or if it simply merges the passed User into the
     * identity map of an entity manager.
     *
     * @throws UnsupportedAccountException if the account is not supported
     * @param AccountInterface $user
     *
     * @return AccountInterface
     */
    function loadUserByAccount(AccountInterface $user) {
        return $this->_em->find($user, $user->getUsername());
//        return $this->loadUserByUsername($user->getUsername());
    }

    /**
     * Loads the user for the given username.
     *
     * This method must throw UsernameNotFoundException if the user is not
     * found.
     *
     * @throws UsernameNotFoundException if the user is not found
     * @param string $username The username
     *
     * @return AccountInterface
     */
    function loadUserByUsername($username) {
        return $this->findOneBy(array('email' => $username));
    }
}
