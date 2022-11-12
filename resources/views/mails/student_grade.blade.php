<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>

    <h2>Student Grade New</h2>

    <form method="get" action="{{ route('fill.export.Excel.student') }}">

        <div class="row">

            <div class="col-md-6 col-6">
                <div class="form-group">
                    <label for="Student Number">Student Number</label>

                    <select id="student-number" class="select2 form-control form-control-lg" name="student_number">


                        <option value="{{ $request->student_number }}"  >{{ $request->student_number }}</option>

                    </select>
                </div>
            </div>







        </div>




        <div class="col-12">
            <input type="submit" class="btn btn-primary">download


        </div>
    </form>

</body>
</html>
