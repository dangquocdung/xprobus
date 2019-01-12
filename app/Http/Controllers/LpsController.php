<?php

namespace App\Http\Controllers;

use App\Lps;
use App\TypeLps;
use App\Http\Requests;
use App\WebmasterLps;
use App\WebmasterSection;
use Auth;
use File;
use Helper;
use Illuminate\Config;
use Illuminate\Http\Request;
use Redirect;
use Carbon\Carbon;

class LpsController extends Controller
{

    // Define Default Variables

    public function __construct()
    {
        $this->middleware('auth');

        // Check Permissions
        if (!@Auth::user()->permissionsGroup->lps_status) {
            return Redirect::to(route('NoPermission'))->send();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // General for all pages
        $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();
        // General END

        //List of Lps Sections
        $WebmasterLps = WebmasterLps::where('status', '=', '1')->orderby('row_no', 'asc')->get();

        $Lps = Lps::where('status', '=', '1')->orderby('ngay_ps','desc')->orderby('gio_ps','desc')->orderby('section_id', 'asc')->paginate(env('BACKEND_PAGINATION'));

        return view("backEnd.lps", compact("Lps", "GeneralWebmasterSections", "WebmasterLps"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($sectionId)
    {
        // Check Permissions
        if (!@Auth::user()->permissionsGroup->add_status) {
            return Redirect::to(route('NoPermission'))->send();
        }
        //
        // General for all pages
        $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();
        // General END

        //Lps Sections Details
        $WebmasterLps = WebmasterLps::find($sectionId);

        //Type Banner
        $TypeLps = TypeLps::all();
        
        return view("backEnd.lps.create", compact("GeneralWebmasterSections", "WebmasterLps","TypeLps"));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Check Permissions
        if (!@Auth::user()->permissionsGroup->add_status) {
            return Redirect::to(route('NoPermission'))->send();
        }

        $Lps = new Lps;
        $Lps->section_id = $request->section_id;
        $Lps->date = Carbon::parse($request->date)->format('Y-m-d H:i:s');
        $Lps->time = Carbon::parse($request->date)->format('H:i:s');
        $Lps->type_id = $request->type_id;

        $Lps->title = $request->title;
        $Lps->link_url = $request->link_url;
        $Lps->status = 1;
        $Lps->created_by = Auth::user()->id;
        $Lps->save();

        return redirect()->action('LpsController@index')->with('doneMessage', trans('backLang.addDone'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Check Permissions
        if (!@Auth::user()->permissionsGroup->edit_status) {
            return Redirect::to(route('NoPermission'))->send();
        }
        //
        // General for all pages
        $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();
        // General END

        //Type Banner
        $TypeLps = TypeLps::all();

        if (@Auth::user()->permissionsGroup->view_status) {
            $Lps = Lps::where('created_by', '=', Auth::user()->id)->find($id);
        } else {
            $Lps = Lps::find($id);
        }
        if (count($Lps) > 0) {
            //Lps Sections Details
            $WebmasterLps = WebmasterLps::find($Lps->section_id);

            return view("backEnd.Lps.edit", compact("Lps", "GeneralWebmasterSections", "WebmasterLps", "TypeLps"));
        } else {
            return redirect()->action('LpsController@index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Check Permissions
        if (!@Auth::user()->permissionsGroup->add_status) {
            return Redirect::to(route('NoPermission'))->send();
        }
        //
        $Lps = Lps::find($id);
        if (count($Lps) > 0) {

            $Lps->date = Carbon::parse($request->date)->format('Y-m-d H:i:s');
            $Lps->time = Carbon::parse($request->date)->format('H:i:s');
            $Lps->type_id = $request->type_id;


            $Lps->title = $request->title;
            $Lps->link_url = $request->link_url;
            $Lps->status = $request->status;
            $Lps->updated_by = Auth::user()->id;
            $Lps->save();
            return redirect()->action('LpsController@edit', $id)->with('doneMessage', trans('backLang.saveDone'));
        } else {
            return redirect()->action('LpsController@index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Check Permissions
        if (!@Auth::user()->permissionsGroup->delete_status) {
            return Redirect::to(route('NoPermission'))->send();
        }
        //
        if (@Auth::user()->permissionsGroup->view_status) {
            $Lps = Lps::where('created_by', '=', Auth::user()->id)->find($id);
        } else {
            $Lps = Lps::find($id);
        }
        if (count($Lps) > 0) {
            $Lps->delete();
            return redirect()->action('LpsController@index')->with('doneMessage', trans('backLang.deleteDone'));
        } else {
            return redirect()->action('LpsController@index');
        }
    }

    /**
     * Update all selected resources in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  buttonNames , array $ids[]
     * @return \Illuminate\Http\Response
     */
    public function updateAll(Request $request)
    {
        //
        if ($request->action == "order") {
            foreach ($request->row_ids as $rowId) {
                $Lps = Lps::find($rowId);
                if (count($Lps) > 0) {
                    $row_no_val = "row_no_" . $rowId;
                    $Lps->row_no = $request->$row_no_val;
                    $Lps->save();
                }
            }

        } elseif ($request->action == "activate") {
            Lps::wherein('id', $request->ids)
                ->update(['status' => 1]);

        } elseif ($request->action == "block") {
            Lps::wherein('id', $request->ids)
                ->update(['status' => 0]);

        } elseif ($request->action == "delete") {
            // Check Permissions
            if (!@Auth::user()->permissionsGroup->delete_status) {
                return Redirect::to(route('NoPermission'))->send();
            }
            // Delete Lps files
            $Lps = Lps::wherein('id', $request->ids)->get();
            foreach ($Lps as $Lps) {
                if ($Lps->file_vi != "") {
                    File::delete($this->getUploadPath() . $Lps->file_vi);
                }
                if ($Lps->file_en != "") {
                    File::delete($this->getUploadPath() . $Lps->file_en);
                }
            }

            Lps::wherein('id', $request->ids)
                ->delete();

        }
        return redirect()->action('LpsController@index')->with('doneMessage', trans('backLang.saveDone'));
    }

}
