<?php

namespace App\Http\Controllers\LocationVendor;

use Illuminate\Http\Request;
use App\Models\LocationVendor;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class LocationVendorController extends Controller
{
    
    
    public function dashboard(){
        $dataCount = LocationVendor::count();
        return view('location vendor.dashboard', compact('dataCount'));

    }

    public function index(){
        $data = LocationVendor::all();
        return view('location vendor.listings', compact('data'));
    }

    public function create(){
        return view('location Vendor.list-your-space');
    }


    public function store(Request $request){
        // dd($request);
        
        $validated = $request->validate([
            'location_name' => 'required|string',
            'locations_address' => 'required|string',
            'locations_summary' => 'required|string',
            'locations_electricity_cost' => 'required',
            'locations_voltage' => 'required',
            'locations_load_shut_down_timing' => 'required',
            'locations_rent_per_day' => 'required',
            'time_of_availability' => 'required',
            'near_by_market' => 'required',
            'near_by_hospital' => 'required',
            'near_by_petrol_pump' => 'required',
            'locations_pics.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]); 
        
        if ($request->hasFile('locations_pics')) {
            $productPics = [];
            foreach ($request->file('locations_pics') as $file) {
                $filename = uniqid() . '_' . $file->getClientOriginalName(); 
                $path = $file->storeAs('LocationImages', $filename, 'public');
                // Remove 'public/' from the path before storing it in the database
                $locationsPics[] =   $path;
            }
            $validated['locations_pics'] = $locationsPics;
        }
        // dd($validated);



        $data = LocationVendor::create($validated);
          
        
        return redirect()->back()->with('success', 'Location created successfully.');


    }


    public function view($id){
        $data = LocationVendor::findOrFail($id);
        return view('location Vendor.viewLocation', compact('data'));

    }
    

    public function edit($id){
        $data = LocationVendor::findOrFail($id);
        return view('location Vendor.editLocation', compact('data'));

    }

    public function update(Request $request, $id){
        // dd($request);
        $location = LocationVendor::findOrFail($id); 

        $location->location_name = $request->location_name;
        $location->locations_address = $request->locations_address;
        $location->locations_summary = $request->locations_summary;
        $location->locations_electricity_cost = $request->locations_electricity_cost;
        $location->locations_voltage = $request->locations_voltage;
        $location->locations_load_shut_down_timing = $request->locations_load_shut_down_timing;
        $location->locations_rent_per_day = $request->locations_rent_per_day;
        $location->time_of_availability = $request->time_of_availability;
        $location->near_by_market = $request->near_by_market;
        $location->near_by_hospital = $request->near_by_hospital;
        $location->near_by_petrol_pump = $request->near_by_petrol_pump;

        if ($request->hasFile('locations_pics')) {
            $locationsPics = [];
            foreach ($request->file('locations_pics') as $file) {
                $filename = uniqid() . '_' . $file->getClientOriginalName(); 
                $path = $file->storeAs('public/LocationImages', $filename);
                // Adjust the path to remove 'public/' before storing it in the database
                $locationsPics[] = str_replace('public/', '', $path);
            }
            // Merge the new image paths with the existing ones
            $existingLocationsPics = json_decode($location->locations_pics, true) ?? [];
            $locationsPics = array_merge($existingLocationsPics, $locationsPics);
        
            // Update the 'locations_pics' field with the merged array
            $location->locations_pics = json_encode($locationsPics);
        }
        
        // dd($location->locations_pics);

        $location->save();
        return redirect()->back()->with('success', 'Location Update successfully.');

    }
    
    public function delete($id){
        $location = LocationVendor::findOrFail($id);
        $location->delete();
        return redirect()->back()->with('success', 'Location Deleted successfully.');
 

    }

   public function deleteImage(Request $request)
   {
       Log::info('Delete image request received');
       Log::info('Request data:', $request->all());
   
       $request->validate([
           'image' => 'required|string',
           'id' => 'required|numeric',
       ]);
   
       $img = $request->input('image');
       $id = $request->input('id');
   
       $item = LocationVendor::findOrFail($id);
   
       // Log the type of locations_pics
       Log::info('Type of locations_pics:', ['type' => gettype($item->locations_pics)]);
   
       // Ensure locations_pics is a string before decoding
       if (is_string($item->locations_pics)) {
           // Decode the JSON array into a PHP array
           $images = json_decode($item->locations_pics, true);
       } elseif (is_array($item->locations_pics)) {
           // If it's already an array, use it directly
           $images = $item->locations_pics;
       } else {
           // Handle unexpected types
           Log::error('Unexpected type for locations_pics');
           return response()->json(['success' => false, 'message' => 'Unexpected type for locations_pics'], 500);
       }
   
       // Check for JSON decode errors
       if (json_last_error() !== JSON_ERROR_NONE) {
           Log::error('JSON decode error:', ['error' => json_last_error_msg()]);
           return response()->json(['success' => false, 'message' => 'Invalid JSON in locations_pics'], 500);
       }
   
       // Remove the image from the array
       $images = array_filter($images, function ($imgg) use ($img) {
           return $imgg !== $img;
       });
   
       // Update the JSON array in the database
       $item->locations_pics = json_encode(array_values($images));
       $item->save();
   
       Log::info('Image deleted successfully');
   
       return response()->json(['success' => true]);
   }

   

    public function locationVendorBooking(){
        return view('location vendor.locationBooking');
    }

    public function locationVendorBookingShow(){
        return view('location vendor.locationBookingShow');
    }
   
    
    

}
