<table class="table">
    <thead>
        <tr>
            <th>Actions</th>

            <th>Student</th>
            <th>Patient</th>
            <th>tooth number</th>
            <th>procedure</th>
            <th>FM0 Treatment</th>

            <th>FM1</th>
            <th>FM2</th>
            <th>FM3</th>
            <th>FM4</th>
            <th>FM5</th>
            <th>FM6</th>
            <th>avg</th>


            <th>Note</th>



        </tr>
    </thead>
    <div id="body-html"></div>
    <tbody >
        @foreach($data as $value)
        <tr>
            <td>
                <div class="dropdown">
                    <a href="{{ route('fixform.edit', collect($value)->first() ) }}">
                        edit
                        <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit incident"></i>
                    </a>


                        {{--
                                   <a class="dropdown-item" href="javascript:void(0);">
                            <span>Delete</span>
                        </a>

                        --}}

                    </div>
            </td>
            <td>

                <span class="font-weight-bold">{{ $value->student_name }}<br><br> {{  $value->student_number }}</span>
            </td>
            <td>{{ $value->p_name }}<br><br> {{  $value->p_rn }}</td>
            <td>{{ $value->tooth_number }}</td>
            <td>{{ $value->rest_type }}</td>

            <td>{{ $value->fm0 }}<br><br> {{  $value->fm0_sig }}</td>

            <td>{{ $value->fm1 }}<br><br> {{  $value->fm1_sig }}</td>
            <td>{{ $value->fm2 }}<br><br> {{  $value->fm2_sig }}</td>
            <td>{{ $value->fm3 }} <br><br> {{  $value->fm3_sig }}</td>
            <td>{{ $value->fm4}}<br><br> {{  $value->fm4_sig }}</td>
            <td>{{ $value->fm5}}<br><br> {{  $value->fm5_sig }}</td>
            <td>{{ $value->fm6}}<br><br> {{  $value->fm6_sig }}</td>
            <td>{{ $value->avg}}<br></td>
            <td>{{ $value->note}}</td>





        </tr>
        @endforeach

    </tbody>
</table>
