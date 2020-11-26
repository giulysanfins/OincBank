<?php

namespace App\Http\Controllers;

use App\Yahp\Services\UserService;
use Illuminate\Http\Request;

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

        return view('admin.config.users.index',$data);
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

        return view('admin.config.users.create',$data);
    }

    /**
     * Display a listing of the users
     *
     * 
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $data = [
            'user' => $this->userService->renderEdit($id),        
        ];

        return view('admin.config.users.edit',$data);
    }

    /**
     * Display a listing of the users
     *
     * 
     * @return \Illuminate\View\View
     */
    public function update(Request $request,$id)
    {
        try {
            $update = $this->userService->buildUpdate($id,$request->all());
            alert()->success('Sucesso','Usuário alterado com sucesso.')->persistent('Fechar');
            return redirect()->route('usuario.edit',$id);

        } catch (\Exception $e) {
            \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
            alert()->error('Erro','Erro em alterar o usuario.')->persistent('Fechar');
            return redirect()->route('usuario.edit',$id)->withInput();
        }
    }
}
