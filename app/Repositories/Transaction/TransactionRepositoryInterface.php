<?php

namespace App\Repositories\Transaction;

interface TransactionRepositoryInterface
{
    /**
     * Create a new transaction
     *
     * @return JSON
     */
    public function CreateTransaction($request_data);

    /**
     * Update transaction
     * 
     * @return JSON
     */
      public function UpdateTransaction($request_data);
      
    /**
     * Fetch a transaction record
     * 
     * @return JSON
     */
    public function FetchTransaction($request_data);
    
    /**
     * Fetch a list of all transactions
     * 
     * @return JSON
     */
    public function FetchAllTransactions($request_data);
}