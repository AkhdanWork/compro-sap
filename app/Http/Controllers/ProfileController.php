<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\SocialMedia;

class ProfileController extends Controller
{
    public function edit(Request $request): View
    {
        $socialMedia = SocialMedia::orderBy('order', 'asc')->get();
        
        return view('profile.edit', [
            'user' => $request->user(),
            'socialMedia' => $socialMedia,
        ]);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function updatePassword(Request $request): RedirectResponse
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $request->user()->update([
            'password' => bcrypt($request->password)
        ]);

        return Redirect::route('profile.edit')->with('status', 'password-updated');
    }

    public function storeSocialMedia(Request $request): RedirectResponse
    {
        $request->validate([
            'platform' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'icon_svg' => 'required|string',
        ]);

        $order = SocialMedia::max('order') + 1 ?? 0;

        SocialMedia::create([
            'platform' => $request->platform,
            'url' => $request->url,
            'icon_svg' => $request->icon_svg,
            'order' => $order,
            'is_active' => true,
        ]);

        return Redirect::route('profile.edit')->with('status', 'social-media-added');
    }

    public function updateSocialMedia(Request $request, SocialMedia $socialMedia): RedirectResponse
    {
        $request->validate([
            'platform' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'icon_svg' => 'required|string',
            'is_active' => 'nullable|boolean',
        ]);

        $socialMedia->update([
            'platform' => $request->platform,
            'url' => $request->url,
            'icon_svg' => $request->icon_svg,
            'is_active' => $request->has('is_active') ? 1 : 0,
        ]);

        return Redirect::route('profile.edit')->with('status', 'social-media-updated');
    }

    public function destroySocialMedia(SocialMedia $socialMedia): RedirectResponse
    {
        $socialMedia->delete();
        
        $remaining = SocialMedia::orderBy('order', 'asc')->get();
        foreach ($remaining as $index => $social) {
            $social->update(['order' => $index]);
        }

        return Redirect::route('profile.edit')->with('status', 'social-media-deleted');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}