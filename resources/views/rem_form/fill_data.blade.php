<table class="table">
    <thead>
        <tr>
            <th>Actions</th>

            <th>Student</th>
            <th>Patient</th>
            <th>MANDIBULAR</th>
            <th>MAXILLARY</th>




            <th>RM1</th>
            <th>RM2</th>
            <th>RM3</th>
            <th>RM4</th>
            <th>RM5</th>
            <th>RM6</th>
            <th>RM7</th>
            <th>RM8</th>
            <th>RM9</th>
            <th>RM10</th>
            <th>RM11</th>
            <th>RM12</th>
            <th>RM13</th>

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
                    <a href="{{ route('remform.edit', collect($value)->first() ) }}">
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
            <td>{{ $value->arch_type1 }}</td>
            <td>{{ $value->arch_type }}</td>



            <td>{{ $value->rm1 }}<br><br> {{  $value->rm1_sig }}</td>
            <td>{{ $value->rm2 }}<br><br> {{  $value->rm2_sig }}</td>
            <td>{{ $value->rm3 }} <br><br> {{  $value->rm3_sig }}</td>
            <td>{{ $value->rm4}}<br><br> {{  $value->rm4_sig }}</td>
            <td>{{ $value->rm5}}<br><br> {{  $value->rm5_sig }}</td>
            <td>{{ $value->rm6}}<br><br> {{  $value->rm6_sig }}</td>


            <td>{{ $value->rm7 }}<br><br> {{  $value->rm7_sig }}</td>
            <td>{{ $value->rm8 }}<br><br> {{  $value->rm8_sig }}</td>
            <td>{{ $value->rm9 }} <br><br> {{  $value->rm9_sig }}</td>
            <td>{{ $value->rm10}}<br><br> {{  $value->rm10_sig }}</td>
            <td>{{ $value->rm11}}<br><br> {{  $value->rm11_sig }}</td>
            <td>{{ $value->rm12}}<br><br> {{  $value->rm12_sig }}</td>
            <td>{{ $value->rm13}}<br><br> {{  $value->rm13_sig }}</td>

            <td>{{ $value->avg}}<br></td>
            <td>{{ $value->note}}</td>





        </tr>
        @endforeach

    </tbody>
</table>
