<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SettingRequest;
use App\Services\Backend\SettingService;

class SettingController extends Controller
{
    public function __construct(
        protected SettingService $settingService
    ) {
    }

    public function edit()
    {
        $setting = $this->settingService->getSetting();

        return view('backend.pages.settings.edit', compact('setting'));
    }

    public function update(SettingRequest $request)
    {
        $this->settingService->updateSetting($request->validated());

        return redirect()
            ->route('admin.settings.edit')
            ->with('success', 'Settings updated successfully.');
    }
}