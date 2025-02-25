@php
    $user = auth()->user();
    $hasFirstStep = \App\Models\Apply::where('user_id', $user->id)->exists();
    $hasSecondStep = \App\Models\SecondApply::where('user_id', $user->id)->exists();

    $steps = [
        1 => ['title' => 'Personal Information', 'enabled' => true, 'route' => 'applications.create'],
        2 => ['title' => 'Address Information', 'enabled' => $hasFirstStep, 'route' => 'second-apply.create'],
    ];
@endphp

<x-app-layout>
    <div class="flex">
        <x-side-navig-bar />
        <!-- Main Content -->
        <div class="flex-1 p-6 bg-keep-white flex flex-col items-center justify-center">
            <!-- Display Error Message -->
            @if(session('error'))
                <div class="bg-red-500 text-white px-4 py-2 rounded-md mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <!-- CARDS -->
            <div class="flex gap-x-6 w-full max-w-5xl items-center justify-center">
                @foreach ($steps as $step => $data)
                    <a href="{{ $data['enabled'] ? route($data['route']) : '#' }}"
                       class="w-40 h-40 bg-keep-light-blue text-white p-4 shadow-lg rounded-xl flex flex-col items-center justify-center transition-all
                              {{ $data['enabled'] ? 'hover:bg-keep-yellow hover:text-black cursor-pointer' : 'cursor-not-allowed opacity-50' }}">
                        <h2 class="font-semibold text-lg">Step {{ $step }}</h2>
                        <p class="text-sm text-center">{{ $data['title'] }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
