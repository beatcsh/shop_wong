<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AddProductsController extends Controller
{
    public function index() {
        return view('actions.addProducts');
    }

    public function store(Request $request) {
        
        $request->validate([
            'name' => 'required|min:1',
            'price' => 'required|numeric',
            'description' => 'required|min:1|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:20480' // Maximo 20 MB
        ]);
    
        $imagePath = null;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $uniqueName = time() . '_' . uniqid() . '.' . $extension; 
            $destinationPath = public_path('images'); 
            $imagePath = 'images/' . $uniqueName; 
    
            try {
                $image->move($destinationPath, $uniqueName);
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['image' => 'Failed to upload image.']);
            }
        } else {
            return redirect()->back()->withErrors(['image' => 'No image found in the request.']);
        }
    
        Products::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imagePath, // Guardar la ruta de la imagen con nombre aleatorio
        ]);
    
        return redirect()->route('main');
    }
    
}
