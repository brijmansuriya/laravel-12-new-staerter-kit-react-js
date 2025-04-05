<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;


class UserController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('admin/user/index');
    }

    public function create(Request $request)
    {
        return Inertia::render('admin/user/create');
    }

    public function edit(Request $request, $id)
    {
        return Inertia::render('admin/user/edit', ['id' => $id]);
    }
    public function show(Request $request, $id)
    {
        return Inertia::render('admin/user/show', ['id' => $id]);
    }
    public function store(Request $request)
    {
        // Store user logic
    }
    public function update(Request $request, $id)
    {
        // Update user logic
    }
    public function destroy(Request $request, $id)
    {
        // Delete user logic
    }
    public function massDestroy(Request $request)
    {
        // Mass delete users logic
    }
}
