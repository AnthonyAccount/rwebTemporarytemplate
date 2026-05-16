@extends('backend.layouts.app')

@section('title', 'Privileges')
@section('page-title', 'Privileges')

@section('content')

    <div class="flex justify-between items-center mb-6">
        <h3 class="text-xl font-semibold text-gray-800">
            Privilege List
        </h3>

        @include('backend.includes.button', [
            'href' => route('admin.privileges.create'),
            'text' => 'Add Privilege',
        ])
    </div>

    @if (session('success'))
        <div class="mb-4 rounded-lg bg-green-100 border border-green-300 text-green-700 px-4 py-3">
            {{ session('success') }}
        </div>
    @endif

    @component('backend.includes.table', [
        'headers' => ['ID', 'Name', 'Description', 'Action'],
        'searchRoute' => route('admin.privileges.index'),
        'placeholder' => 'Search privileges...',
        'pagination' => $privileges,
    ])
        @forelse ($privileges as $privilege)
            <tr>

                <td class="px-6 py-4">
                    {{ $privilege->id }}
                </td>

                <td class="px-6 py-4 font-medium text-gray-800">
                    {{ $privilege->name }}
                </td>

                <td class="px-6 py-4 text-gray-600">
                    {{ $privilege->description ?? 'N/A' }}
                </td>

                <td class="px-6 py-4">

                    <div class="flex items-center gap-3">

                        <a href="{{ route('admin.privileges.edit', $privilege->id) }}"
                            class="text-blue-600 hover:text-blue-800 font-medium">
                            Edit
                        </a>

                        <form method="POST" action="{{ route('admin.privileges.destroy', $privilege->id) }}"
                            onsubmit="return confirm('Delete this privilege?')">

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
                    No privileges found.
                </td>
            </tr>
        @endforelse
    @endcomponent

@endsection
