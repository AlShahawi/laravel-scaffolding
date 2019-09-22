<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display list of all users.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::paginate();

        return view('dashboard.users.index', compact('users'));
    }

    /**
     * Show specific user.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(User $user)
    {
        return view('dashboard.users.show', compact('user'));
    }

    /**
     * Display creation form.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\UserRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(UserRequest $request)
    {
        User::create($request->transformed());

        flash(trans('users.messages.created'));

        return redirect()->route('dashboard.users.index');
    }

    /**
     * Display editing form.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit', compact('user'));
    }

    /**
     * Update user.
     *
     * @param \App\Http\Requests\Dashboard\UserRequest $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->transformed());

        flash(trans('users.messages.updated'));

        return redirect()->route('dashboard.users.show', $user);
    }

    /**
     * Delete user.
     *
     * @param \App\Models\User $user
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();

        flash(trans('users.messages.deleted'));

        return redirect()->route('dashboard.users.index');
    }
}
