<table>
    <thead>
    <tr>
        <th>StuNum</th>
        <th>StuName</th>
        <th>PRN</th>
        <th>Patient Name</th>
        <th>Arch/Type</th>

        <th>Dx  Tx Planning Mark</th>
        <th>Sign</th>

        <th>Primary Impression Mark</th>
        <th>Sign</th>


        <th>Survey Design Mark</th>
        <th>Sign</th>

        <th>Mouth Preparation Mark</th>
        <th>Sign</th>

        <th>Border Molding Mark</th>
        <th>Sign</th>

        <th>Final Impression Mark</th>
        <th>Sign</th>

        <th>Try-in Framework Mark</th>
        <th>Sign</th>

        <th>Functional Impression Altered Cast Mark</th>
        <th>Sign</th>

        <th>Max. Man. Jaw relation Mark</th>
        <th>Sign</th>

        <th>Try-in Trial Denture Mark</th>
        <th>Sign</th>

        <th> Prosthesis Placement Mark</th>
        <th>Sign</th>

        <th>Post-Placement Mark</th>
        <th>Sign</th>

        <th>Other Procedures Mark</th>
        <th>Sign</th>



        <th>Average</th>





    </tr>

    </thead>
    <tbody>
    @foreach($remform as $data)
        <tr>

            <td>{{ $data->student_number }}</td>
            <td>{{ $data->student_name }}</td>
            <td>{{ $data->p_rn }}</td>
            <td>{{ $data->p_name }}</td>
            <td>{{ $data->arch_type }}</td>

            <td>{{ $data->rm1 }}</td>
            <td>{{ $data->rm1_sig }}</td>
            <td>{{ $data->rm2 }}</td>
            <td>{{ $data->rm2_sig }}</td>

            <td>
                @if(empty($data->rm3))
                N.A.
             @endif
             {{ $data->rm3 }}
            </td>
            <td>
                @if(empty($data->rm3_sig))
                N.A.
             @endif
                {{ $data->rm3_sig }}
            </td>
            <td>
             @if(empty($data->rm4))
                N.A.
             @endif
             {{ $data->rm4 }}
            </td>
            <td>
                @if(empty($data->rm4_sig))
                N.A.
             @endif
                {{ $data->rm4_sig }}
            </td>


            <td>
                @if(empty($data->rm5))
                   N.A.
                @endif
                {{ $data->rm5 }}
            </td>
            <td>
                @if(empty($data->rm5_sig))
                N.A.
                @endif
                {{ $data->rm5_sig }}
            </td>
            <td>
                @if(empty($data->rm6))
                N.A.
                @endif
                {{ $data->rm6 }}
            </td>
            <td>
                @if(empty($data->rm6_sig))
                N.A.
                @endif
                {{ $data->rm6_sig }}
            </td>

            <td>
                @if(empty($data->rm7))
                N.A.
                @endif
                {{ $data->rm7 }}
            </td>
            <td>
                @if(empty($data->rm7_sig))
                N.A.
                @endif
                {{ $data->rm7_sig }}
            </td>

            <td>
                @if(empty($data->rm8))
                N.A.
                @endif
                {{ $data->rm8 }}
            </td>
            <td>
                @if(empty($data->rm8_sig))
                N.A.
                @endif
                {{ $data->rm8_sig }}
            </td>

            <td>
                @if(empty($data->rm9))
                N.A.
                @endif
                {{ $data->rm9 }}
            </td>
            <td>
                @if(empty($data->rm9_sig))
                N.A.
                @endif
                {{ $data->rm9_sig }}
            </td>

            <td>
                @if(empty($data->rm10))
                N.A.
                @endif
                {{ $data->rm10 }}
            </td>
            <td>
                @if(empty($data->rm10_sig))
                N.A.
                @endif
                {{ $data->rm10_sig }}
            </td>
            <td>
                @if(empty($data->rm11))
                N.A.
                @endif
                {{ $data->rm11 }}
            </td>
            <td>
                @if(empty($data->rm11_sig))
                N.A.
                @endif
                {{ $data->rm11_sig }}
            </td>

            <td>
                @if(empty($data->rm12))
                N.A.
                @endif
                {{ $data->rm12 }}
            </td>
            <td>
                @if(empty($data->rm12_sig))
                N.A.
                @endif
                {{ $data->rm12_sig }}
            </td>

            <td>
                @if(empty($data->rm13))
                N.A.
                @endif
                {{ $data->rm13 }}
            </td>
            <td>
                @if(empty($data->rm13_sig))
                N.A.
                @endif
                {{ $data->rm13_sig }}
            </td>
            <td>{{$data->avg}}</td>





        </tr>


    @endforeach
    </tbody>
</table>



