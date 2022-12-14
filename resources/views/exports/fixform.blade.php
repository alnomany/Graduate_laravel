<table>
    <thead>
    <tr>
        <th>StuNum</th>
        <th>StuName</th>
        <th>PRN</th>
        <th>Patient Name</th>

        <th>Treatment Plan Mark</th>
        <th>Sign</th>


        <th>Tooth Num</th>
        <th>Restoration type</th>

        <th>Tooth Preparation</th>
        <th>Sign</th>

        <th>Provisional</th>
        <th>Sign</th>

        <th>Final impression/ resin pattern</th>
        <th>Sign</th>

        <th>Fiber post  core build up Mark</th>

        <th>Sign</th>

        <th>Try-in</th>
        <th>Sign</th>

        <th>Cementation</th>
        <th>Sign</th>

        <th>Average</th>





    </tr>

    </thead>
    <tbody>
    @foreach($fixform as $data)
        <tr>

            <td>{{ $data->student_number }}</td>
            <td>{{ $data->student_name }}</td>
            <td>{{ $data->p_rn }}</td>
            <td>{{ $data->p_name }}</td>

            <td>{{ $data->fm0 }}</td>
            <td>{{ $data->fm0_sig }}</td>




            <td>{{ $data->tooth_number }}</td>
            <td>{{ $data->rest_type }}</td>

            <td>{{ $data->fm1 }}</td>
            <td>{{ $data->fm1_sig }}</td>
            <td>{{ $data->fm2 }}</td>
            <td>{{ $data->fm2_sig }}</td>

            <td>
                @if(empty($data->fm3))
                N.A.
             @endif
             {{ $data->fm3 }}
            </td>
            <td>
                @if(empty($data->fm3_sig))
                N.A.
             @endif
                {{ $data->fm3_sig }}
            </td>
            <td>
             @if(empty($data->fm4))
                N.A.
             @endif
             {{ $data->fm4 }}
            </td>
            <td>
                @if(empty($data->fm4_sig))
                N.A.
             @endif
                {{ $data->fm4_sig }}
            </td>


            <td>
                @if(empty($data->fm5))
                   N.A.
                @endif
                {{ $data->fm5 }}
            </td>
            <td>
                @if(empty($data->fm5_sig))
                N.A.
                @endif
                {{ $data->fm5_sig }}
            </td>
            <td>
                @if(empty($data->fm6))
                N.A.
                @endif
                {{ $data->fm6 }}
            </td>
            <td>
                @if(empty($data->fm6_sig))
                N.A.
                @endif
                {{ $data->fm6_sig }}
            </td>
            <td>{{$data->avg}}</td>





        </tr>


    @endforeach
    </tbody>
</table>
<table>
    <thead>
        <tr>
            <th>average</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $avg_total=DB::table('fix_forms')
                ->avg('avg'); }}</td>
        </tr>
    </tbody>

</table>


