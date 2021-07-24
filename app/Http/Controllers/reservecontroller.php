<?php
namespace App\Http\Controllers;
use Illuminate\Support\facades\DB;
use Illuminate\Http\Request;
use App\Models\Reserve;
use App\Models\Cancel;
use App\Models\Users;

use Illuminate\Support\Facades\Auth;

class reservecontroller extends Controller
{
    public function setreserve()
    {
        $check = Reserve::where('date', '=', request('date'))->where('section', '=', request('sans'))->where('pid', '=', request('place'))->first();
        if ($check == NULL) {
            $reserve = new Reserve();
            $reserve->uid = Auth::user()->id;
            $reserve->pid = request('place');
            $reserve->date = request('date');
            $reserve->section = request('sans');
            $reserve->amount = 30000;
            $reserve->reserve_status = 1;
            if (request('amount') == 1)
                $reserve->payment_status = 1;
            else
                $reserve->payment_status = 0;
            $reserve->save();
            echo " سانس با موفقیت رزرو شد";

            echo "<br> <a href='/manage'>مدیریت سانس</a>";

        }
        else if($check->reserve_status==0){
            $check->uid = Auth::user()->id;
            $check->reserve_status=1;
            $check->save();
            echo " سانس با موفقیت رزرو شد";

            echo "<br> <a href='/manage'>مدیریت سانس</a>";
        }

        else
            echo "<a href='/index'>!این سانس پر می باشد</a>";

    }

    public function showmanage(){
        $reserveinfo=Reserve::where('uid','=',Auth::user()->id)->where('reserve_status','=','1')->get();
        $cancel=DB::table('cancel')->join('reserve','cancel.rid','=','reserve.id')->where('reserve.uid','=',Auth::user()->id)->get();
        return view('manage',['reserve'=>$reserveinfo,'cancel'=>$cancel]);
    }
    public function setcancel($id){
        $cancel=new Cancel();
        $cancel->rid=$id;
        $cancel->cuid=Auth::user()->id;
        $cancel->save();
        $search=Reserve::where('id','=',$id)->first();
        $search->reserve_status=0;
        $search->save();
       return  redirect('/manage');

    }
    public function dashboard(){
       $profile=Users::where('id','=',Auth::user()->id)->first();
        return view('dashboard',['profile'=>$profile]);


    }
    public function changeprofile(){
        $profile=Users::where('id','=',Auth::user()->id)->first();
        $profile->name=request('name');
        $profile->email=request('email');
        $profile->tel=request('phone');
        $profile->save();
        return  redirect('/dashboard');


    }
}


