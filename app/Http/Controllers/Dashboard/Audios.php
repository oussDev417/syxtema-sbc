<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User; 
use App\AdSense;
use Auth; 
use File;
use Validator; 
use App\Audio;

class Audios extends Controller
{


     /**
     * Show the middleware dashboard Super-Admin.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __construct()
    {
        $this->middleware(['auth','role_or_permission:Super-Admin|edit articles']);
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       // GET 
       $Audios = Audio::latest()->paginate(100);
       return view('Dashboard.Audios.index',compact('Audios'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Audio Delete
        $Audio = Audio::findOrFail($id);
        File::delete($Audio->filename);
        $Audio->delete();
        return back()->with('Delete','Audio deleted successfully');
    }
}
