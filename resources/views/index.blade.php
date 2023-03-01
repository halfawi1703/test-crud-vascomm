<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>List Jobs</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>List Jobs</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-left">
                <a href="{{$base_url}}/form_add"> + Add Jobs</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <head>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Education level</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Quota</th>
                            <th>Action</th>
                        </tr>
                    </head>
                    <tbody>
                        <?php @$no = 1;?>
                        @foreach($jobs["data"] as $value)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$value["name"]}}</td>
                            <td>{{$value["description"]}}</td>
                            <td>{{$value["education_level"]}}</td>
                            <td>{{$value["start_date"]}}</td>
                            <td>{{$value["end_date"]}}</td>
                            <td>{{$value["quota"]}}</td>
                            <td>
                                <a href="{{$base_url}}/form_edit/{{ $value["id"] }}">Edit</a> | 
                                <a href="{{$base_url}}/destroy/{{ $value["id"] }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>