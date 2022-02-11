<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class Categories extends Component
{
    public $categoryId;
    public $categories;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categoryId,$name)
    {
        $this->categories = Category::get();
        $this->categoryId=$categoryId;
        $this->name=$name;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.categories');
    }
}
