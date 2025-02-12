<div class="container" wire:poll.5s="refreshApplications">
    <h1>Office Staff Dashboard</h1>

    <!-- Check if there are any applications -->
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
            <tbody>
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
