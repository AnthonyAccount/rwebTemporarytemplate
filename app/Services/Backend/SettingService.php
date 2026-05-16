<?php

namespace App\Services\Backend;

use App\Models\Setting;

class SettingService
{
    public function getSetting(): Setting
    {
        return Setting::firstOrCreate([]);
    }

    public function updateSetting(array $data): Setting
    {
        $setting = $this->getSetting();

        $payload = [
            'site_name' => $data['site_name'] ?? null,
            'site_url' => $data['site_url'] ?? null,

            'meta_title' => $data['meta_title'] ?? null,
            'meta_description' => $data['meta_description'] ?? null,
            'meta_keywords' => $data['meta_keywords'] ?? null,

            'og_title' => $data['og_title'] ?? null,
            'og_description' => $data['og_description'] ?? null,

            'canonical_url' => $data['canonical_url'] ?? null,
            'maintenance_mode' => $data['maintenance_mode'] ?? false,
        ];

        foreach (['logo', 'favicon', 'thumbnail', 'og_image'] as $field) {

            if (request()->hasFile($field)) {

                // Delete old file
                if ($setting->{$field}) {

                    $oldPath = public_path($setting->{$field});

                    if (file_exists($oldPath)) {
                        unlink($oldPath);
                    }
                }

                $file = request()->file($field);

                $filename = time() . '_' . $field . '.' . $file->getClientOriginalExtension();

                $folder = 'uploads/settings';

                $file->move(public_path($folder), $filename);

                $payload[$field] = $folder . '/' . $filename;
            }
        }

        $setting->update($payload);

        return $setting;
    }
}