<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Single extends Component
{
    public $room;

    public function mount(Room $room)
    {
        $this->room = $room;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */


    public function render()
    {
        $room = $this->room;
        return view('livewire.room.single', compact("room"));
    }
    public function delete()
    {
        $this->room->delete();
        $this->emit('roomDeleted');
    }
}