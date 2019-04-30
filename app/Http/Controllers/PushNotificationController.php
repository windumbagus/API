<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class PushNotificationController extends Controller
{
    public function index()
    {
        $PushNotifications=DB::table('push_notif')->get();
        $data = array (
            'PushNotifications'=>$PushNotifications
        );
        return view('PushNotification',$data);
    }

    public function getById($id=null,Request $request){
        $data=DB::table('push_notif')->where('id',$id)->get();
        return json_encode($data->first());

    }

    public function save(Request $request)
    {
        // $request->session()->flash('status','Data Berhasil di Simpan');
        $data=array(
            'Message'=>$request->post('push_notif_Message_add'),
            'CodeNotif'=>$request->post('push_notif_CodeNotif_add'),
            'CreatedDate'=>$request->post('push_notif_CratedDate_add'),
            'UpdatedDate'=>$request->post('push_notif_UpdatedDate_add')
        );
        $status= DB::table('push_notif')->insert($data);
        // Alert::success('Push Notification Saved');
        return redirect('PushNotification');
    }

    public function delete($id=null,Request $request){
        DB::table('push_notif')->where('id',$id)->delete();
        return redirect('PushNotification');
    }

    public function update(Request $request){
    $data= array (
        'Message'=>$request->post('push_notif_Message_update'),
        'CodeNotif'=>$request->post('push_notif_CodeNotif_update'),
        'CreatedDate'=>$request->post('push_notif_CratedDate_update'),
        'UpdatedDate'=>$request->post('push_notif_UpdatedDate_update')
);
    DB::table('push_notif')->where('id',$request->post('push_notif_id_update'))->update($data);
    return redirect ('PushNotification');
}




}
