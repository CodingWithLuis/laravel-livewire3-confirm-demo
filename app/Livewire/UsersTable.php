<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;

class UsersTable extends Component
{
    public function render(): View
    {
        $users = User::all();

        return view('livewire.users-table', [
            'users' => $users
        ]);
    }

    public function delete(int $user_id): void
    {
        $user = User::query()->findOrFail($user_id);

        $user->delete();
    }
}
