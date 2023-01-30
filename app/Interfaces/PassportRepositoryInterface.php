<?php

namespace App\Interfaces;

interface PassportRepositoryInterface 
{
    public function getAllOrders();
    public function getOrderById($orderId);
    
}