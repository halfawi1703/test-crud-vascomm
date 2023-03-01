<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Job</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{$base_url}}"> Back to list</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <h1>Edit Jobs</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Content here -->
                <form action="{{$base_url}}/update" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$jobs['data']['id']}}"> <br/>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="" value="{{$jobs['data']['name']}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required>{{@$jobs['data']['description'] ? $jobs['data']['description'] : ""}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Education Level</label>
                        <select class="form-select" aria-label="Default select example" name="education_level" required>
                            <option value="">Open this select menu</option>
                            <option value="SD" {{$jobs['data']['education_level'] == "SD"?"selected":""}}>SD</option>
                            <option value="SMP" {{$jobs['data']['education_level'] == "SMP"?"selected":""}}>SMP</option>
                            <option value="SMA" {{$jobs['data']['education_level'] == "SMA"?"selected":""}}>SMA</option>
                            <option value="S1" {{$jobs['data']['education_level'] == "S1"?"selected":""}}>S1</option>
                            <option value="S2" {{$jobs['data']['education_level'] == "S2"?"selected":""}}>S2</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" name="start_date" placeholder="" value="{{$jobs['data']['start_date']}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">End Date</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" name="end_date" placeholder="" value="{{$jobs['data']['end_date']}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Quota</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="quota" placeholder="" value="{{$jobs['data']['quota']}}" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Update Job</button>
                    </div>
                </form>
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