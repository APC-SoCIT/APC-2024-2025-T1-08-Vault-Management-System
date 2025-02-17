@php
    $user = auth()->user();
    $hasApplicantInfo = \App\Models\Apply::where('user_id', $user->id)->exists();
    $hasParentsInfo = \App\Models\FirstBeneficiary::where('user_id', $user->id)->exists();
    $hasBeneficiariesInfo = \App\Models\Apply::where('user_id', $user->id)->exists();
    $hasRequirements = \App\Models\Apply::where('user_id', $user->id)->exists();
    $hasDonation = \App\Models\Apply::where('user_id', $user->id)->exists();
@endphp

<x-app-layout>
    <div class="flex">
        <x-side-navig-bar />
        <!-- Main Content -->
        <div class="flex-1 p-6 bg-keep-white flex justify-center">
            <!-- CARDS -->
            <div class="flex gap-x-6 w-full max-w-5xl items-center justify-center">
                @php
                    $steps = [
                        1 => ['title' => 'Applicant Information', 'enabled' => true],
                        2 => ['title' => 'Parents Information', 'enabled' => $hasApplicantInfo],
                        3 => ['title' => 'Beneficiaries Information', 'enabled' => $hasParentsInfo],
                        4 => ['title' => 'Requirements Submission', 'enabled' => $hasBeneficiariesInfo],
                        5 => ['title' => 'Donation', 'enabled' => $hasRequirements],
                    ];
                @endphp

                @foreach ($steps as $step => $data)
                    <a href="{{ $data['enabled'] ? route('with.existing') : '#' }}"
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
