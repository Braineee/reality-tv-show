<?php

namespace App\Repositories\Transaction;

use App\Models\Transaction;
use App\Repositories\Transaction\TransactionRepositoryInterface;

class TransactionRepository implements TransactionRepositoryInterface 
{

	/**
	 * @param Array
	 * @return JSON
	 */
	public function CreateTransaction($requestData)
	{
		// Store the Transaction data
		$createTransaction = Transaction::create((array)$requestData);
		// Check if operation was successfull
		if ($createTransaction) return $createTransaction;

		return false;
	}

	/**
	 * @param Array
	 * @return JSON
	 */
	public function UpdateTransaction($requestData)
	{
		return false;
	}

	/**
	 * @param Array
	 * @return JSON
	 */
	public function FetchTransaction($requestData)
	{
		return false;
	}

	/**
	 * @param Array
	 * @return JSON
	 */
	public function FetchAllTransactions($requestData)
	{
		return false;
	}
}