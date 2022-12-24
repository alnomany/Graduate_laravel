<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>login by email </title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body class="bg-dark">
        <div class="container mt-5 w-50">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">Login By Email Verfication</h5>
                        </div>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hi {{$student_name}}!</strong> You should check Your Email To get Verfication Code
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @if (count($errors) > 0)
                            <div class = "alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                </div>
                        @endif



                        <form  action="{{ route('fill.export.Excel.student.email.verfication.cheackcode')}}"  method="get" id="form">
                            @csrf

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Email">Email:</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{$email}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Verfication Code">Verfication Code</label>
                                    <input type="Password" class="form-control" name="Code" placeholder="Enter Verfication Code" value="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group text-center col-md-12">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

