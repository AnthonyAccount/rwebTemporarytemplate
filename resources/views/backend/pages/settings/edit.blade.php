@extends('backend.layouts.app')

@section('title', 'Settings')
@section('page-title', 'Settings')

@section('content')

    @if (session('success'))
        <div class="mb-4 rounded-lg bg-green-100 border border-green-300 text-green-700 px-4 py-3">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-4 rounded-lg bg-red-100 border border-red-300 text-red-700 px-4 py-3">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data"
        class="bg-white border border-gray-200 rounded-xl overflow-hidden">

        @csrf
        @method('PUT')

        <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
            <h3 class="text-lg font-semibold text-gray-800">
                Website Settings
            </h3>
            <p class="text-sm text-gray-500 mt-1">
                Manage global website information and SEO.
            </p>
        </div>

        <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Site Name
                </label>
                <input type="text" name="site_name" value="{{ old('site_name', $setting->site_name) }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Site URL
                </label>
                <input type="url" name="site_url" value="{{ old('site_url', $setting->site_url) }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Logo
                </label>
                <input type="file" name="logo" class="w-full border border-gray-300 rounded-lg px-4 py-2">

                @if ($setting->logo)
                    <img src="{{ asset('storage/' . $setting->logo) }}" class="mt-3 h-16 rounded border">
                @endif
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Favicon
                </label>
                <input type="file" name="favicon" class="w-full border border-gray-300 rounded-lg px-4 py-2">

                @if ($setting->favicon)
                    <img src="{{ asset('storage/' . $setting->favicon) }}" class="mt-3 h-10 rounded border">
                @endif
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Thumbnail
                </label>
                <input type="file" name="thumbnail" class="w-full border border-gray-300 rounded-lg px-4 py-2">

                @if ($setting->thumbnail)
                    <img src="{{ asset('storage/' . $setting->thumbnail) }}" class="mt-3 h-20 rounded border">
                @endif
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    OG Image
                </label>
                <input type="file" name="og_image" class="w-full border border-gray-300 rounded-lg px-4 py-2">

                @if ($setting->og_image)
                    <img src="{{ asset('storage/' . $setting->og_image) }}" class="mt-3 h-20 rounded border">
                @endif
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Meta Title
                </label>
                <input type="text" name="meta_title" value="{{ old('meta_title', $setting->meta_title) }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Meta Description
                </label>
                <textarea name="meta_description" rows="3" class="w-full border border-gray-300 rounded-lg px-4 py-2">{{ old('meta_description', $setting->meta_description) }}</textarea>
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Meta Keywords
                </label>
                <textarea name="meta_keywords" rows="2" class="w-full border border-gray-300 rounded-lg px-4 py-2">{{ old('meta_keywords', $setting->meta_keywords) }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    OG Title
                </label>
                <input type="text" name="og_title" value="{{ old('og_title', $setting->og_title) }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Canonical URL
                </label>
                <input type="url" name="canonical_url" value="{{ old('canonical_url', $setting->canonical_url) }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    OG Description
                </label>
                <textarea name="og_description" rows="3" class="w-full border border-gray-300 rounded-lg px-4 py-2">{{ old('og_description', $setting->og_description) }}</textarea>
            </div>

            <div class="md:col-span-2 flex items-center gap-2">
                <input type="hidden" name="maintenance_mode" value="0">

                <input type="checkbox" name="maintenance_mode" value="1"
                    {{ old('maintenance_mode', $setting->maintenance_mode) ? 'checked' : '' }}>

                <span class="text-sm text-gray-700">
                    Enable maintenance mode
                </span>
            </div>

        </div>

        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex justify-end">
            <button type="submit" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
                Save Settings
            </button>
        </div>

    </form>

@endsection
