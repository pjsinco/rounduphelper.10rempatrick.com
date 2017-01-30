<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RendersController extends Controller
{
    public function show($owner, $type)
    {
        $templateName = 'renders.' . $owner . '.' . $type;
        return view($templateName);
    }
}
