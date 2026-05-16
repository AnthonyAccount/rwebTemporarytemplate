@extends('backend.layouts.app')

@section('title', 'Create Role')
@section('page-title', 'Create Role')

@section('content')

    <form method="POST" action="{{ route('admin.roles.store') }}" class="bg-white rounded-xl shadow p-6">
        @csrf

        <div class="mb-5">
            <label class="block text-sm font-medium text-gray-700 mb-2">Role Name</label>
            <input type="text" name="name" class="w-full border rounded-lg px-4 py-3" required>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-3">Privileges</label>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                @foreach ($privileges as $privilege)
                    <label class="flex items-center gap-2 bg-gray-50 border rounded-lg px-4 py-3">
                        <input type="checkbox" name="privileges[]" value="{{ $privilege->id }}">
                        <span>{{ $privilege->name }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg">
            Save Role
        </button>
    </form>

@endsection
