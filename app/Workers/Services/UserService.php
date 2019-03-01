<?php

namespace App\Workers\Services;

use App\User;
use App\Workers\Repositories\UserRepository;

class UserService extends Service
{
     /**
     * Delete an existing user record.
     *
     * @param \App\User &$user
     * @return boolean or int
     */
    public function deleteUser(User &$user)
    {
        $repository = new UserRepository;
        return $repository->deleteUser($user);
    }

    /**
     * Create and store a new user record.
     *
     * @param \App\User &$user
     * @param array $input
     * @return boolean
     */
    public function storeUser(User &$user, $input)
    {
        $repository = new UserRepository;
        return $repository->storeUser($user, $input);
    }

    /**
     * Update an existing user record.
     *
     * @param \App\User &$user
     * @param array $input
     * @return boolean
     */
    public function updateUser(User &$user, $input)
    {
        $repository = new UserRepository;
        return $repository->updateUser($user, $input);
    }

    /**
     * Change password of the specified resource.
     *
     * @param  \App\User  &$user
     * @param  string  $new_password
     * @return boolean
     */
    public function changePassword(User &$user, $new_password)
    {
        $repository = new UserRepository;
        return $repository->changePassword($user, $new_password);
    }

}
