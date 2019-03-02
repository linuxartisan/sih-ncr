<?php

namespace App\Workers\Repositories;

use App\User;
use App\Workers\Helpers\Constants;

/**
* Repository for user
*/
class UserRepository extends Repository
{

    /**
     * Delete an user
     *
     * @param  \App\User &$user
     * @return boolean
     */
    public function deleteUser(User &$user)
    {
        return $user->delete();
    }

    /**
    * Store a new user record.
    *
    * @param  \App\User &$user
    * @param  array $input
    * @return boolean
    */
    public function storeUser(User &$user, $input)
    {
        $this->populateFields($user, $input);

        $user->password = bcrypt(env('DEFAULT_USER_PWD', '123456'));

        $status = $user->save();

        // if ($status) {
        //     $this->associateRoles($user, $input['role_id']);
        // }

        return $status;
    }

    /**
    * Update an existing user record.
    *
    * @param  \App\User &$user
    * @param  array $input
    * @return boolean
    */
    public function updateUser(User &$user, $input)
    {
        $this->populateFields($user, $input);

        $status = $user->update();

        // if ($status) {
        //     $this->associateRoles($user, $input['role_id']);
        // }

        return $status;
    }

    /**
     * Change password of the specified resource.
     *
     * @param  \App\User  &$user
     * @param  string  $password
     * @return boolean
     */
    public function changePassword(User &$user, $password)
    {
        $user->password = bcrypt($password);

        return $user->update();
    }

    /****************************
     * Helper functions
     ****************************/

    /**
     */
    // protected function associateRoles(User &$user, $roles)
    // {
    //    $user->roles()->sync($roles);
    // }

    /**
     * Populate the model's fields.
     *
     * @param  \App\User  &$user
     * @param  array  $input
     */
    protected function populateFields(User &$user, $input)
    {
        $user->identifier = $input['identifier'];
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->mobile = $input['mobile'];
        $user->type = $input['type_id'];
    }

}
