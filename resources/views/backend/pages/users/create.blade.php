@extends('backend.layouts.app')

@section('title', 'Create User')
@section('page-title', 'Create User')

@section('content')

    <form method="POST" action="{{ route('admin.users.store') }}" class="bg-white rounded-xl shadow p-6">
        @csrf

        <div class="mb-5">
            <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
            <input type="text" name="name" class="w-full border rounded-lg px-4 py-3" required>
        </div>

        <div class="mb-5">
            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
            <input type="email" name="email" class="w-full border rounded-lg px-4 py-3" required>
        </div>

        <div class="mb-5">
            <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
            <input type="password" name="password" class="w-full border rounded-lg px-4 py-3" required>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Role</label>
            <select name="role_id" class="w-full border rounded-lg px-4 py-3" required>
                <option value="">Select Role</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>

        <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg">
            Save User
        </button>
    </form>

@endsection
