<?php
// src/Controller/GravityController.php

namespace App\Controller;

class GravityController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $gravity = $this->Paginator->paginate($this->Gravity->find());
        $this->set(compact('gravity'));
    }
}