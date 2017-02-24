<?php

namespace Tendaz\Http\Controllers\Admin\Account;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tendaz\Http\Requests;
use Tendaz\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('admin.account.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request , [
            'image' => 'image|between:1
           ,100'
        ]);
        $user = Auth('admins')->user();
        $user->name = $request->get('name');
        $user->last_name = $request->get('last_name');
        $user->image = $request->file('image');
        if(Hash::check($request->get('actual'),$user->password)){
            $user->password = $request->get('password');
            $message = 'Datos cambiados correctamente';
        }else{
            if(empty($request->get('actual'))){
                $message = 'Datos cambiados correctamente';
            }else{
                $message = 'Las contrase&ntilde;as no coinciden';
            }
        }
        $user->save();
        return redirect()->back()->with('message',['type' => 'success' , 'message' =>$message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
