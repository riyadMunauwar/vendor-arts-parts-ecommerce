<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\WithSweetAlert;
use App\Traits\WithSweetAlertToast;


class Test extends Component
{
    use WithSweetAlert;
    use WithSweetAlertToast;


    public function showAlert()
    {
        $this->ifConfirmThenDispatch('orderCreated', ['name' => 'Riyad', 'age' => 21, 'year' => 2021]);
    }

    public function render()
    {
        return view('livewire.test');
    }
}
