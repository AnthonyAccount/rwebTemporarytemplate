<div class="bg-white border border-gray-200 rounded-xl overflow-hidden">

    @if (!empty($searchRoute))
        <div class="bg-gray-50 border-b border-gray-200 px-4 py-3">
            <form method="GET" action="{{ $searchRoute }}" class="flex items-center gap-3">

                <div class="relative flex-1">
                    <input type="text" name="search" value="{{ request('search') }}"
                        placeholder="{{ $placeholder ?? 'Search...' }}"
                        class="w-full rounded-md border border-gray-300 bg-white px-4 py-2 pl-10 text-sm text-gray-700 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 focus:outline-none">

                    <span class="absolute left-3 top-2.5 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35m1.1-5.4a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" />
                        </svg>
                    </span>
                </div>

                <button type="submit"
                    class="inline-flex items-center rounded-md border border-gray-300 bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-200">
                    Filter
                </button>

                @if (request('search'))
                    <a href="{{ $searchRoute }}"
                        class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100">
                        Reset
                    </a>
                @endif

            </form>
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    @foreach ($headers as $header)
                        <th class="px-5 py-3 text-left font-semibold text-gray-600 whitespace-nowrap">
                            {{ $header }}
                        </th>
                    @endforeach
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 bg-white">
                {{ $slot ?? '' }}
            </tbody>
        </table>
    </div>

    @if (!empty($pagination))
        <div class="bg-gray-50 border-t border-gray-200 px-4 py-3">
            {{ $pagination->links() }}
        </div>
    @endif

</div>
