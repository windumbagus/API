<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;


class DebugRoleManagementController extends Controller
{
    public function index()
    {
        $RoleManagements=DB::table('MstRole')->get();
        $data = array (
            'RoleManagements'=>$RoleManagements
        );
        return view('debug_role_management',$data);
    }

    public function getById($id=null,Request $request){
        $data=DB::table('MstRole')->where('id',$id)->get();
        return json_encode($data->first());

    }

    public function save(Request $request)
    {
            $data=array(
            'RoleName'=>$request->post('role_management_name_add'),
            'AddedDate'=>now(),
            'UserAdded'=>0,  //HardCopy
            'UpdatedDate'=>now(),
            'UserUpdated'=>12345,  //HardCopy
            'ProductOwner'=>'ACC LMS' //HardCopy
        );
        $status= DB::table('MstRole')->insert($data);
        return redirect('debug_role_management');
    }

    public function update(Request $request){
        $data= array (
            'RoleName'=>$request->post('role_management_name_update'),
            // 'AddedDate'=>now(), gausah karna hanya di awal saja
            // 'UserAdded'=>0,  //HardCopy
            'UpdatedDate'=>now(),
            // 'UserUpdated'=>12345,  //HardCopy
            // 'ProductOwner'=>'ACC LMS' //HardCopy
            );
        DB::table('MstRole')->where('id',$request->post('role_management_id_update'))->update($data);
        return redirect ('debug_role_management');
    }
    

    public function delete($id=null,Request $request){
        DB::table('MstRole')->where('id',$id)->delete();
        return redirect('debug_role_management');
    }


}
