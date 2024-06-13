<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Instalation as Instalations;


class Instalation extends Component
{
    public $categories, $name, $description, $category_id;
    public $updateCategory = false;
    protected $listeners = [
        'deleteCategory' => 'destroy'
    ];
    // Validation Rules
    protected $rules = [
        'name' => 'required',
        'description' => 'required'
    ];
    public function render()
    {
        $this->categories = Instalations::select('id', 'name', 'description')->get();
        return view('livewire.instalation');
    }
    public function resetFields()
    {
        $this->name = '';
        $this->description = '';
    }
    public function store()
    {
        // Validate Form Request
        $this->validate();
        try {
            // Create Category
            Instalations::create([
                'name' => $this->name,
                'description' => $this->description
            ]);

            // Set Flash Message
            session()->flash('success', 'Category Created Successfully!!');
            // Reset Form Fields After Creating Category
            $this->resetFields();
        } catch (\Exception $e) {
            // Set Flash Message
            session()->flash('error', 'Something goes wrong while creating category!!');
            // Reset Form Fields After Creating Category
            $this->resetFields();
        }
    }
}
