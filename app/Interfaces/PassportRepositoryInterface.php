<?php

namespace App\Interfaces;

interface PassportRepositoryInterface 
{ 
    public function storePassport($request);
    public function storeCompanion($request,$passport);
    public function storeAccommodation($request);
    public function storeConfirm();
    
    
}