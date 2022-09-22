
<div class="row">
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="Student Number">Student Number</label>

            <select id="student-number-edit" class="select2 form-control form-control-lg" name="student_number" @if(Auth::user()->type == null) disabled="true" @endif>
                <option value="null">Select student number </option>

                @foreach ($students_users as $student)

                <option value="{{ $student->student_number }}" @if($record->student_number == $student->student_number) selected='selected' @endif >{{ $student->student_number }}</option>
                @endforeach

            </select>
        </div>
        </div>





    <div class="form-group col-sm-6">
        <label for="">Student Name</label>

      {{--   <input id="myText" type="text" value="colors">--}}

    <input type="text" name="student-name-edit" id="student-name-edit" value="{{$record->student_name}}" class="form-control" @if(Auth::user()->type == null) readonly @endif>
{{--
        <select id="student-name" class="select2 form-control form-control-lg id_100" name="student_name" @if(Auth::user()->type == null) disabled="true" @endif>
        </select>
         --}}



    </div>




    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="pation Number">Patient Number-PRN </label>

            <select id="pation-number-edit" class="select2 form-control form-control-lg" name="p_rn" @if(Auth::user()->type == null) disabled="true" @endif>
                <option value="null">Select Patient Number-PRN </option>

                @foreach ($recordall as $patient)

                <option value="{{ $patient->p_rn }}"  @if($record->p_rn == $patient->p_rn) selected='selected' @endif >{{ $patient->p_rn }}</option>
                @endforeach

            </select>
        </div>

    </div>

    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="PName">Patient Name</label>
            <input type="text" id="pation-name-edit" name="p_name" value="{{$record->p_name}}" class="form-control" @if(Auth::user()->type == null) readonly @endif>


        </div>
    </div>



    <div class="col-md-12 col-12">
        <div class="form-group">
            <label for="Rest Type">Arch Type</label>
            <select class="form-control" id="Rest Type" name="arch_type" @if(Auth::user()->type == null) disabled="true" @endif>
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
            <label for="basicSelect">RM1-Tooth Preparation Mark </label>
            <input type="text" id="fm" class="form-control fm fm1" placeholder="N.A." value="{{ $record->rm1 }}" name="rm1" />

        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">

                    <label for="basicSelect">RM1 sig <span class="name">
                       </label>

                        <input type="text" id="fm1_name" class="form-control name" placeholder="{{ $name }}" value="{{ $name }}" style="display:none;" name="fm1_name" id="fm1_name" onchange=""/>

                    <input type="text" id="fm1_sig" class="form-control fm1_sig" placeholder="" value="{{ $record->rm1_sig }}" name="rm1_sig" onchange=""/>



        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm1_date" name="rm1_date" class="date-fm1" value="{{ $record->rm1_date }}" min="2022-01-01" max="2025-12-31">
                </div>




        </div>
    </div>
{{----------------------------------end fm1  --------------------------------}}
{{----------------------------------start fm2  --------------------------------}}

    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">RM2-Primary Impression Mark </label>
            <input type="text" id="fm" class="form-control fm fm2" placeholder="N.A." value="{{ $record->rm2 }}" name="rm2" />
        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">

                    <label for="basicSelect">RM2 sig<span class="name">
                       </label>

                        <input type="text" id="fm2_name" class="form-control name" placeholder="{{ $name }}" value="{{ $name }}" style="display:none;" name="rm2_name" id="fm2_name" onchange=""/>

                    <input type="text" id="fm2_sig" class="form-control fm2_sig" placeholder="" value="{{ $record->rm2_sig }}" name="rm2_sig" onchange=""/>



        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm2_date" name="rm2_date" class="date-fm1" value="{{ $record->rm2_date }}" min="2022-01-01" max="2025-12-31">
                </div>




        </div>
    </div>
    {{----------------------------------end fm2  --------------------------------}}
        {{----------------------------------start fm3  --------------------------------}}



    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">RM3 -Survey & Design Mark </label>
            <input type="text" id="fm" class="form-control fm fm3" placeholder="N.A." value="{{ $record->rm3 }}" name="rm3" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">

                    <label for="basicSelect">RM3 sig<span class="name">
                       </label>

                        <input type="text"  class="form-control name" placeholder="{{ $name }}" value="{{ $name }}" style="display:none;" name="rm3_name" id="sig_name" onchange=""/>

                    <input type="text" id="fm3_sig" class="form-control fm3_sig" placeholder=""  value="{{ $record->rm3_sig }}" name="rm3_sig" onchange=""/>



        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm3_date" name="rm3_date" class="date-fm3" value="{{ $record->rm3_date }}" min="2022-01-01" max="2025-12-31">
                </div>




        </div>
    </div>
       {{----------------------------------end fm3  --------------------------------}}
        {{----------------------------------start fm4  --------------------------------}}
    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">RM4 -Mouth Preparation Mark</label>
            <input type="text" id="fm" class="form-control fm fm4" placeholder="N.A." name="rm4"  value="{{ $record->rm4 }}" />

        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">RM4 sig<span class="name">
                       </label>
                    <input type="text" id="fm4_sig" class="form-control fm4_sig" placeholder="" value="{{ $record->rm4_sig }}" name="rm4_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm4_date" name="rm4_date" class="date-fm4" value="{{ $record->rm4_date }}" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>
          {{----------------------------------end fm4  --------------------------------}}
        {{----------------------------------start fm5  --------------------------------}}
    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">RM5-Border Molding Mark </label>
            <input type="text" id="fm" class="form-control fm fm5" placeholder="N.A." name="rm5" value="{{ $record->rm5 }}" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">RM5 sig<span class="name">
                       </label>
                    <input type="text" id="fm5_sig" class="form-control fm5_sig" placeholder="" value="{{ $record->rm5_sig }}" name="rm5_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm5_date" name="rm5_date" class="date-fm5" value="{{ $record->rm5_date }}" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>
      {{----------------------------------end fm5  --------------------------------}}
        {{----------------------------------start fm6  --------------------------------}}
    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">RM6 -Final Impression Mark </label>
            <input type="text" id="fm" class="form-control fm fm6" placeholder="N.A." value="{{ $record->rm6 }}" name="rm6" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">RM6 sig<span class="name">
                       </label>
                    <input type="text" id="fm6_sig" class="form-control fm6_sig" placeholder="" value="{{ $record->rm6_sig }}" name="rm6_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm6_date" name="rm6_date" class="date-fm6" value="{{ $record->rm6_date }}" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>
       {{----------------------------------start rm7  --------------------------------}}
       <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">RM7 -Try-in Framework Mark</label>
            <input type="text" id="fm" class="form-control fm fm7" placeholder="N.A." value="{{ $record->rm7 }}" name="rm7" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">RM7 sig<span class="name">
                       </label>
                    <input type="text" id="fm7_sig" class="form-control fm7_sig rm7_sig" placeholder="" value="{{ $record->rm7_sig }}" name="rm7_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="rm7_date" name="rm7_date" class="date-fm6" value="{{ $record->rm7_date }}" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>
        {{----------------------------------start rm8  --------------------------------}}
        <div class="col-md-4 col-4">
            <!-- Basic Select -->
            <div class="form-group">
                <label for="basicSelect">RM8 -Functional Impression (Altered Cast) Mark </label>
                <input type="text" id="fm" class="form-control fm rm8" placeholder="N.A." value="{{ $record->rm8 }}" name="rm8" />


            </div>

        </div>
        <div class="col-md-3 col-3">
            <div class="form-group">
                        <label for="basicSelect">RM8 sig<span class="name">
                           </label>
                        <input type="text" id="fm8_sig" class="form-control fm8_sig" placeholder="" value="{{ $record->rm8_sig }}" name="rm8_sig" onchange=""/>
            </div>
        </div>
        <div class="col-md-4 col-4">
            <div class="form-group">
                    <div class="custom-control demo-inline-spacin">
                        <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                        <input type="text" style="margin-top: .5rem;" id="fm8_date" name="rm8_date" class="date-fm8" value="{{ $record->rm8_date }}" min="2022-01-01" max="2025-12-31">
                    </div>
            </div>
        </div>
          {{----------------------------------start rm9  --------------------------------}}
          <div class="col-md-4 col-4">
            <!-- Basic Select -->
            <div class="form-group">
                <label for="basicSelect">RM9 -Max. Man. Jaw relation Mark </label>
                <input type="text" id="fm" class="form-control fm rm9" placeholder="N.A." value="{{ $record->rm9 }}" name="rm9" />


            </div>

        </div>
        <div class="col-md-3 col-3">
            <div class="form-group">
                        <label for="basicSelect">RM9 sig<span class="name">
                           </label>
                        <input type="text" id="rm9_sig" class="form-control rm9_sig" placeholder="" value="{{ $record->rm9_sig }}" name="rm9_sig" onchange=""/>
            </div>
        </div>
        <div class="col-md-4 col-4">
            <div class="form-group">
                    <div class="custom-control demo-inline-spacin">
                        <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                        <input type="text" style="margin-top: .5rem;" id="fm8_date" name="rm9_date" class="date-fm8" value="{{ $record->rm9_date }}" min="2022-01-01" max="2025-12-31">
                    </div>
            </div>
        </div>
           {{----------------------------------start rm10  --------------------------------}}
           <div class="col-md-4 col-4">
            <!-- Basic Select -->
            <div class="form-group">
                <label for="basicSelect">RM10 -Try-in Trial Denture Mark </label>
                <input type="text" id="fm" class="form-control fm rm10" placeholder="N.A." value="{{ $record->rm10 }}" name="rm10" />


            </div>

        </div>
        <div class="col-md-3 col-3">
            <div class="form-group">
                        <label for="basicSelect">RM10 sig<span class="name">
                           </label>
                        <input type="text" id="rm10" class="form-control rm10" placeholder="" value="{{ $record->rm10_sig }}" name="rm10_sig" onchange=""/>
            </div>
        </div>
        <div class="col-md-4 col-4">
            <div class="form-group">
                    <div class="custom-control demo-inline-spacin">
                        <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                        <input type="text" style="margin-top: .5rem;" id="rm10_date" name="rm10_date" class="date-fm8" value="{{ $record->rm10_date }}" min="2022-01-01" max="2025-12-31">
                    </div>
            </div>
        </div>
         {{----------------------------------start rm11  --------------------------------}}
         <div class="col-md-4 col-4">
            <!-- Basic Select -->
            <div class="form-group">
                <label for="basicSelect">RM11 -Prosthesis Placement Mark</label>
                <input type="text" id="fm" class="form-control fm rm11" placeholder="N.A." value="{{ $record->rm11 }}" name="rm10" />


            </div>

        </div>
        <div class="col-md-3 col-3">
            <div class="form-group">
                        <label for="basicSelect">RM11 sig<span class="name">
                           </label>
                        <input type="text" id="rm11" class="form-control rm11" placeholder="" value="{{ $record->rm10_sig }}" name="rm11_sig" onchange=""/>
            </div>
        </div>
        <div class="col-md-4 col-4">
            <div class="form-group">
                    <div class="custom-control demo-inline-spacin">
                        <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                        <input type="text" style="margin-top: .5rem;" id="rm11_date" name="rm11_date" class="date-fm8" value="{{ $record->rm11_date }}" min="2022-01-01" max="2025-12-31">
                    </div>
            </div>
        </div>
        {{----------------------------------start rm12  --------------------------------}}
        <div class="col-md-4 col-4">
            <!-- Basic Select -->
            <div class="form-group">
                <label for="basicSelect">RM12 -Post-Placement Mark</label>
                <input type="text" id="fm" class="form-control fm rm12" placeholder="N.A." value="{{ $record->rm12 }}" name="rm12" />


            </div>

        </div>
        <div class="col-md-3 col-3">
            <div class="form-group">
                        <label for="basicSelect">RM12 sig<span class="name">
                           </label>
                        <input type="text" id="rm12" class="form-control rm12" placeholder="" value="{{ $record->rm12_sig }}" name="rm12_sig" onchange=""/>
            </div>
        </div>
        <div class="col-md-4 col-4">
            <div class="form-group">
                    <div class="custom-control demo-inline-spacin">
                        <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                        <input type="text" style="margin-top: .5rem;" id="rm12_date" name="rm12_date" class="date-fm8" value="{{ $record->rm12_date }}" min="2022-01-01" max="2025-12-31">
                    </div>
            </div>
        </div>
          {{----------------------------------start rm13  --------------------------------}}
          <div class="col-md-4 col-4">
            <!-- Basic Select -->
            <div class="form-group">
                <label for="basicSelect">RM13 -Other Procedures Mark </label>
                <input type="text" id="fm" class="form-control fm rm13" placeholder="N.A." value="{{ $record->rm13 }}" name="rm13" />


            </div>

        </div>
        <div class="col-md-3 col-3">
            <div class="form-group">
                        <label for="basicSelect">RM13 sig<span class="name">
                           </label>
                        <input type="text" id="rm13" class="form-control rm13" placeholder="" value="{{ $record->rm13_sig }}" name="rm13_sig" onchange=""/>
            </div>
        </div>
        <div class="col-md-4 col-4">
            <div class="form-group">
                    <div class="custom-control demo-inline-spacin">
                        <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                        <input type="text" style="margin-top: .5rem;" id="rm13_date" name="rm13_date" class="date-fm8" value="{{ $record->rm13_date }}" min="2022-01-01" max="2025-12-31">
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
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
   @if(Auth::user()->type == "admin")

        <a href="{{ route('remform.delete', collect($record)->first() ) }}" class="btn btn-danger" style="float:right;">
            Delete
        </a>
        @endif


    </div>
</div>
