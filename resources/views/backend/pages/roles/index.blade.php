@extends('backend.layouts.app')

@section('title', 'Roles')
@section('page-title', 'Roles')

@section('content')

    <div class="flex justify-between items-center mb-6">
        <h3 class="text-xl font-semibold text-gray-800">
            Role List
        </h3>

        @include('backend.includes.button', [
            'href' => route('admin.roles.create'),
            'text' => 'Add Role',
        ])
    </div>

    @if (session('success'))
        <div class="mb-4 rounded-lg bg-green-100 border border-green-300 text-green-700 px-4 py-3">
            {{ session('success') }}
        </div>
    @endif

    @component('backend.includes.table', [
        'headers' => ['ID', 'Name', 'Privileges', 'Action'],
        'searchRoute' => route('admin.roles.index'),
        'placeholder' => 'Search roles...',
        'pagination' => $roles,
    ])

        @forelse ($roles as $role)
            <tr>
                <td class="px-6 py-4">
                    {{ $role->id }}
                </td>

                <td class="px-6 py-4 font-medium text-gray-800">
                    {{ $role->name }}
                </td>

                <td class="px-6 py-4">
                    <div class="flex flex-wrap gap-2">
                        @forelse ($role->privileges as $privilege)
                            <span class="px-3 py-1 rounded-full text-xs bg-blue-100 text-blue-700">
                                {{ $privilege->name }}
                            </span>
                        @empty
                            <span class="text-gray-400">
                                No Privileges
                            </span>
                        @endforelse
                    </div>
                </td>

                <td class="px-6 py-4">
                    <div class="flex items-center gap-3">
                        <a href="{{ route('admin.roles.edit', $role->id) }}"
                            class="text-blue-600 hover:text-blue-800 font-medium">
                            Edit
                        </a>

                        <form method="POST" action="{{ route('admin.roles.destroy', $role->id) }}"
                            onsubmit="return confirm('Delete this role?')">
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
                <td colspan="4" class="px-6 py-6 text-center text-gray-500">
                    No roles found.
                </td>
            </tr>
        @endforelse

    @endcomponent

@endsection
