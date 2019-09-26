<?php

namespace App\Http\Controllers;

use App\User;
use App\Events\UserUpdated;
use App\Http\Requests\userRequest;
use http\Message;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;
use App\Policies\userPolicy;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getPaginated()
    {
       return User::with(['user'])
                            ->orderBy('created_at',\request('sorted','DESC'))
                            ->paginate(10);
        return User::paginate(8)
                    ->orderBy('created_at',\request('sorted','DESC'));
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
        $user = User::findOrFail($id);
        return view('users.show',[
            'user'=>$user
        ]);
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
        $user = User::find($id);
        $this->authorize($user);
        return view('users.edit',[
            'user'=> $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(userRequest $request,$id)
    {
        //
        $user = User::find($id);
        $this->authorize($user);
        $user->update($request->validationData());
//        event(new UserUpdated($user));
        return back()->with('info','Usuario actualizado');
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
        $user = User::findOrFail($id);
        $this->authorize($user);
        $user->delete();
        return back()->with('info','Usuario eliminado');
    }
}
