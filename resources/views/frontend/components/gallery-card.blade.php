{{-- resources/views/frontend/components/gallery-card.blade.php --}}

<div class="bg-white rounded-lg shadow-md p-3 {{ $class ?? '' }}">

    <div class="flex gap-4 mb-3">
        <img src="{{ asset($logo) }}" alt="Gallery Logo" class="h-9 object-contain">

        <div>
            <p class="text-[11px] text-gray-500 leading-4">
                {{ $desc }}
            </p>

            <a href="{{ $link ?? '#' }}" class="text-green-600 text-[11px] font-semibold">
                Visit Now →
            </a>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-2">
        @foreach ($images as $img)
            <img src="{{ asset($img) }}" alt="Gallery Image" class="h-32 w-full object-cover rounded-md">
        @endforeach
    </div>

</div>
