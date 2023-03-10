<?php

namespace App\Http\Livewire;
use App\Models\Product;
use File;
use Livewire\Component;

class ProductsList extends Component
{

    public string $search = '';
    
    public function render()
    {
        $products = Product::select('products.*')->when(trim($this->search), function ($q) {
                $search = '%' . $this->search . '%';
                return $q->where('products.name', 'like', $search);
            })->get();
        return view('livewire.products-list',['products' => $products]);
    }
    public function delete($id)
    {
        $product =Product::where('id',$id)->first();
        
        if (File::exists(public_path($product->pic))) {
            File::delete(public_path($product->pic));
        }
        $product->delete();
        return  back();
    }
}
