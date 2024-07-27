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
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|min:1',
            'price' => 'required|numeric',
            'description' => 'required|min:1|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:20480' // Máximo 20 MB
        ]);
    
        // Inicializar variables
        $imagePath = null;
    
        // Verificar si el archivo de imagen está presente en la solicitud
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $uniqueName = time() . '_' . uniqid() . '.' . $extension; // Generar un nombre único
            $destinationPath = public_path('images'); // Ruta a la carpeta de destino
            $imagePath = 'images/' . $uniqueName; // Ruta relativa para almacenar en la base de datos
    
            // Intentar mover la imagen a la carpeta especificada
            try {
                $image->move($destinationPath, $uniqueName);
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['image' => 'Failed to upload image.']);
            }
        } else {
            return redirect()->back()->withErrors(['image' => 'No image found in the request.']);
        }
    
        // Crear el producto y guardar la ruta de la imagen en la base de datos
        Products::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imagePath, // Guardar la ruta de la imagen con nombre aleatorio
        ]);
    
        return redirect()->route('main');
    }
    
}
