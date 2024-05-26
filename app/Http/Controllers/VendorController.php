<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
    public function store(Request $request)
    {
        $user=Auth()->user();   
        $exists=Vendor::where('user_id',$user->id)->exists();
        if($exists)
        {
            return to_route('home');
        }
        $request->validate([
            'shop_name' => 'required|string|max:255',
            'products' => 'required|string|max:255',
            'product_summary' => 'required|string|max:1000',
            'product_pics.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'product_weight' => 'required|integer|min:1',
            'product_rent_per_day' => 'required|integer|min:1',
            'time_of_availability' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $productPics = [];
        if ($request->hasFile('product_pics')) {
            foreach ($request->file('product_pics') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $imagePath = 'images/vendor/' . $imageName;
                $image->move(public_path('images/vendor'), $imageName);
                $productPics[] = $imagePath;

                // Log the stored image path for debugging
                \Log::info('Stored image: ' . $imagePath);
            }
        }

        $vendor = Vendor::create([
            'user_id' => Auth::id(),
            'shop_name' => $request->shop_name,
            'products' => $request->products,
            'product_summary' => $request->product_summary,
            'product_pics' => json_encode($productPics),
            'product_weight' => $request->product_weight,
            'product_rent_per_day' => $request->product_rent_per_day,
            'time_of_availability' => $request->time_of_availability,
            'location' => $request->location,
        ]);

        $user->assignRole('vendor');
        $user->user_type='vendor';
        $user->save();



        return redirect()->route('home')->with('success', 'Vendor created successfully.');
    }
}
