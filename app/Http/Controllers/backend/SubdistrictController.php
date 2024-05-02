<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Subdistrict;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubdistrictController extends Controller
{
    public function Index()
    {
        $sub = DB::table('subdistricts')->join('districts','subdistricts.district_id','districts.id')->select('districts.district_bn','subdistricts.*')->get();

        $district = DB::table('districts')->get();
        return view('backend.subdistrict.index',compact('district', 'sub'));
    }

    public function SubdistrictStore(Request $request)
    {
        $validated = $request->validate([
            'subdistrict_bn' => 'required|unique:subdistricts|max:100',
            'subdistrict_en' => 'required|unique:subdistricts|max:100',
            'district_id' => 'required',
        ]);

        DB::table('subdistricts')->insert([
            'subdistrict_bn' => $request->subdistrict_bn,
            'subdistrict_en' => $request->subdistrict_en,
            'district_id' => $request->district_id,
        ]);

       toastr()->success('Data has been saved successfully!', 'Congrats', ['timeOut' => 5000]);
       return redirect()->back();
    }

    public function Destroy($id)
    {
        // Subdistrict::destroy($id);
        DB::table('subdistricts')->where('id',$id)->delete();

        toastr()->success('Data has been deleted successfully!', 'Congrats', ['timeOut' => 5000]);
        return redirect()->back();
    }
}
