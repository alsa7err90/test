<?php

namespace App\Repositories;
 
use App\Interfaces\PassportRepositoryInterface;
use App\Models\Order;

class PassportRepository implements PassportRepositoryInterface 
{
    public function getAllOrders() 
    {
        // return Trve::all();
    }

    public function getOrderById($orderId) 
    {
        // return Order::findOrFail($orderId);
    }

     
}

