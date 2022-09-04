
<div class="row">
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="Student Number">Student Number</label>

            <select id="student-number" class="select2 form-control form-control-lg" name="student_number" @if(Auth::user()->type == null) disabled="true" @endif>
                @foreach ($students_users as $student)

                <option value="{{ $student->student_number }}" @if($record->student_number == $student->student_number) selected='selected' @endif >{{ $student->student_number }}</option>
                @endforeach

            </select>
        </div>
        </div>





    <div class="form-group col-sm-6">
        <label for="">Student Name</label>
        <input type="text" name="student_name" value="{{$record->student_name}}" class="form-control" @if(Auth::user()->type == null) readonly @endif>
    </div>
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="city-column">Patient Number-PRN</label>
            <input type="text" id="PRN" class="form-control" placeholder="PRN" name="p_rn" value="{{$record->p_rn}}" @if(Auth::user()->type == null) readonly @endif/>
        </div>
    </div>
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="PName">Patient Name</label>
            <input type="text" id="PName" class="form-control" name="p_name" placeholder="Patient Name" value="{{$record->p_name}}" @if(Auth::user()->type == null) readonly @endif/>
        </div>
    </div>
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="company-column">Tooth number</label>
            <div class="input-group" >

                <select class="form-control" id="tooth number" name="tooth_number" @if(Auth::user()->type == null) disabled="true" @endif>
                    <option value="N.A.">Treatment</option>

                    @foreach($arr as $item)
                    <option value="{{ $item }}" @if($record->tooth_number == $item) selected='selected' @endif > {{ strtoupper($item) }}</option>
                    @endforeach




                </select>
             </div>
        </div>

        </div>

    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="Rest Type">Rest Type</label>
            <select class="form-control" id="Rest Type" name="rest_type" @if(Auth::user()->type == null) disabled="true" @endif>
                <option value="N.A.">Treatment</option>

                @foreach($arr_rest_type as $item)
                <option value="{{ $item }}" @if($record->rest_type == $item) selected='selected' @endif> {{ strtoupper($item) }}</option>
                @endforeach




            </select>
        </div>

    </div>
    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">FM0 -Treatment Plan Mark</label>
            <input type="text" id="fm0" class="form-control fm0" placeholder="N.A." value="{{ $record->fm0 }}" name="fm0" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">FM0 sig<span class="name">
                       </label>
                    <input type="text" id="fm0_sig" class="form-control fm0_sig" placeholder="" value="{{ $record->fm0_sig }}" name="fm0_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered  </label>
                    <input type="date" style="margin-top: .5rem;" id="start" name="trip-start" class="date-fm0" value="2022-07-22" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>

    <div class="col-md-4 col-4">
                    <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">FM1-Dx & Tx Mark </label>
            <input type="text" id="fm" class="form-control fm fm1" placeholder="N.A." value="{{ $record->fm1 }}" name="fm1" />

        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">

                    <label for="basicSelect">FM1 sig <span class="name">
                       </label>

                        <input type="text" id="fm1_name" class="form-control name" placeholder="{{ $name }}" value="{{ $name }}" style="display:none;" name="fm1_name" id="fm1_name" onchange=""/>

                    <input type="text" id="fm1_sig" class="form-control fm1_sig" placeholder="" value="{{ $record->fm1_sig }}" name="fm1_sig" onchange=""/>



        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered  </label>
                    <input type="date" style="margin-top: .5rem;" id="start" name="trip-start" class="date-fm1" value="2022-07-22" min="2022-01-01" max="2025-12-31">
                </div>




        </div>
    </div>
{{----------------------------------end fm1  --------------------------------}}
{{----------------------------------start fm2  --------------------------------}}

    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">FM2-Provisional Mark </label>
            <input type="text" id="fm" class="form-control fm fm2" placeholder="N.A." value="{{ $record->fm2 }}" name="fm2" />
        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">

                    <label for="basicSelect">FM2 sig<span class="name">
                       </label>

                        <input type="text" id="fm2_name" class="form-control name" placeholder="{{ $name }}" value="{{ $name }}" style="display:none;" name="fm2_name" id="fm2_name" onchange=""/>

                    <input type="text" id="fm2_sig" class="form-control fm2_sig" placeholder="" value="{{ $record->fm2_sig }}" name="fm2_sig" onchange=""/>



        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered  </label>
                    <input type="date" style="margin-top: .5rem;" id="start" name="trip-start" class="date-fm1" value="2022-07-22" min="2022-01-01" max="2025-12-31">
                </div>




        </div>
    </div>
    {{----------------------------------end fm2  --------------------------------}}
        {{----------------------------------start fm3  --------------------------------}}



    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">FM3 -FI or Resin Pattern Mark </label>
            <input type="text" id="fm" class="form-control fm fm3" placeholder="N.A." value="{{ $record->fm3 }}" name="fm3" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">

                    <label for="basicSelect">FM3 sig<span class="name">
                       </label>

                        <input type="text" id="fm3_name" class="form-control name" placeholder="{{ $name }}" value="{{ $name }}" style="display:none;" name="fm3_name" id="fm3_name" onchange=""/>

                    <input type="text" id="fm3_sig" class="form-control fm3_sig" placeholder=""  value="{{ $record->fm3_sig }}" name="fm3_sig" onchange=""/>



        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered  </label>
                    <input type="date" style="margin-top: .5rem;" id="start" name="trip-start" class="date-fm3" value="2022-07-22" min="2022-01-01" max="2025-12-31">
                </div>




        </div>
    </div>
       {{----------------------------------end fm3  --------------------------------}}
        {{----------------------------------start fm4  --------------------------------}}
    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">FM4 -Fiber post & core build up Mark </label>
            <input type="text" id="fm" class="form-control fm fm4" placeholder="N.A." name="fm4"  value="{{ $record->fm4 }}" />

        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">FM4 sig<span class="name">
                       </label>
                    <input type="text" id="fm4_sig" class="form-control fm4_sig" placeholder="" value="{{ $record->fm4_sig }}" name="fm4_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered  </label>
                    <input type="date" style="margin-top: .5rem;" id="start" name="trip-start" class="date-fm4" value="2022-07-22" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>
          {{----------------------------------end fm4  --------------------------------}}
        {{----------------------------------start fm5  --------------------------------}}
    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">FM5-Try in Mark </label>
            <input type="text" id="fm" class="form-control fm fm5" placeholder="N.A." name="fm5" value="{{ $record->fm5 }}" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">FM5 sig<span class="name">
                       </label>
                    <input type="text" id="fm5_sig" class="form-control fm5_sig" placeholder="" value="{{ $record->fm5_sig }}" name="fm5_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered  </label>
                    <input type="date" style="margin-top: .5rem;" id="start" name="trip-start" class="date-fm5" value="2022-07-22" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>
      {{----------------------------------end fm5  --------------------------------}}
        {{----------------------------------start fm6  --------------------------------}}
    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">FM6 -Cementation Mark </label>
            <input type="text" id="fm" class="form-control fm fm6" placeholder="N.A." value="{{ $record->fm6 }}" name="fm6" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">FM6 sig<span class="name">
                       </label>
                    <input type="text" id="fm6_sig" class="form-control fm6_sig" placeholder="" value="{{ $record->fm6_sig }}" name="fm6_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered  </label>
                    <input type="date" style="margin-top: .5rem;" id="start" name="trip-start" class="date-fm6" value="2022-07-22" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>
    <!-- Average -->
    <div class="col-md-4 col-4">
        <div class="form-group">
            <label for="Average">Average</label>
            <input type="text" id="Average" class="form-control Average" placeholder="Average" name="avg" value="{{ $record->avg }}" readonly/>
        </div>
    </div>

    <div class="col-md-12 col-12">
        <div class="form-group">
            <label for="note">note</label>
            <input type="textarea" id="note" class="form-control note" placeholder="note" name="note" value="{{ $record->note }}"/>
        </div>
    </div>
    <div class="col-12">
        {!! Form::submit('save', ['class' => 'btn btn-primary']) !!}

    </div>
</div>
