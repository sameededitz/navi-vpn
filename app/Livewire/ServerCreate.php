<?php

namespace App\Livewire;

use App\Models\Server;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServerCreate extends Component
{
    use WithFileUploads;

    #[Validate('required|string|min:3|max:255')]
    public $name;

    #[Validate('required|in:1,0')]
    public $status;

    #[Validate('required|integer')]
    public $ping;

    #[Validate('image|mimes:jpeg,png,gif,bmp|max:20480')]
    public $image;

    public function removeImage()
    {
        $this->image = null;
    }

    public function submit()
    {
        $this->validate();
        $server = Server::create([
            'name' => $this->name,
            'status' => $this->status,
            'ping' => $this->ping
        ]);

        if ($this->image) {
            $server->addMedia($this->image->getRealPath())
                ->usingFileName($this->image->getClientOriginalName())
                ->toMediaCollection('server_logo');
        }
        return redirect()->route('all-servers')->with([
            'status' => 'success',
            'message' => 'Server Added Successfully',
        ]);
    }
    public function render()
    {
        return view('livewire.server-create');
    }
}
