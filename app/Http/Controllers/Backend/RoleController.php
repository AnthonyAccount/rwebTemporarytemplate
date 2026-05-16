<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\RoleRequest;
use App\Models\Privilege;
use App\Models\Role;
use App\Services\Backend\RoleService;

class RoleController extends Controller
{
    public function __construct(
        protected RoleService $roleService
    ) {
    }

    public function index()
    {
        $roles = $this->roleService->getAllRoles();

        return view('backend.pages.roles.index', compact('roles'));
    }

    public function create()
    {
        $privileges = Privilege::orderBy('name')->get();

        return view('backend.pages.roles.create', compact('privileges'));
    }

    public function store(RoleRequest $request)
    {
        $this->roleService->createRole($request->validated());

        return redirect()
            ->route('admin.roles.index')
            ->with('success', 'Role created successfully.');
    }

    public function edit(Role $role)
    {
        $privileges = Privilege::orderBy('name')->get();

        $role->load('privileges');

        return view('backend.pages.roles.edit', compact('role', 'privileges'));
    }

    public function update(RoleRequest $request, Role $role)
    {
        $this->roleService->updateRole($role, $request->validated());

        return redirect()
            ->route('admin.roles.index')
            ->with('success', 'Role updated successfully.');
    }

    public function destroy(Role $role)
    {
        $this->roleService->deleteRole($role);

        return redirect()
            ->route('admin.roles.index')
            ->with('success', 'Role deleted successfully.');
    }
}