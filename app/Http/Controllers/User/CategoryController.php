<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Polyfill\Ctype\Ctype;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('profile_id', auth()->id())
            ->with('products')
            ->orderBy('position', 'asc')
            ->get();

        return view('user.menu.categories.index', compact('categories'));
    }

    public function edit(Category $category)
    {
        $products = $category->products;

        return view('user.menu.categories.edit', compact('products', 'category'));
    }

    public function sortable(Request $request)
    {
        $categories = Category::where('profile_id', auth()->id())->get();

        foreach ($categories as $category) {
            foreach ($request->order as $order) {
                if($order['id'] == $category->id) {
                    $category->update(['position' => $order['position']]);
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

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:30'],
            'active' => ['boolean']
        ]);

        $data['profile_id'] = auth()->id();

        Category::create($data);

        return redirect()->back()->with('success', 'Категория добавлена');
    }
}
