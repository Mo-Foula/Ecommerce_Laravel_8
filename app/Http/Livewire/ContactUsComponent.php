<?php

namespace App\Http\Livewire;
use App\Models\Message;

use Livewire\Component;

class ContactUsComponent extends Component
{
    public $name;
    public $email;
    public $number;
    public $message;

    public function submitMessage()
    {
      echo "$this->name hena";
      $userMessage = new Message();
      $userMessage->name = $this->name;
      $userMessage->email = $this->email;
      $userMessage->phone_number = $this->number;
      $userMessage->message = $this->message;
      $userMessage->save();
    }
    public function render()
    {
        return view('livewire.contact-us-component')->layout('layouts.base');
    }
}
