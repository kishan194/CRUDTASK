<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<h1>Update The Image</h1>
<div class = "col-4">
           
    @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
          <strong>{{$message}}</strong>
          </div>
   @endif
  <form action="{{route ('addmulimage.product',$data->id) }}" method="POST" enctype="multipart/form-data">
          @csrf

<div class="mb-3">

<label class="form-label" style="border:2px solid black" >Image1</label>

<input type="file" value={{""}} class="form-control" style="width:300px" name="image1"> 
</div>

<label class="form-label" style="border:2px solid black" >Image2</label>

<input type="file" value={{""}} class="form-control" style="width:300px" name="image2"> 
</div>

<label class="form-label" style="border:2px solid black" >Image3</label>

<input type="file" value={{""}} class="form-control" style="width:300px" name="image3"> 
</div>

<button type="submit" class="btn btn-primary">Submit</button>
<a href="/display" class="btn btn-success">Back</a>
</form>