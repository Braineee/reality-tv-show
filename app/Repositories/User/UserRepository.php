<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface 
{

	/**
	 * @param Array
	 * @return JSON
	 */
	public function checkIfUserExist($requestData)
	{
		$userExisitPreviously = User::where('user_email', $requestData->user_email)
									->orWhere('user_phone', $requestData->user_phone)
									->count();
		if ($userExisitPreviously > 0) return true;
		return false;
	}

	/**
	 * @param Array
	 * @return JSON
	 */
	public function assignUserRole($requestData)
	{
		switch ($requestData) {
			case 'voter':// Return the voters uuid
				return env('VOTERS_UUID');
				break;
			
			case 'contestant': // Return contestant role uuid
				return env('CONTESTANTS_UUID');
				break;
			
			default: // Return user role uuid as default
				return env('USERS_UUID');
				break;
		}
	}

	/**
	 * @param Array
	 * @return JSON
	 */
	public function CreateUser($requestData)
	{
		// Check if the user exisit previously
		if ($this->checkIfUserExist($requestData) == true) throw new \Exception('This email or phone number has been registered to an account.');
		// Make the user's phone number their default password
		$requestData->user_password = $requestData->user_phone;
		// Give the user a default role of (user)
		$requestData->role_uuid = $this->assignUserRole($requestData->role);
		// Store the user's data
		$createUser = User::create((array)$requestData);
		// Check if operation was successfull
		if ($createUser) return $createUser;

		return false;
	}

	/**
	 * @param Array
	 * @return JSON
	 */
	public function UpdateUserDetails($requestData)
	{
		// Give the user a default role of (user)
		$requestData->role_uuid = $this->assignUserRole($requestData->role);
		// Update the user details
		$updateUser = User::where('user_uuid', $requestData->user_uuid)->update((array)$requestData);
		// Check if operation was successfull
		if ($updateUser) return $updateUser;

		return false;
	}

	/**
	 * @param Array
	 * @return JSON
	 */
	public function UpdateUserRole($requestData)
	{
		// Give the user a default role of (user)
		$requestData->role_uuid = $this->assignUserRole($requestData->role);
		// Update the user role UUID
		$updateUserRole = User::where('user_uuid', $requestData->user_uuid)->update((array)$requestData);
		// Check if operation was successfull
		if ($updateUserRole) return $updateUserRole;

		return false;
	}

	/**
	 * @param Array
	 * @return JSON
	 */
	public function ChangeUserPassword($requestData)
	{
		// Update the users password
		$updateUserPassword = User::where('user_uuid', $requestData->user_uuid)->update($requestData);
		// Check if operation was successfull
		if ($updateUserPassword) return $updateUserPassword;

		return false;
	}
}