<div>
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Office Staff Dashboard</h1>

    <div class="overflow-auto max-h-[400px] rounded-xl bg-white p-4"> 
        <table class="w-full border-collapse rounded-xl overflow-hidden">
            <thead>
                <tr class="bg-[#102A45] text-white text-lg">
                    <th class="py-3 px-4 text-left">Full Name</th>
                    <th class="py-3 px-4 text-left">Email</th>
                    <th class="py-3 px-4 text-left">Mobile Number</th>
                    <th class="py-3 px-4 text-left">View</th>
                    <th class="py-3 px-4 text-left">Status</th>
                    <th class="py-3 px-4 text-left">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300">
                @if($applications->isEmpty())
                    <tr>
                        <td colspan="6" class="text-gray-600 text-center py-10 border border-gray-300 rounded-xl">
                            No applications found.
                        </td>
                    </tr>
                @else
                    @foreach($applications as $application)
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4">{{ $application->full_name }}</td>
                            <td class="py-3 px-4">{{ $application->email }}</td>
                            <td class="py-3 px-4">{{ $application->mobile_number }}</td>
                            <td class="py-3 px-4">
                                <button class="text-blue-600 underline hover:text-blue-800" wire:click="toggleForms({{ $application->id }})">
                                    View Details
                                </button>
                            </td>
                            <td class="py-3 px-4 font-semibold {{ $application->status == 'approved' ? 'text-green-600' : 'text-red-600' }}">
                                {{ ucfirst($application->status) }}
                            </td>
                            <td class="py-3 px-4 flex items-center gap-2">
                                <button wire:click="updateStatus({{ $application->id }}, 'approved')" class="bg-green-600 text-white px-3 py-1 rounded-lg hover:bg-green-700">
                                    Approve
                                </button>
                                <button wire:click="updateStatus({{ $application->id }}, 'rejected')" class="bg-red-600 text-white px-3 py-1 rounded-lg hover:bg-red-700">
                                    Reject
                                </button>
                            </td>
                        </tr>
                        @if($expandedApplicationId === $application->id)
                            <tr class="bg-gray-100">
                                <td colspan="6" class="p-6">
                                    <div class="grid grid-cols-2 gap-6 border-b pb-4 mb-4">
                                        <div>
                                            <h2 class="text-lg font-semibold">First Apply Form</h2>
                                            <p><strong>Full Name:</strong> {{ $application->full_name }}</p>
                                            <p><strong>Email:</strong> {{ $application->email }}</p>
                                            <p><strong>Mobile Number:</strong> {{ $application->mobile_number }}</p>
                                            <p><strong>Date of Birth:</strong> {{ $application->date_of_birth }}</p>
                                            <p><strong>Place of Birth:</strong> {{ $application->place_of_birth }}</p>
                                            <p><strong>Citizenship:</strong> {{ $application->citizenship }}</p>
                                            <p><strong>Place of Catholic Baptism:</strong> {{ $application->place_of_catholic_baptism }}</p>
                                            <p><strong>Date of Catholic Baptism:</strong> {{ $application->date_of_catholic_baptism }}</p>
                                            <p><strong>Religious Organization:</strong> {{ $application->religious_organization_affiliated_with }}</p>
                                            <p><strong>Vault ID:</strong> {{ $application->vault_id }}</p>
                                        </div>
                                    </div>
                                    @if($application->secondApply)
                                        <div class="border-b pb-4 mb-4">
                                            <h2 class="text-lg font-bold">Second Apply Form</h2>
                                            <p><strong>Current Address:</strong> {{ implode(', ', array_filter([$application->secondApply->currstreet, $application->secondApply->currbarangay, $application->secondApply->currcity, $application->secondApply->currprovince, $application->secondApply->currregion])) }}</p>
                                            <p><strong>Permanent Address:</strong> {{ implode(', ', array_filter([$application->secondApply->permstreet, $application->secondApply->permbarangay, $application->secondApply->permcity, $application->secondApply->permprovince, $application->secondApply->permregion])) }}</p>
                                        </div>
                                    @endif
                                    @if($application->thirdApply)
                                        <div class="border-b pb-4 mb-4">
                                            <h2 class="text-lg font-bold">Third Apply Form</h2>
                                            <p><strong>Occupation:</strong> {{ $application->thirdApply->donors_occupation }}</p>
                                            <p><strong>Employer / Business Name:</strong> {{ $application->thirdApply->employers_name_or_business_name }}</p>
                                            <p><strong>Business Address:</strong> {{ $application->thirdApply->business_address }}</p>
                                            <p><strong>Business Email:</strong> {{ $application->thirdApply->employers_email_or_business_email_address }}</p>
                                            <p><strong>Position:</strong> {{ $application->thirdApply->position }}</p>
                                        </div>
                                    @endif
                                    @if($application->fourthApply)
                                        <div class="border-b pb-4 mb-4">
                                            <h2 class="text-lg font-bold">Fourth Apply Form</h2>
                                            <p><strong>Spouse's Name:</strong> {{ $application->fourthApply->spouses_name }}</p>
                                            <p><strong>Spouse's Date of Birth:</strong> {{ $application->fourthApply->spouses_date_of_birth }}</p>
                                            <p><strong>Spouse's Place of Birth:</strong> {{ $application->fourthApply->spouses_place_of_birth }}</p>
                                            <p><strong>Spouse's Email:</strong> {{ $application->fourthApply->spouses_email_address }}</p>
                                            <p><strong>Spouse's Landline:</strong> {{ $application->fourthApply->spouses_landline_number }}</p>
                                            <p><strong>Spouse's Mobile:</strong> {{ $application->fourthApply->spouses_mobile_number }}</p>
                                            <p><strong>Father's Name:</strong> {{ $application->fourthApply->fathers_name }}</p>
                                            <p><strong>Father's Email:</strong> {{ $application->fourthApply->fathers_email_address }}</p>
                                            <p><strong>Father's Landline:</strong> {{ $application->fourthApply->fathers_landline_number }}</p>
                                            <p><strong>Father's Mobile:</strong> {{ $application->fourthApply->fathers_mobile_number }}</p>
                                            <p><strong>Mother's Name:</strong> {{ $application->fourthApply->mothers_name }}</p>
                                            <p><strong>Mother's Email:</strong> {{ $application->fourthApply->mothers_email_address }}</p>
                                            <p><strong>Mother's Landline:</strong> {{ $application->fourthApply->mothers_landline_number }}</p>
                                            <p><strong>Mother's Mobile:</strong> {{ $application->fourthApply->mothers_mobile_number }}</p>
                                        </div>
                                    @endif
                                    @if($application->beneficiary)
                                        <div>
                                            <h2 class="text-lg font-bold">Beneficiary Information</h2>
                                            <div class="border-b pb-4 mb-4">
                                                <h3 class="text-md font-semibold">First Beneficiary</h3>
                                                <p><strong>Full Name:</strong> {{ $application->beneficiary->first_full_name }}</p>
                                                <p><strong>Permanent Address:</strong> {{ $application->beneficiary->first_permanent_address }}</p>
                                                <p><strong>Current Address:</strong> {{ $application->beneficiary->first_current_address }}</p>
                                                <p><strong>Provincial Address:</strong> {{ $application->beneficiary->first_provincial_address }}</p>
                                                <p><strong>Email:</strong> {{ $application->beneficiary->first_email }}</p>
                                                <p><strong>Mobile Number:</strong> {{ $application->beneficiary->first_mobile_number }}</p>
                                                <p><strong>Date of Birth:</strong> {{ $application->beneficiary->first_date_of_birth }}</p>
                                                <p><strong>Place of Birth:</strong> {{ $application->beneficiary->first_place_of_birth }}</p>
                                                <p><strong>Citizenship:</strong> {{ $application->beneficiary->first_citizenship }}</p>
                                                <p><strong>Place of Catholic Baptism:</strong> {{ $application->beneficiary->first_place_of_catholic_baptism }}</p>
                                                <p><strong>Date of Catholic Baptism:</strong> {{ $application->beneficiary->first_date_of_catholic_baptism }}</p>
                                                <p><strong>Relation:</strong> {{ $application->beneficiary->relation }}</p>
                                            </div>
                                            <div class="border-b pb-4 mb-4">
                                                <h3 class="text-md font-semibold">Second Beneficiary</h3>
                                                <p><strong>Full Name:</strong> {{ $application->beneficiary->second_full_name }}</p>
                                                <p><strong>Permanent Address:</strong> {{ $application->beneficiary->second_permanent_address }}</p>
                                                <p><strong>Current Address:</strong> {{ $application->beneficiary->second_current_address }}</p>
                                                <p><strong>Provincial Address:</strong> {{ $application->beneficiary->second_provincial_address }}</p>
                                                <p><strong>Email:</strong> {{ $application->beneficiary->second_email }}</p>
                                                <p><strong>Mobile Number:</strong> {{ $application->beneficiary->second_mobile_number }}</p>
                                                <p><strong>Date of Birth:</strong> {{ $application->beneficiary->second_date_of_birth }}</p>
                                                <p><strong>Place of Birth:</strong> {{ $application->beneficiary->second_place_of_birth }}</p>
                                                <p><strong>Citizenship:</strong> {{ $application->beneficiary->second_citizenship }}</p>
                                                <p><strong>Place of Catholic Baptism:</strong> {{ $application->beneficiary->second_place_of_catholic_baptism }}</p>
                                                <p><strong>Date of Catholic Baptism:</strong> {{ $application->beneficiary->second_date_of_catholic_baptism }}</p>
                                                <p><strong>Relation:</strong> {{ $application->beneficiary->relation }}</p>
                                            </div>
                                            <div class="border-b pb-4 mb-4">
                                                <h3 class="text-md font-semibold">Third Beneficiary</h3>
                                                <p><strong>Full Name:</strong> {{ $application->beneficiary->third_full_name }}</p>
                                                <p><strong>Permanent Address:</strong> {{ $application->beneficiary->third_permanent_address }}</p>
                                                <p><strong>Current Address:</strong> {{ $application->beneficiary->third_current_address }}</p>
                                                <p><strong>Provincial Address:</strong> {{ $application->beneficiary->third_provincial_address }}</p>
                                                <p><strong>Email:</strong> {{ $application->beneficiary->third_email }}</p>
                                                <p><strong>Mobile Number:</strong> {{ $application->beneficiary->third_mobile_number }}</p>
                                                <p><strong>Date of Birth:</strong> {{ $application->beneficiary->third_date_of_birth }}</p>
                                                <p><strong>Place of Birth:</strong> {{ $application->beneficiary->third_place_of_birth }}</p>
                                                <p><strong>Citizenship:</strong> {{ $application->beneficiary->third_citizenship }}</p>
                                                <p><strong>Place of Catholic Baptism:</strong> {{ $application->beneficiary->third_place_of_catholic_baptism }}</p>
                                                <p><strong>Date of Catholic Baptism:</strong> {{ $application->beneficiary->third_date_of_catholic_baptism }}</p>
                                                <p><strong>Relation:</strong> {{ $application->beneficiary->relation }}</p>
                                            </div>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
