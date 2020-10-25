<?php

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    /**
     * Register a new user
     *
     * @return JSON
     */
    public function CreateUser($request_data);

    /**
     * Update user details
     * 
     * @return JSON
     */
      public function UpdateUserDetails($request_data);
      
    /**
     * Update user role
     * 
     * @return JSON
     */
    public function UpdateUserRole($request_data);
    
    /**
     * Change user password
     * 
     * @return JSON
     */
    public function ChangeUserPassword($request_data);
}