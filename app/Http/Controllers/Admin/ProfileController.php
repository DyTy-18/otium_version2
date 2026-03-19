<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function edit(): View
    {
        return view('admin.profile.edit', ['user' => auth()->user()]);
    }

    public function update(Request $request): RedirectResponse
    {
        $user = auth()->user();

        $request->validate([
            'name'        => 'required|string|max:255',
            'job_title'   => 'nullable|string|max:150',
            'bio'         => 'nullable|string|max:1000',
            'linkedin'    => 'nullable|url|max:255',
            'twitter'     => 'nullable|url|max:255',
            'avatar'      => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'job_title', 'bio', 'linkedin', 'twitter']);

        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $user->update($data);

        return redirect()->route('admin.profile.edit')->with('success', 'Perfil actualizado correctamente.');
    }
}
