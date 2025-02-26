<div>
    <div class="ml-4">
        <h1 class="text-2xl font-bold p-4">FAQs</h1>
        @foreach ($faqs as $index => $faq)
            <div class="border rounded-lg shadow-sm mb-4">
                <button wire:click="toggle({{ $index }})" class="w-full text-left p-4 bg-gray-200 font-bold">
                    {{ $faq['question'] }}
                </button>
                @if ($openIndex === $index)
                    <div class="p-4 bg-white border-t">
                        {{ $faq['answer'] }}
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>
