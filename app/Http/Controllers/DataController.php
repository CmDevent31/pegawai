<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function destroy($id)
    {
        // Lakukan logika penghapusan data sesuai kebutuhan
        // Misalnya:
        $data = Data::find($id);
        if ($data) {
            $data->delete();
            return response()->json(['success' => true]);
        }
    
        return response()->json(['success' => false]);
    }
}
