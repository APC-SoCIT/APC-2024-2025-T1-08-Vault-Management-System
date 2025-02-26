@php
    $user = auth()->user();
    $hasFirstStep = \App\Models\Apply::where('user_id', $user->id)->exists();
    $hasSecondStep = \App\Models\SecondApply::where('user_id', $user->id)->exists();
    $hasThirdStep = \App\Models\ThirdApply::where('user_id', $user->id)->exists();
    $hasFourthStep = \App\Models\FourthApply::where('user_id', $user->id)->exists();
    $hasFifthStep = \App\Models\Beneficiary::where('user_id', $user->id)->exists();

    $steps = [
        1 => ['title' => 'Personal Information', 'enabled' => !$hasFirstStep, 'completed' => $hasFirstStep, 'route' => 'applications.create'],
        2 => ['title' => 'Address Information', 'enabled' => $hasFirstStep && !$hasSecondStep, 'completed' => $hasSecondStep, 'route' => 'second-apply.create'],
        3 => ['title' => 'Occupation Information', 'enabled' => !$hasSecondStep && !$hasThirdStep, 'completed' => $hasThirdStep, 'route' => 'third-apply.create'],
        4 => ['title' => 'Spouse and Parents Information', 'enabled' => !$hasSecondStep && $hasThirdStep, 'completed' => $hasFourthStep, 'route' => 'fourth-apply.create'],
        5 => ['title' => 'Beneficaries Information', 'enabled' => !$hasSecondStep && $hasThirdStep, 'completed' => $hasFifthStep, 'route' => 'fifth-apply.create'],
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

            @if (session('success'))
                <div class="mt-4 text-green-600 font-semibold text-center">
                    {{ session('success') }}
                </div>
            @endif

            <!-- CARDS -->
            <div class="flex gap-x-6 w-full max-w-5xl items-center justify-center">
                @foreach ($steps as $step => $data)
                    <a href="{{ ($data['enabled'] && !$data['completed']) ? route($data['route']) : '#' }}"
                       class="w-40 h-40 p-4 shadow-lg rounded-xl flex flex-col items-center justify-center transition-all
                              {{ $data['completed'] ? 'bg-green-500 text-white cursor-not-allowed' : ($data['enabled'] ? 'bg-keep-light-blue text-white hover:bg-keep-yellow hover:text-black cursor-pointer' : 'bg-keep-light-blue text-white cursor-not-allowed opacity-50') }}">
                        <h2 class="font-semibold text-lg">Step {{ $step }}</h2>
                        <p class="text-sm text-center">{{ $data['title'] }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
