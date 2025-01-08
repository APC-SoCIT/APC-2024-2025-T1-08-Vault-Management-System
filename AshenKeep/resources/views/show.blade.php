@foreach ($applicants as $applicant)
<tr>
                        <td>{{ $applicant->full_name }}</td>
                        <td>{{ $applicant->email }}</td>
                        <td>{{ $applicant->mobile_number }}</td>
                        <td>{{ $applicant->permanent_address }}</td>
                        <td>{{ $applicant->current_address }}</td>
                        <td>{{ $applicant->provincial_address }}</td>
                        <td>{{ $applicant->date_of_birth }}</td>
                        <td>{{ $applicant->place_of_birth }}</td>
                        <td>{{ $applicant->citizenship }}</td>
                        <td>{{ $applicant->spouses_name }}</td>
                        <td>{{ $applicant->fathers_name }}</td>
                        <td>{{ $applicant->mothers_name }}</td>
                        <td>{{ $applicant->donors_occupation }}</td>
                        <td>{{ $applicant->employers_name_or_business_name }}</td>
                        <td>{{ $applicant->business_address }}</td>
                        <td>
                        </td>
                    </tr>
                    @endforeach
