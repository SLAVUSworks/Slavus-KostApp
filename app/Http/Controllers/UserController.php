<?php

namespace App\Http\Controllers;
  
use App\Models\Room;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::orderBy('created_at', 'ASC')->paginate(999);
    
        return view('users.index',compact('rooms'))
            ->with('i', (request()->input('page', 1) - 1) * 999);
    }
}
