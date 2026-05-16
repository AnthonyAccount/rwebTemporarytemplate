@extends('backend.layouts.app')

@section('title', 'Users')
@section('page-title', 'Users')

@section('content')

    <div class="flex justify-between items-center mb-6">
        <h3 class="text-xl font-semibold text-gray-800">
            User List
        </h3>

        @include('backend.includes.button', [
            'href' => route('admin.users.create'),
            'text' => 'Add User',
        ])
    </div>

    @if (session('success'))
        <div class="mb-4 rounded-lg bg-green-100 border border-green-300 text-green-700 px-4 py-3">
            {{ session('success') }}
        </div>
    @endif

    @component('backend.includes.table', [
        'headers' => ['ID', 'Name', 'Email', 'Role', 'Action'],
        'searchRoute' => route('admin.users.index'),
        'placeholder' => 'Search users...',
        'pagination' => $users,
    ])
        @forelse ($users as $user)
            <tr>
                <td class="px-6 py-4">
                    {{ $user->id }}
                </td>

                <td class="px-6 py-4 font-medium text-gray-800">
                    {{ $user->name }}
                </td>

                <td class="px-6 py-4 text-gray-600">
                    {{ $user->email }}
                </td>

                <td class="px-6 py-4">
                    @if ($user->role)
                        <span class="px-3 py-1 rounded-full text-xs bg-blue-100 text-blue-700">
                            {{ $user->role->name }}
                        </span>
                    @else
                        <span class="text-gray-400">
                            No Role
                        </span>
                    @endif
                </td>

                <td class="px-6 py-4">
                    <div class="flex items-center gap-3">
                        <a href="{{ route('admin.users.edit', $user->id) }}"
                            class="text-blue-600 hover:text-blue-800 font-medium">
                            Edit
                        </a>

                        <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}"
                            onsubmit="return confirm('Delete this user?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="text-red-600 hover:text-red-800 font-medium">
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="px-6 py-6 text-center text-gray-500">
                    No users found.
                </td>
            </tr>
        @endforelse
    @endcomponent

@endsection
