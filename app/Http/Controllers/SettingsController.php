<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;

final class SettingsController
{
    use ValidatesRequests;

    public function show()
    {
        return view('settings');
    }

    public function update()
    {
        session()->flash('alert', 'User settings saved successfully.');

        return redirect()->route('settings');
    }
}
