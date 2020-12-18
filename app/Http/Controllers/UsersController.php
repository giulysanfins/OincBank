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

        /**
     * Display a listing of the users
     *
     * 
     * @return \Illuminate\View\View
     */
    public function destroy(Request $request,$id)
    {
        try {
            $update = $this->userService->buildUpdate($id,[
                'status' => 0
            ]);
            alert()->success('Sucesso','Usuário deletado com sucesso.')->persistent('Fechar');
            return redirect()->route('usuario.index');

        } catch (\Exception $e) {
            \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
            alert()->error('Erro','Erro em deletar o usuario.')->persistent('Fechar');
            return redirect()->route('usuario.index')->withInput();
        }
    }

    /**
     * Display a listing of the users
     *
     * 
     * @return \Illuminate\View\View
     */
    public function disable(Request $request,$id)
    {
        try {
            $update = $this->userService->buildUpdate($id,[
                'status' => 2
            ]);
            alert()->success('Sucesso','Usuário desativado com sucesso.')->persistent('Fechar');
            return redirect()->route('usuario.index');

        } catch (\Exception $e) {
            \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
            alert()->error('Erro','Erro em desativar o usuario.')->persistent('Fechar');
            return redirect()->route('usuario.index')->withInput();
        }
    }

    /**
     * Display a listing of the users
     *
     * 
     * @return \Illuminate\View\View
     */
    public function ativar(Request $request,$id)
    {
        try {
            $update = $this->userService->buildUpdate($id,[
                'status' => 1
            ]);
            alert()->success('Sucesso','Usuário ativado com sucesso.')->persistent('Fechar');
            return redirect()->route('usuario.index');

        } catch (\Exception $e) {
            \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
            alert()->error('Erro','Erro em ativado o usuario.')->persistent('Fechar');
            return redirect()->route('usuario.index')->withInput();
        }
    }
}
