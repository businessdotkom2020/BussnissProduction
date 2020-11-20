<?php


namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Models\Moderator;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use DB;
use Illuminate\Support\Arr;
use Hash;


class ModeratorController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:admin-list|admin-create|admin-edit|admin-delete', ['only' => ['index','show']]);
        $this->middleware('permission:admin-create', ['only' => ['create','store']]);
        $this->middleware('permission:admin-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:admin-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Moderator::orderBy('id','DESC')->get();
        return view('backend.moderators.index',compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('backend.moderators.create',compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'numeric',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);


        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = Moderator::create($input);
        if($request->status){
            $user->status = 1;
        }else{
            $user->status = 0;
        }
        $user->save();
        $user->assignRole($request->input('roles'));

        return redirect()->route('moderators.index')
            ->with('success','User created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Moderator::find($id);
        return view('backend.moderators.show',compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $moderator = Moderator::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $moderator->roles->pluck('name','name')->all();

        return view('backend.moderators.edit',compact('moderator','roles','userRole'));
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
        $user = Moderator::find($id);
        if($user->email == $request->email){
            $this->validate($request, [
                'name' => 'required',
                'status' => 'numeric',
                'email'=>'required|email',
                'password' => 'same:confirm-password',
                'roles' => 'required'
            ]);
        }else{
            $this->validate($request, [
                'name' => 'required',
                'status' => 'numeric',
                'email'=>'required|email|unique:users,email,'.$id ,
                'password' => 'same:confirm-password',
                'roles' => 'required'
            ]);
        }

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }
        $user->update($input);
        if($request->status){
            $user->status = 1;
        }else{
            $user->status = 0;
        }
        $user->save();

        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('moderators.index')
            ->with('success','User updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Moderator::find($id)->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}