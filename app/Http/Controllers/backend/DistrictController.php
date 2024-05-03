<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistrictController extends Controller
{
    public function Index()
    {
        $district = District::all();
       return view('backend.district.index', compact('district'));
    }

    public function Store(Request $request)
    {
        $validated = $request->validate([
            'district_bn' => 'required|unique:districts|max:55',
            'district_en' => 'required|unique:districts|max:55',
        ]);

        DB::table('districts')->insert([
            'district_bn' => $request->district_bn,
            'district_en' => $request->district_en,
        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function Destroy($id)
    {
        District::destroy($id);
        toastr()->success('Data has been deleted successfully!', 'Congrats', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function EditDistrict($id)
    {
        // $district = DB::table('districts')->where('id',$id)->first();
        $district = District::find($id);
        return view('backend.district.edit_district',compact('district'));
    }

    public function Update(Request $request,$id)
    {
        $validated = $request->validate([
            'district_bn' => 'required',
            'district_en' => 'required',
        ]);

        DB::table('districts')->where('id',$id)->update([
            'district_bn' => $request->district_bn,
            'district_en' => $request->district_en,
        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats', ['timeOut' => 5000]);
        return redirect()->route('districts');
    }


}
