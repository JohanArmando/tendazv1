<?php

namespace Tendaz\Repositories;

use Tendaz\Models\Customer;

class CustomerRepository
{
    protected function selectCustomerList()
    {
        return Customer::selectRaw('customers.*,'
            .'(SELECT COUNT(*) FROM orders WHERE orders.customer_id = customers.id ) as total_orders,'
            .'(SELECT SUM(total) FROM orders WHERE orders.customer_id = customers.id ) as total_amount_orders'
        );
    }
    
    public function getLatestCustomers()
    {
        return $this->selectCustomerList()
            ->with('latestOrder')
            ->orderBy('id' , 'DESC')
            ->get();
    }
}