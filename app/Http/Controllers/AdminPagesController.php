<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class AdminPagesController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function createProduct()
    {
        return view('admin.pages.product.create');
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric'
        ]);


        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->offer_price = $request->offer_price;
        $product->quantity = $request->quantity;

        $product->slug = self::slugify($request->title);
        $product->admin_id = 1;
        $product->category_id = 1;
        $product->brand_id = 1;

        $product->save();

        //insert image
        if (count($request->image) > 0) {
            foreach ($request->image as $image) {
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $destination = public_path('images/products/' . $imageName);
                Image::make($image)->save($destination);

                $productImage = new ProductImage;
                $productImage->product_id = $product->id;
                $productImage->image = $imageName;
                $productImage->save();
            }
        }

        return redirect()->route('admin.product.create');
    }

    public static function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
}
