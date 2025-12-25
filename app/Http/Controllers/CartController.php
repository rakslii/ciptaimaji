<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function add(Request $request)
    {
        Cart::create([
            'session_id' => session()->getId(),
            'product_id' => $request->product_id,
            'material' => $request->material,
            'qty' => $request->qty,
            'notes' => $request->notes,
            'design_file' => $request->design_file,
        ]);

        return response()->json(['success' => true]);
    }
}
