
<div class="row">
    <div class="col-md-4 col-4">
        <div class="form-group">
            <label for="Student Number">Student Number</label>

            <select id="student-number" class="select2 form-control form-control-lg" name="student_number">
                <option value="null">Select student number </option>
                @foreach ($students_users as $student)

                <option value="{{ $student->student_number }}">{{ $student->student_number }}</option>
                @endforeach

            </select>
        </div>
        </div>
    <div class="col-md-4 col-4">
        <div class="form-group">
            <label for="Student Name">Student Name</label>
            <select id="student-name" class="select2 form-control form-control-lg" name="student_name">

            </select>

        </div>
    </div>
        <div class="col-md-4 col-sm-4 col-4">
            <div class="form-group">
                <label for="PRN">Patient Number-PRN</label>
                <select id="PRN" class="select2 form-control form-control-lg" name="p_rn">

            </div>
        </div>
        <div class="col-md-6 col-6" style="">
            <div class="form-group">
                <label for="PName" >Patient Name</label>

                <input type="text" id="PName" style="display:none;" class="form-control" name="p_name" placeholder="Patient Name" />
            </div>
        </div>

        <div class="table-responsive" id="fill_data">

            @include('fixed_form.fill_data')

        </div>
