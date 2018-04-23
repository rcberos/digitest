<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\AircastRpiLocation;

class DeviceApiController extends Controller
{
    public function AircastGetLocation(Request $request){
    	$data['art'] = 'asds';
    	// return $data;
    	// $users = DB::table('AircastRpiLocation')->select('RpiID', 'Room')->where('RpiID', 1, '&', 'Location', 'rpidemo')->get();
        
        $users = DB::select("SELECT * FROM AircastRpiLocation");

        return $users;
    	// return AircastRpiLocation::all();
    }
}
