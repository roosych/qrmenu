<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function sortable(Request $request)
    {
        $products = Product::all();

        foreach ($products as $product) {
            foreach ($request->order as $order) {
                if($order['id'] == $product->id) {
                    $product->update(['position' => $order['position']]);
                }
            }
        }

        return response('success', 200);
    }

    public function setStatus(Request $request)
    {
        $data = [
            'active' => $request->active,
        ];

        Category::where('id', $request->id)->update($data);

        return response('success', 200);
    }

    public function update()
    {

    }

    public function delete(Request $request)
    {
        $data = [
            'id' => $request->id
        ];

        Category::where('id', $data['id'])->delete();

        return response('success', 200);
    }
}
