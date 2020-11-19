<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Yahp\Services\PhotoService;
use Storage;
use Carbon\Carbon;

class ProfileController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PhotoService $photoService)
    {
        $this->photoService = $photoService;
    }

    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $data = [
            'photo' => $this->photoService->renderPhotoUser('users',auth()->user()->id)
        ];
        return view('profile.edit',$data);
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        try {
            $user_id = auth()->user()->id;

            if($request->file('photo_perfil'))
            {
                $ext = $request->file('photo_perfil')->extension();
                $ts = Carbon::now()->timestamp;
                $filename = $ts."_".$user_id.".".$ext;
                $upload = Storage::putFileAs('public/profile',$request->file('photo_perfil'),$filename);
                $insert = $this->photoService->buildInsert([
                    'area' => 'users',
                    'area_id' => $user_id,
                    'path' => $filename,
                    'principal' => 1,
                ]);
            }

            auth()->user()->update($request->all());
            alert()->success('Sucesso','Perfil atualizado com sucesso.');
            return redirect()->route('profile.edit');
        }
        catch(\Exeception $e){
            \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
            alert()->error('Erro','Erro em atualizar o perfil.')->persistent('Fechar');
            return redirect()->route('profile.edit')->withInput();
        }
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }
}
