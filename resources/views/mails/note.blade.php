<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hi</title>
</head>
<body>

    <h2>HTML Table</h2>

    <table>
      <tr>
        <th>student number</th>
        <th>Student Name</th>

        <th>Patient Number-PRN</th>
        <th>Patient Name</th>

        <th>Tooth number</th>
        <th>Rest Type</th>
        <th>Note</th>


      </tr>
      <tr>
        <td>{{ $request->student_number }}</td>
        <td>{{ $request->student_name }}</td>
        <td>{{ $request->p_rn }}</td>
        <td>{{ $request->p_name }}</td>
        <td>{{ $request->tooth_number }}</td>
        <td>{{ $request->rest_type }}</td>
        <td>{{ $request->note }}</td>


      </tr>
   
    </table>
    go to link <a href="http://sds493.co/fixedform/fill">Click here</a>

</body>
</html>
