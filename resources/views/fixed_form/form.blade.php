<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form Validation using jQuery in Laravel</title>
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
                            <h5 class="text-center">Laravel Client Side Form Validation with jQuery Example - MyWebtuts.com</h5>
                        </div>
                        <form method="post" action="{{ route('forms')}}" id="form">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Name">Name:</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Detail">Detail:</label>
                                    <textarea name="detail" class="form-control" rows="3" placeholder="Enter Detail"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Number">Number:</label>
                                    <input type="text" class="form-control" name="number" placeholder="Enter Number" value="">
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="form-group">
                                    <label for="Rest Type">Rest Type</label>
                                    <select class="form-control" id="rest_type" name="rest_type">
                                        <option value="">Treatment Plan</option>
                        
                                        <option value="x1" > x1</option>
                                        <option value="x2" > x2</option>

                        
                        
                        
                        
                                    </select>
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
<script>
    $(document).ready(function () {
        $('#form').validate({ 
            rules: {
       
                rest_type:{
                    required:true,
                }
        
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>
