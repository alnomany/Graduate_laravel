
<div class="row">
    <div class="col-md-4 col-4">
        <div class="form-group">
            <label for="Student Number">Student Number</label>

            <select id="student-number-rem" class="select2 form-control form-control-lg" name="student_number">
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
            <select id="student-name-rem" class="select2 form-control form-control-lg" name="student_name">

            </select>

        </div>
    </div>
        <div class="col-md-4 col-sm-4 col-4">
            <div class="form-group">
                <label for="PRN">Patient Number-PRN / Patient Name</label>
                <select id="PRN-REM" class="select2 form-control form-control-lg" name="p_rn">

            </div>
        </div>
        <div class="col-md-6 col-6" style="">
            <div class="form-group">
                <label for="PName" >Patient Name</label>

                <input type="text" id="PName-Rem" style="display:none;" class="form-control" name="p_name" placeholder="Patient Name" />
            </div>
        </div>

        <div class="table-responsive" id="fill_data">

            @include('rem_form.fill_data')

        </div>
