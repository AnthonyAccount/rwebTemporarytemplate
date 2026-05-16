<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PrivilegeRequest;
use App\Models\Privilege;
use App\Services\Backend\PrivilegeService;

class PrivilegeController extends Controller
{
    public function __construct(
        protected PrivilegeService $privilegeService
    ) {
    }

    public function index()
    {
        $privileges = $this->privilegeService->getAllPrivileges();

        return view('backend.pages.privileges.index', compact('privileges'));
    }

    public function create()
    {
        return view('backend.pages.privileges.create');
    }

    public function store(PrivilegeRequest $request)
    {
        $this->privilegeService->createPrivilege($request->validated());

        return redirect()
            ->route('admin.privileges.index')
            ->with('success', 'Privilege created successfully.');
    }

    public function edit(Privilege $privilege)
    {
        return view('backend.pages.privileges.edit', compact('privilege'));
    }

    public function update(PrivilegeRequest $request, Privilege $privilege)
    {
        $this->privilegeService->updatePrivilege(
            $privilege,
            $request->validated()
        );

        return redirect()
            ->route('admin.privileges.index')
            ->with('success', 'Privilege updated successfully.');
    }

    public function destroy(Privilege $privilege)
    {
        $this->privilegeService->deletePrivilege($privilege);

        return redirect()
            ->route('admin.privileges.index')
            ->with('success', 'Privilege deleted successfully.');
    }
}