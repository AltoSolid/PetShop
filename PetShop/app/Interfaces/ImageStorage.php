<?php
//Author: Santiago Hincapié Murillo

namespace App\Interfaces;

use Illuminate\Http\Request;

interface ImageStorage
{
    public function store(Request $request);
}
