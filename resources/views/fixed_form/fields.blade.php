@extends('layout.app-main')

@section('content')
<div class="row">
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="Student Number">Student Number</label>

            <select id="student-number" class="select2 form-control form-control-lg" name="student_number">
                <option value="null">Select student number </option>

                @foreach ($students_users as $student)

                <option value="{{ $student->student_number }}"  >{{ $student->student_number }}</option>
                @endforeach

            </select>
        </div>
        </div>





    <div class="form-group col-sm-6">

            <label for="Student Name">Student Name</label>
            <select id="student-name" class="select2 form-control form-control-lg" name="student_name">

            </select>

    </div>
    {{--
    @if($data->count())

    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="pation Number">Patient Number-PRN </label>

            <select id="pation-number-create" class="select2 form-control form-control-lg" name="p_rn">
                <option value="null">Select Patient Number-PRN </option>

                @foreach ($data as $patient)

                <option value="{{ $patient->p_rn }}"  >{{ $patient->p_rn }}</option>
                @endforeach

            </select>
        </div>

    </div>
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="PName">Patient Name </label>
            <select id="pation-name-create" class="select2 form-control form-control-lg" name="p_rn">


            </select>
        </div>
    </div>
    @endif
    @if($data->count()==0)
--}}
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="city-column">Patient Number-PRN</label>
            <input type="text" id="PRN" class="form-control" placeholder="PRN" name="p_rn" value="" />
        </div>
    </div>
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="PName">Patient Name</label>
            <input type="text" id="PName" class="form-control" name="p_name" placeholder="Patient Name" value=""/>
        </div>
    </div>
  {{--   @endif --}}
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="company-column">Tooth number</label>
            <div class="input-group">

                <select class="form-control" id="tooth number" name="tooth_number">
                    <option value="N.A.">Treatment Plan</option>

                    @foreach($arr as $item)
                    <option value="{{ $item }}"> {{ strtoupper($item) }}</option>
                    @endforeach




                </select>
             </div>
        </div>

        </div>

    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="Rest Type">Rest Type</label>
            <select class="form-control" id="Rest Type" name="rest_type">
                <option value="N.A.">Treatment Plan</option>

                @foreach($arr_rest_type as $item)
                <option value="{{ $item}}" > {{ strtoupper($item) }}</option>
                @endforeach




            </select>
        </div>

    </div>
    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">FM0 -Treatment Plan Mark</label>
            <input type="text" id="fm0" class="form-control fm0" placeholder="N.A." value="" name="fm0" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">FM0 sig<span class="name">
                       </label>
                    <input type="text" id="fm0_sig" class="form-control fm0_sig" placeholder="" value="" name="fm0_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm0_date" name="fm0_date" class="date-fm0" value="" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>

    <div class="col-md-4 col-4">
                    <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">FM1-Tooth Preparation Mark </label>
            <input type="text" id="fm" class="form-control fm fm1" placeholder="N.A." value="" name="fm1" />

        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">

                    <label for="basicSelect">FM1 sig <span class="name">
                       </label>

                        <input type="text" id="fm1_name" class="form-control name" placeholder="{{ $name }}" value="{{ $name }}" style="display:none;" name="fm1_name" id="fm1_name" onchange=""/>

                    <input type="text" id="fm1_sig" class="form-control fm1_sig" placeholder="" value="" name="fm1_sig" onchange=""/>



        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm1_date" name="fm1_date" class="fm1_date" value="" min="2022-01-01" max="2025-12-31">
                </div>




        </div>
    </div>
{{----------------------------------end fm1  --------------------------------}}
{{----------------------------------start fm2  --------------------------------}}

    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">FM2-Provisional Mark </label>
            <input type="text" id="fm" class="form-control fm fm2" placeholder="N.A." value="" name="fm2" />
        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">

                    <label for="basicSelect">FM2 sig<span class="name">
                       </label>

                        <input type="text" id="fm2_name" class="form-control name" placeholder="{{ $name }}" value="{{ $name }}" style="display:none;" name="fm2_name" id="fm2_name" onchange=""/>

                    <input type="text" id="fm2_sig" class="form-control fm2_sig" placeholder="" value="" name="fm2_sig" onchange=""/>



        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm2_date" name="fm2_date" class="date-fm1" value="" min="2022-01-01" max="2025-12-31">
                </div>




        </div>
    </div>
    {{----------------------------------end fm2  --------------------------------}}
        {{----------------------------------start fm3  --------------------------------}}



    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">FM3 -FI or Resin Pattern Mark </label>
            <input type="text" id="fm" class="form-control fm fm3" placeholder="N.A." value="" name="fm3" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">

                    <label for="basicSelect">FM3 sig<span class="name">
                       </label>

                        <input type="text" id="fm3_name" class="form-control name" placeholder="{{ $name }}" value="{{ $name }}" style="display:none;" name="fm3_name" id="fm3_name" onchange=""/>

                    <input type="text" id="fm3_sig" class="form-control fm3_sig" placeholder=""  value="" name="fm3_sig" onchange=""/>



        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm3_date" name="fm3_date" class="date-fm3" value="" min="2022-01-01" max="2025-12-31">
                </div>




        </div>
    </div>
       {{----------------------------------end fm3  --------------------------------}}
        {{----------------------------------start fm4  --------------------------------}}
    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">FM4 -Fiber post & core build up Mark </label>
            <input type="text" id="fm" class="form-control fm fm4" placeholder="N.A." name="fm4"  value="" />

        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">FM4 sig<span class="name">
                       </label>
                    <input type="text" id="fm4_sig" class="form-control fm4_sig" placeholder="" value="" name="fm4_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm4_date" name="fm4_date" class="date-fm4" value="" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>
          {{----------------------------------end fm4  --------------------------------}}
        {{----------------------------------start fm5  --------------------------------}}
    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">FM5-Try in Mark </label>
            <input type="text" id="fm" class="form-control fm fm5" placeholder="N.A." name="fm5" value="" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">FM5 sig<span class="name">
                       </label>
                    <input type="text" id="fm5_sig" class="form-control fm5_sig" placeholder="" value="" name="fm5_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm5_date" name="fm5_date" class="date-fm5" value="" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>
      {{----------------------------------end fm5  --------------------------------}}
        {{----------------------------------start fm6  --------------------------------}}
    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">FM6 -Cementation Mark </label>
            <input type="text" id="fm" class="form-control fm fm6" placeholder="N.A." name="fm6" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">FM6 sig<span class="name">
                       </label>
                    <input type="text" id="fm6_sig" class="form-control fm6_sig" placeholder="" value="" name="fm6_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm6_date" name="fm6_date" class="date-fm6" value="" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>
    <!-- Average -->
    <div class="col-md-4 col-4">
        <div class="form-group">
            <label for="Average">Average</label>
            <input type="text" id="Average" class="form-control Average" placeholder="Average" name="avg" value=""/>
        </div>
    </div>

    <div class="col-md-12 col-12">
        <div class="form-group">
            <label for="note">note</label>
            <input type="textarea" id="note" class="form-control note" placeholder="note" name="note" />
        </div>
    </div>
    <div class="col-12">
        {!! Form::submit('save', ['class' => 'btn btn-primary']) !!}

    </div>
</div>
