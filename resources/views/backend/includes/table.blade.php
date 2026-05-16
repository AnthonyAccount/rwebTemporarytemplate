<div class="bg-white rounded-xl shadow overflow-hidden">

    @if (!empty($searchRoute))
        <div class="p-4 border-b border-gray-200">
            <form method="GET" action="{{ $searchRoute }}" class="flex gap-3">
                <input type="text" name="search" value="{{ request('search') }}"
                    placeholder="{{ $placeholder ?? 'Search...' }}"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                <button type="submit" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
                    Filter
                </button>

                @if (request('search'))
                    <a href="{{ $searchRoute }}"
                        class="px-5 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg">
                        Reset
                    </a>
                @endif
            </form>
        </div>
    @endif

    <table class="w-full text-sm text-left">
        <thead class="bg-gray-100 text-gray-700">
            <tr>
                @foreach ($headers as $header)
                    <th class="px-6 py-4 font-semibold">
                        {{ $header }}
                    </th>
                @endforeach
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            {{ $slot ?? '' }}
        </tbody>
    </table>

    @if (!empty($pagination))
        <div class="p-4 border-t border-gray-200">
            {{ $pagination->links() }}
        </div>
    @endif

</div>
