<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Users;

class UserController extends Controller
{
    public function getUser()
    {
        $data['users'] = Users::orderBy('id', 'desc')->get();
        //dd($data);
        return view('user', $data);
    }

    public function getAddUser()
    {
        return view('add_user');
    }

    public function postAddUser(AddUserRequest $request)
    {
        $user = new Users();

        $user->fullname = $request->fullname;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->id_number = $request->id_number;
        $user->save();
        return redirect('user')->with('newNotification', 'Đã thêm thành công bản ghi mới');
    }

    public function getEditUser($idUser)
    {
        $data['user'] = Users::find($idUser);
        return view('edit_user', $data);
    }

    public function postEditUser(EditUserRequest $request, $idUser)
    {
        $user = Users::find($idUser);
        $user->fullname = $request->fullname;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->id_number = $request->id_number;
        $user->save();
        return redirect('user')->with('newNotification', 'Đã sửa bản ghi thành công');
    }

    public function deleteUser($idUser)
    {
        Users::find($idUser)->delete();
        return redirect('/user')->with('newNotification', 'Đã xóa thành công');
    }

    public function searchUser(Request $request)
    {
        $search = $request->search;
        $data['users'] = Users::where('fullname', 'like', "%" . $search . "%")->orWhere('id_number', 'like', "%" . $request->search . "%")->paginate(5);
        return view('user', $data);
    }
}
