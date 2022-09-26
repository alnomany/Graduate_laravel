<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>

    <h2>{{ $request->student_name }}</h2>

    <table>
      <tr>
        <th>student number</th>
        <th>Student Name</th>

        <th>Patient Number-PRN</th>
        <th>Patient Name</th>
        <td>fm0 </td>
        <td>fm1 </td>
        <td>fm2 </td>
        <td>fm3 </td>
        <td>fm4 </td>
        <td>fm5 </td>
        <td>fm6 </td>


        <th>Tooth number</th>
        <th>Rest Type</th>
        <th>Note</th>


      </tr>
      <tr>
        <td>{{ $request->student_number }}</td>
        <td>{{ $request->student_name }}</td>
        <td>{{ $request->p_rn }}</td>
        <td>{{ $request->p_name }}</td>

        <td>{{ $request->fm0 }}</td>
        <td>{{ $request->fm1 }}</td>
        <td>{{ $request->fm2 }}</td>
        <td>{{ $request->fm3 }}</td>
        <td>{{ $request->fm4 }}</td>
        <td>{{ $request->fm5 }}</td>
        <td>{{ $request->fm6 }}</td>



        <td>{{ $request->tooth_number }}</td>
        <td>{{ $request->rest_type }}</td>
        <td>{{ $request->note }}</td>









      </tr>

    </table>
    go to link <a href="http://sds493.co/fixedform/fill">Click here</a>

</body>
</html>
