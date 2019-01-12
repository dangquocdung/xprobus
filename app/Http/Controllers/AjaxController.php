<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Lps;
use App\TypeLps;

class AjaxController extends Controller
{
    
    public function LichTruyenHinh(Request $request)
    {

        $date = Carbon::parse($request->ngay)->format('Y-m-d');
       
        $date= date('Y-m-d', strtotime($date. ' + 1 days'));

        $Lps = Lps::where('section_id',1)->where('ngay_ps','LIKE',$date.'%')->orderby('gio_ps','asc')->get();

        // $Lpss = Lps::all();

        // echo Carbon::parse($request->ngay)->add(1, 'day')->format('Y-m-d');

        //echo $date;

        foreach ($Lps as $lps){

            $time = Carbon::parse($lps->gio_ps)->format('H:i');
            
            echo "<div class=\"item\">
                    <div class=\"calendar-item\">
                        <div class=\"time\">$time</div>
                        <div class=\"name\">
                        <strong>
                            $lps->chuong_trinh
                        </strong>
                        <br>
                        $lps->noi_dung
                        </div>
                    </div>
                </div>";
            // echo "123";

        }
    
    }    

    public function LichPhatThanh(Request $request)
    {

        $date = Carbon::parse($request->ngay)->format('Y-m-d');
       
        $date= date('Y-m-d', strtotime($date. ' + 1 days'));

        $Lps = Lps::where('section_id',2)->where('date','LIKE',$date.'%')->orderby('time','asc')->get();

        foreach ($Lps as $lps){

            $time = Carbon::parse($lps->time)->format('h:i');

            $type = TypeLps::find($lps->type_id);

            echo "<div class=\"item\">
                    <div class=\"calendar-item\">
                        <div class=\"time\">$time</div>
                        <div class=\"name\">
                            <strong>
                                $type->title
                            </strong>
                            <br>
                            $lps->title
                        </div>
                    </div>
                </div>";
        }
    
    }    
}
