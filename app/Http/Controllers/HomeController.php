<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use App\Notification;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $products = Product::with('categories.parentCategory.parentCategory')
        //     ->inRandomOrder()
        //     ->take(9)
        //     ->get();

        // return view('index', compact('products'));
        return view('frontend.homepage');
    }
    public function results()
    {
        $search = request()->query('search');
        if($search){
            $products = Product::where('name','LIKE',"%{$search}%")->simplePaginate(1);
        }else{
            $products = Product::simplePaginate(10);
        }
        return view('frontend.result-page', compact('products')); 
    }
    public function notification(){
        $search = request()->query('notification-search');
        if($search){
            $notification = Notification::where('title','LIKE',"%{$search}%")->simplePaginate(3);
        }else{
            $notification = Notification::simplePaginate(3);
        }
        return view('frontend.notification',compact('notification'));
    }
    public function notification_detail($id){
        return view('frontend.notification_detail')->with([
            'notification' => Notification::findOrFail($id),
        ]);
    }
    public function whoiswho(){
        return view('frontend.whoiswho');
    }
    public function gallery(){
        return view('frontend.gallery');
    }
    public function contactus(){
        return view('frontend.contactus');
    }
    public function faqs(){
        return view('frontend.faqs');
    }
    public function aboutus(){
        return view('frontend.about');
    }
    public function download(){
        return view('frontend.download');
    }
    public function vacancy(){
        return view('frontend.vacancy');
    }
    public function tender(){
        return view('frontend.tender');

    }
    public function acts(){
        return view('frontend.acts');
    }
    public function rules(){
        return view('frontend.rules');
        
    }
    public function publications(){
        return view('frontend.publication');
        
    }
    public function news(){
        return view('frontend.news');
        
    }
    public function category(ProductCategory $category, ProductCategory $childCategory = null, $childCategory2 = null)
    {
        $products = null;
        $ids = collect();
        $selectedCategories = [];

        if ($childCategory2) {
            $subCategory = $childCategory->childCategories()->where('slug', $childCategory2)->firstOrFail();
            $ids = collect($subCategory->id);
            $selectedCategories = [$category->id, $childCategory->id, $subCategory->id];
        } elseif ($childCategory) {
            $ids = $childCategory->childCategories->pluck('id');
            $selectedCategories = [$category->id, $childCategory->id];
        } elseif ($category) {
            $category->load('childCategories.childCategories');
            $ids = collect();
            $selectedCategories[] = $category->id;

            foreach ($category->childCategories as $subCategory) {
                $ids = $ids->merge($subCategory->childCategories->pluck('id'));
            }
        }

        $products = Product::whereHas('categories', function ($query) use ($ids) {
                $query->whereIn('id', $ids);
            })
            ->with('categories.parentCategory.parentCategory')
            ->paginate(9);

        return view('index', compact('products', 'selectedCategories'));
    }

    public function product($category, $childCategory, $childCategory2, $productSlug, Product $product)
    {
        $product->load('categories.parentCategory.parentCategory');
        $childCategory2 = $product->categories->where('slug', $childCategory2)->first();
        $selectedCategories = [];

        if ($childCategory2 &&
            $childCategory2->parentCategory &&
            $childCategory2->parentCategory->parentCategory
        ) {
            $selectedCategories = [
                $childCategory2->parentCategory->parentCategory->id ?? null,
                $childCategory2->parentCategory->id ?? null,
                $childCategory2->id
            ];
        }

        return view('product', compact('product', 'selectedCategories'));
    }
}
