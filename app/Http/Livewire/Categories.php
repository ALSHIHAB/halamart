<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Categories extends Component
{
    public $categories;
    public $search;
    public $products;
    public $f_categories = [];
    public $f_brands = [];
    public $item_id;

    public $slug;

    public $sort = '';

    public function render()
    {
        $query = Product::query();
        if ($this->slug)
            $this->setCategory();
        if (!empty($this->search)) {
            //DB::enableQueryLog(); // Enable query log
            $s = str_replace("\\", "\\\\", json_encode($this->search));
            $s = str_replace("\"", "", $s);
            $s =  "%" . $s . "%";
            $query = $query->where('slug', 'LIKE', strtolower($s));

            //dd(DB::getQueryLog());
        }
        if ($this->f_categories)
            $query = $query->whereIn('category_id', $this->f_categories);
        if ($this->f_brands)
            $query = $query->whereIn('brand_id', $this->f_brands);

        // $this->products = $query->where('enabled', 1)->orderBy('sort')->get();
        //dd($query->toSql());
        if (!$this->sort)
            $this->products = $query->where('enabled', 1)->orderBy('sort')->get();
        else
            $this->products = $query->where('enabled', 1)->orderBy($this->sort)->get();
        return view('livewire.categories')->layout('layouts.guest');
    }

    public function mount($slug = '')
    {
        $this->slug = $slug;
    }

    public function setCategory()
    {
        $s = $this->slug;
        $category = Category::where('slug->en', '=', strtolower($s))->orWhere('slug->ar', '=', $s)->first();
        array_push($this->f_categories, $category->id);
        $subCategories = Category::where('parent_id', $category->id)->get();
        foreach ($subCategories as $sCat)
            array_push($this->f_categories, $sCat->id);
    }

    public function sort($value)
    {
        switch ($value) {
            case 1:
                $this->sort = 'sort';
                break;
            case 2:
                $this->sort = 'id';
                break;
            case 3:
                $this->sort = 'id';
                break;
            case 4:
                $this->sort = 'price';
                break;
            case 5:
                $this->sort = "'price','DESC";
            default:
                $this->sort = '';
        }
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $name['en'] = $product->getTranslation('name', 'en');
        $name['ar'] = $product->getTranslation('name', 'ar');
        $slug['en'] = $product->getTranslation('slug', 'en');
        $slug['ar'] = $product->getTranslation('slug', 'ar');
        Cart::add($product->id, $name, $slug, $product->price, $product->image(), 1);
        $this->emit('productAddedToCart');
        $this->emitTo('cart-count', 'RefreshCartCount');
    }
}