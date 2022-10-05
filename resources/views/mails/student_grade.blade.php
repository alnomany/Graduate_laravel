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

    <table>
      <tr>
        <th>student number</th>
        <th>Student Name</th>

        <th>Patient Number-PRN</th>
        <th>Patient Name</th>
        <th>Tooth number</th>
        <th>Rest Type</th>



        <td>fm0 </td>
        <td>fm1 </td>
        <td>fm2 </td>
        <td>fm3 </td>
        <td>fm4 </td>
        <td>fm5 </td>
        <td>fm6 </td>

        <th>Note</th>
        <th>Note Sign</th>


        <th>avg</th>





      </tr>
      @foreach ($request as $req)


        <tr>
                <td>{{ $req->student_number }}</td>
                <td>{{ $req->student_name }}</td>
                <td>{{ $req->p_rn }}</td>
                <td>{{ $req->p_name }}</td>
                <td>{{ $req->tooth_number }}</td>
                <td>{{ $req->rest_type }}</td>


                <td>{{ $req->fm0 }}</td>
                <td>{{ $req->fm1 }}</td>
                <td>{{ $req->fm2 }}</td>
                <td>{{ $req->fm3 }}</td>
                <td>{{ $req->fm4 }}</td>
                <td>{{ $req->fm5 }}</td>
                <td>{{ $req->fm6 }}</td>

                <td>{{ $req->note }}</td>
                <td>{{ $req->note_sign }}</td>

                <td>{{ $req->avg }}</td>



          </tr>
          @endforeach



    </table>
    go to link <a href="http://sds493.co/fixedform/fill">Click here</a>

</body>
</html>
