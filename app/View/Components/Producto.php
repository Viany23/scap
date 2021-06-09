<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Producto extends Component
{
	
	public $name;
	public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, string $type='text')
    {
        //
		$this->name = $name;
		$this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.producto');
    }
}















