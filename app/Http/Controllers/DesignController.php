<?php

// app/Http/Controllers/DesignController.php
// app/Http/Controllers/DesignController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Design;
use Dotenv\Exception\ValidationException;

class DesignController extends Controller
{
    public function saveDesign(Request $request)
{
    $data = $request->all(); 
 
    try {
        // $validatedData = $request->validate([
        //     'html' => 'required|string',
        //     'css' => 'required|string',
        //     'page_id' => 'required|string', // Ensure page_id is valid
        // ]);
        
        $design = new Design();
        $design->html = $data['html'];
        $design->css = $data['css'];
        $design->page_id = $data['page_id'];
        $design->save();

        return response()->json(['message' => 'Data saved successfully'], 200);
    } catch (ValidationException $e) {
        return response()->json(['error' => $e->getMessage()], 422);
    }
}
}
