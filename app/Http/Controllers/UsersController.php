<?php

namespace App\Http\Controllers;

use App\Yahp\Services\UserService;

class UsersController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the users
     *
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            'clientes' => $this->userService->renderList(),
        ];

        return view('users.index',$data);
    }

    /**
     * Display a listing of the users
     *
     * 
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $data = [
            
        ];

        return view('users.create',$data);
    }
}
