<?php

namespace App\Http\Controllers\PropertyVendor;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class PropertyVendorController extends Controller
{


    public function dashboard(){
        $dataCount = Property::count();

        return view('property vendor.dashboard', compact('dataCount'));

    }
    
    public function index(){
        $data = Property::all();
        return view('property vendor.listings', compact('data'));
    }

    public function create(){
        return view('property vendor.list-your-space');
    }
    
    public function store(Request $request){
        // dd($request);
        $validated = $request->validate([
            'shop_name' => 'required|string',
            'products' => 'required|string',
            'product_summery' => 'required|string',
            'Product_weight' => 'required',
            'product_rent_per_day' => 'required',
            'time_of_availability' => 'required',
            'location' => 'required',
            'product_pics.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]); 
        
        if ($request->hasFile('product_pics')) {
            $productPics = [];
            foreach ($request->file('product_pics') as $file) {
                $filename = uniqid() . '_' . $file->getClientOriginalName(); 
                $path = $file->storeAs('propertyImages', $filename, 'public');
                // Remove 'public/' from the path before storing it in the database
                $productPics[] =   $path;
            }
            $validated['product_pics'] = $productPics;
        }
        // dd($validated);



        $property = Property::create($validated);
          
        
        return redirect()->back()->with('success', 'Property created successfully.');


    }

    
    public function edit($id){
        $property = Property::findOrFail($id);
        return view('property Vendor.editProperty', compact('property'));

    }


    
    public function update(Request $request, $id){
        $property = Property::findOrFail($id);

        $property->shop_name = $request->shop_name;
        $property->products = $request->products;
        $property->product_summery = $request->product_summery;
        $property->Product_weight = $request->Product_weight;
        $property->product_rent_per_day = $request->product_rent_per_day;
        $property->time_of_availability = $request->time_of_availability;
        $property->location = $request->location;

        if ($request->hasFile('product_pics')) {
            $productPics = [];
            foreach ($request->file('product_pics') as $file) {
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('propertyImages', $filename, 'public');
                // Remove 'public/' from the path before storing it in the database
                $productPics[] = $path;
            }
        
            // Check if product_pics is a string and decode it; if it's not a string, assume it's an empty array
            $existingProductPics = is_string($property->product_pics) ? json_decode($property->product_pics, true) : [];
            $existingProductPics = is_array($existingProductPics) ? $existingProductPics : [];
        
            // Merge the new image paths with the existing ones
            $productPics = array_merge($existingProductPics, $productPics);
        
            // Update the 'product_pics' field with the merged array
            $property->product_pics = json_encode($productPics);
        }
        
        $property->save();
        

        $property->save();
        return redirect()->back()->with('success', 'Property Update successfully.');

    }
    
    public function delete($id){
        $property = Property::findOrFail($id);
        $property->delete();
        return redirect()->back()->with('success', 'Property Deleted successfully.');
 

    }


    public function deleteImage(Request $request)
    {
        Log::info('Delete image request received'); // Debugging statement
        Log::info('Request data:', $request->all()); // Debugging statement
    
        $request->validate([
            'image' => 'required|string',
            'id' => 'required|numeric',
        ]);
        Log::info('Request data:', $request->all()); // Debugging statement
    
        $img = $request->image;
        $id = $request->id;
        Log::info($id); // Debugging statement
    
        $item = Property::findOrFail($id);
        Log::info($item); // Debugging statement
    
        // Check if the property's product_pics attribute is an array
        if (is_array($item->product_pics)) {
        Log::info('is array'); // Debugging statement

            // Remove the image from the array
            $images = array_filter($item->product_pics, function ($imgg) use ($img) {
                return $imgg !== $img;
            });
    
            // Update the product_pics attribute with the filtered images
            $item->product_pics = $images;
        Log::info($item->product_pics); // Debugging statement

        } else {
            // If the product_pics attribute is not an array, set it to an empty array
            $item->product_pics = [];
        }
    
        // Save the changes to the database
        $item->save();
    
        Log::info('Image deleted successfully'); // Debugging statement
    
        return response()->json(['success' => true]);
    }
    

    public function propertyVendorBooking(){
        return view('property vendor.propertyBooking');
    }

    public function propertyVendorBookingShow(){
        return view('property vendor.propertyBookingShow');
    }




}
