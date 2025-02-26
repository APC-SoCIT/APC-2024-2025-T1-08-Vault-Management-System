<div class="container" wire:poll.5s="refreshApplications">
    <h1>Office Staff Dashboard</h1>

    <!-- Check if there are any applications -->
    <div class="overflow-auto max-h-[400px]">
                    <table class="table table-bordered w-full rounded-lg overflow-hidden">
                        <thead class="bg-[#102A45] text-white text-lg font-semibold rounded-t-lg">
    @if($applications->isEmpty())
        <p>No applications found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody class="bg-white border border-gray-300 text-blue-900 shadow-lg rounded-xl p-6 mt-6 gap-3">
                @foreach($applications as $application)
                    <tr>
                        <td>{{ $application->full_name }}</td>
                        <td>{{ $application->email }}</td>
                        <td>{{ $application->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
