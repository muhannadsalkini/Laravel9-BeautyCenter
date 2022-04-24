<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record, $subject, $review, $service_id, $rate;

    public function mount($id)
    {
        $this->record = Service::findOrFail($id);
        $this->service_id = $this->record->id;
    }

    public function render()
    {
        return view('livewire.review');
    }

    private function resetInput()
    {
        $this->subject = null;
        $this->review = null;
        $this->rate = null;
        $this->service_id = null;
        $this->IP = null;
    }

    public function store()
    {
        $this->validate([
            'subject' => 'required|min:5',
            'review' => 'required|min:10',
            'rate' => 'required',
        ]);

        \App\Models\Review::create([
            'service_id' =>  $this->service_id,
            'user_id' => Auth::id(),
            'IP' => $_SERVER['REMOTE_ADDR'],
            'rate' => $this->rate,
            'subject' => $this->subject,
            'review' => $this->review,
        ]);

        session()->flash('message', 'Review Send Successfully');
        $this->resetInput();
    }
}
