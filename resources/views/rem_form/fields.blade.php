
<div class="row">
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="Student Number">Student Number</label>

            <select id="student-number" class="select2 form-control form-control-lg" name="student_number">
                <option value="">Select student number </option>

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
  {{--   @endif
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
  --}}
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="Rest Type">Arch Type</label>
            <select class="form-control" id="arch_type" name="arch_type">
                <option value="No Max">No Max</option>

                @foreach($arr_rest_type as $item)
                <option value="{{ $item}}" > {{ strtoupper($item) }}</option>
                @endforeach




            </select>
        </div>

    </div>
    <div class="col-md-6 col-6">
        <div class="form-group">
            <label for="Rest Type">Arch Type</label>
            <select class="form-control" id="arch_type1" name="arch_type1">
                <option value="No Mand">No Mand</option>

                @foreach($arr_rest_type1 as $item)
                <option value="{{ $item}}" > {{ strtoupper($item) }}</option>
                @endforeach




            </select>
        </div>

    </div>


    <div class="col-md-4 col-4">
                    <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">RM1 Diagnosis & Treatment Planning </label>
            <input type="text" id="fm" class="form-control fm rm1 fm1" placeholder="N.A." value="" name="rm1" />

        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">

                    <label for="basicSelect">RM1 sig <span class="name">
                       </label>

                        <input type="text"  class="form-control name" placeholder="{{ $name }}" value="{{ $name }}" style="display:none;" name="fm1_name" id="sig_name" onchange=""/>

                    <input type="text" id="fm1_sig" class="form-control rm1_sig fm1_sig" placeholder="" value="" name="rm1_sig" onchange=""/>



        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm1_date" name="rm1_date" class="RM1_date" value="" min="2022-01-01" max="2025-12-31">
                </div>




        </div>
    </div>
{{----------------------------------end RM1  --------------------------------}}
{{----------------------------------start RM2  --------------------------------}}

    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">RM2-Primary Impression Mark </label>
            <input type="text" id="rm" class="form-control fm rm2 fm2" placeholder="N.A." value="" name="rm2" />
        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">

                    <label for="basicSelect">RM2 sig<span class="name">
                       </label>

                        <input type="text" id="sig_name" class="form-control name" placeholder="{{ $name }}" value="{{ $name }}" style="display:none;" name="RM2_name"  onchange=""/>

                    <input type="text" id="fm2_sig" class="form-control rm2_sig fm2_sig" placeholder="" value="" name="rm2_sig" onchange=""/>



        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm2_date" name="rm2_date" class="date-RM1" value="" min="2022-01-01" max="2025-12-31">
                </div>




        </div>
    </div>
    {{----------------------------------end RM2  --------------------------------}}
        {{----------------------------------start rm3  --------------------------------}}



    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">RM3 -Survey &  Design Mark </label>
            <input type="text" id="fm" class="form-control fm rm3 fm3" placeholder="N.A." value="" name="rm3" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">

                    <label for="basicSelect">RM3 sig<span class="name">
                       </label>

                        <input type="text"  class="form-control name" placeholder="{{ $name }}" value="{{ $name }}" style="display:none;" name="rm3_name" id="sig_name" onchange=""/>

                    <input type="text" id="rm3_sig" class="form-control rm3_sig fm3_sig" placeholder=""  value="" name="rm3_sig" onchange=""/>



        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm3_date" name="rm3_date" class="date-rm3" value="" min="2022-01-01" max="2025-12-31">
                </div>




        </div>
    </div>
       {{----------------------------------end rm3  --------------------------------}}
        {{----------------------------------start rm4  --------------------------------}}
    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">RM4 -Mouth Preparation Mark </label>
            <input type="text" id="fm" class="form-control fm rm4 fm4" placeholder="N.A." name="rm4"  value="" />

        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">RM4 sig<span class="name">
                       </label>
                    <input type="text" id="rm4_sig" class="form-control rm4_sig fm4_sig" placeholder="" value="" name="rm4_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm4_date" name="rm4_date" class="date-rm4" value="" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>
          {{----------------------------------end rm4  --------------------------------}}
        {{----------------------------------start RM5  --------------------------------}}
    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">RM5-Border Molding Mark </label>
            <input type="text" id="fm" class="form-control fm rm5 fm5" placeholder="N.A." name="rm5" value="" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">RM5 sig<span class="name">
                       </label>
                    <input type="text" id="rm5_sig" class="form-control rm5_sig fm5_sig" placeholder="" value="" name="rm5_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm5_date" name="rm5_date" class="date-rm5" value="" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>
      {{----------------------------------end RM5  --------------------------------}}
        {{----------------------------------start rm6  --------------------------------}}
    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">RM6 -Final Impression Mark </label>
            <input type="text" id="fm" class="form-control fm rm6 fm6" placeholder="N.A." name="rm6" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">RM6 sig<span class="name">
                       </label>
                    <input type="text" id="rm6_sig" class="form-control rm6_sig fm6_sig" placeholder="" value="" name="rm6_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="fm6_date" name="rm6_date" class="date-rm6" value="" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>
    {{-- ------------------------------------------start rm7 ----------------------------------}}
    <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">RM7 -Try-in Framework Mark </label>
            <input type="text" id="fm" class="form-control fm rm7 fm7" placeholder="N.A." name="rm7" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">RM7 sig<span class="name">
                       </label>
                    <input type="text" id="rm7_sig" class="form-control rm7_sig fm7_sig" placeholder="" value="" name="rm7_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="rm7_date" name="rm7_date" class="date-rm7" value="" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>

    {{-- ------------------------------end rm7------------------------------------------------ --}}
  {{-- ------------------------------------------start rm8 ----------------------------------}}
  <div class="col-md-4 col-4">
    <!-- Basic Select -->
    <div class="form-group">
        <label for="basicSelect">RM8 -Functional Impression (Altered Cast) Mark </label>
        <input type="text" id="fm" class="form-control fm fm8" placeholder="N.A." name="rm8" />


    </div>

</div>
<div class="col-md-3 col-3">
    <div class="form-group">
                <label for="basicSelect">RM8 sig<span class="name">
                   </label>
                <input type="text" id="rm8_sig" class="form-control fm8_sig" placeholder="" value="" name="rm8_sig" onchange=""/>
    </div>
</div>
<div class="col-md-4 col-4">
    <div class="form-group">
            <div class="custom-control demo-inline-spacin">
                <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                <input type="text" style="margin-top: .5rem;" id="fm8_date" name="rm8_date" class="date-rm8" value="" min="2022-01-01" max="2025-12-31">
            </div>
    </div>
</div>

    {{-- ------------------------------end rm8------------------------------------------------ --}}
      {{-- ------------------------------------------start rm9 ----------------------------------}}
      <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">RM9 -Max. Man. Jaw relation Mark</label>
            <input type="text" id="fm" class="form-control fm rm9 fm9" placeholder="N.A." name="rm9" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">RM9 sig<span class="name">
                       </label>
                    <input type="text" id="rm9_sig" class="form-control rm9_sig" placeholder="" value="" name="rm9_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="rm9_date" name="rm9_date" class="date-rm9" value="" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>

    {{-- ------------------------------end rm9------------------------------------------------ --}}
      {{-- ------------------------------------------start rm10 ----------------------------------}}
      <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">RM10 -Try-in Trial Denture Mark </label>
            <input type="text" id="fm" class="form-control fm rm10" placeholder="N.A." name="rm10" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">RM10 sig<span class="name">
                       </label>
                    <input type="text" id="rm10_sig" class="form-control rm10_sig" placeholder="" value="" name="rm10_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="rm10_date" name="rm10_date" class="date-rm10" value="" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>

    {{-- ------------------------------end rm10------------------------------------------------ --}}
      {{-- ------------------------------------------start rm11 ----------------------------------}}
      <div class="col-md-4 col-4">
        <!-- Basic Select -->
        <div class="form-group">
            <label for="basicSelect">RM11 -Prosthesis Placement Mark </label>
            <input type="text" id="fm" class="form-control fm rm11" placeholder="N.A." name="rm11" />


        </div>

    </div>
    <div class="col-md-3 col-3">
        <div class="form-group">
                    <label for="basicSelect">RM11 sig<span class="name">
                       </label>
                    <input type="text" id="rm11_sig" class="form-control rm11_sig" placeholder="" value="" name="rm11_sig" onchange=""/>
        </div>
    </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
                <div class="custom-control demo-inline-spacin">
                    <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                    <input type="text" style="margin-top: .5rem;" id="rm11_date" name="rm11_date" class="date-rm11" value="" min="2022-01-01" max="2025-12-31">
                </div>
        </div>
    </div>

    {{-- ------------------------------end rm11------------------------------------------------ --}}
          {{-- ------------------------------------------start rm12 ----------------------------------}}
          <div class="col-md-4 col-4">
            <!-- Basic Select -->
            <div class="form-group">
                <label for="basicSelect">RM12 -Post-Placement Mark </label>
                <input type="text" id="fm" class="form-control fm rm12" placeholder="N.A." name="rm12" />


            </div>

        </div>
        <div class="col-md-3 col-3">
            <div class="form-group">
                        <label for="basicSelect">RM12 sig<span class="name">
                           </label>
                        <input type="text" id="rm12_sig" class="form-control rm12_sig" placeholder="" value="" name="rm6_sig" onchange=""/>
            </div>
        </div>
        <div class="col-md-4 col-4">
            <div class="form-group">
                    <div class="custom-control demo-inline-spacin">
                        <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                        <input type="text" style="margin-top: .5rem;" id="rm12_date" name="rm12_date" class="date-rm12" value="" min="2022-01-01" max="2025-12-31">
                    </div>
            </div>
        </div>

    {{-- ------------------------------end rm12------------------------------------------------ --}}
        {{-- ------------------------------------------start rm13 ----------------------------------}}
        <div class="col-md-4 col-4">
            <!-- Basic Select -->
            <div class="form-group">
                <label for="basicSelect">RM13 -Other Procedures Mark</label>
                <input type="text" id="fm" class="form-control fm rm13" placeholder="N.A." name="rm13" />


            </div>

        </div>
        <div class="col-md-3 col-3">
            <div class="form-group">
                        <label for="basicSelect">RM13 sig<span class="name">
                           </label>
                        <input type="text" id="rm13_sig" class="form-control rm13_sig" placeholder="" value="" name="rm13_sig" onchange=""/>
            </div>
        </div>
        <div class="col-md-4 col-4">
            <div class="form-group">
                    <div class="custom-control demo-inline-spacin">
                        <label class="" for="date">Date entered yyyy-mm-dd hh(0-23):mm:ss  </label>
                        <input type="text" style="margin-top: .5rem;" id="rm13_date" name="rm13_date" class="date-rm13" value="" min="2022-01-01" max="2025-12-31">
                    </div>
            </div>
        </div>

    {{-- ------------------------------end rm13------------------------------------------------ --}}
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
        <a href="../" class="btn btn-danger" style="float:right;">
            Exit without saving
        </a>

    </div>
</div>
