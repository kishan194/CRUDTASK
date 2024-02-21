<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
     <link rel="stylesheet" href="css/style.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
   <div class = "row">
   <div class = "col-4">
                 <h1>ADD New Product</h1>
            @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
          <strong>{{$message}}</strong>
          </div>
   @endif
           <form style="hieight:100px" id="myform" enctype="multipart/form-data">
          @csrf
             <div class="mb-3">

<label class="form-label">Name:</label>

<input type="text" class="form-control" name="name">
@if($errors->has('name'))
<span class="text-danger">{{$errors->first('name')}}</span>
@endif

</div>

<div class="mb-3">

<label class="form-label">Slug:</label>

<input type="text" class="form-control" name="slug">
@if($errors->has('slug'))
<span class="text-danger">{{$errors->first('slug')}}</span>
@endif

</div>

<div class="mb-3">

<label class="form-label">Image</label>

<input type="file" class="form-control" name="image"> 
@if($errors->has('image'))
<span class="text-danger">{{$errors->first('image')}}</span>
@endif

</div>
<div class="mb-3">

<label class="form-label">Image1</label>

<input type="file" class="form-control" name="image1"> 
@if($errors->has('image1'))
<span class="text-danger">{{$errors->first('image1')}}</span>
@endif

</div>
<div class="mb-3">

<label class="form-label">Image2</label>

<input type="file" class="form-control" name="image2"> 
@if($errors->has('image2'))
<span class="text-danger">{{$errors->first('image2')}}</span>
@endif

</div>
<div class="mb-3">

<label class="form-label">Image3</label>

<input type="file" class="form-control" name="image3"> 
@if($errors->has('image3'))
<span class="text-danger">{{$errors->first('image3')}}</span>
@endif

</div>

<div class="mb-3">

<label class="form-label">Price:</label>

<input type="text" class="form-control" name="price">
@if($errors->has('price'))
<span class="text-danger">{{$errors->first('price')}}</span>
@endif

</div>

<div class="mb-3">

<label class="form-label">Description:</label>

<textarea   class="form-control" name="description" rows="4"></textarea>
@if($errors->has('description'))
<span class="text-danger">{{$errors->first('description')}}</span>
@endif
</div>

<div class="mb-3">

<label class="form-label">Category:</label>

<input type="text" class="form-control" name="category">
@if($errors->has('category'))
<span class="text-danger">{{$errors->first('category')}}</span>
@endif
</div>
<style>
            #success-message,
            #error-message{
            background: #DEF1D8;
            color: green;
            font-size: 30px;
            padding: 10px;
            margin: 10px;
            display: none;
            position: fixed;
            right: 15px;
            top: 15px;
            z-index: 20;
            }
        </style>
        <div id="success-message" class="messages" style="display:none">Record Added SuccessFull</div>
        <div id="error-message" class="messages" style="display:none">Some One Error</div>
<button type="submit" id="mybtn" class="btn btn-primary">Submit</button>
<a href="/display"  class="btn btn-primary" >Back</a>
 
   </form>
   </div>
   </div>
   </div>
   </div>
<script>
    $(document).ready(function(){
  //insert data
    $("#myform").submit(function(e){
        e.preventDefault();
        var form = $(this)[0]; 
        var data = new FormData(form); 
        $.ajax({
            type: "POST",
            url: "{{ route('addproduct') }}",
            data: data,
            processData: false, 
            contentType: false,
            success: function(response) {
                 $("#success-message").show();
                 $("#myform").trigger("reset");
                   setTimeout(function() {
                $("#success-message").slideUp();
               }, 2000);   
            },
            error: function(xhr, status, error) {
              
            },
            complete: function() {
                $("#btnSubmit").prop("disabled", false);
                 $("input[type='text']").val('');
              $("input[type='file']").val('');
            }
        });
    });
});

</script>
</body>
</html>
