<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
     <link rel="stylesheet" href="css/style.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</head>
<body>


<div class="container">
   <div class = "row">
   <div class = "col-4">
           <h1>Update Product Data</h1>
    @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
          <strong>{{$message}}</strong>
          </div>
   @endif
           <form  id="myform"  enctype="multipart/form-data">
          @csrf
             <div class="mb-3">

<label class="form-label">Name:</label>

<input type="text" value="{{$data->name}}" class="form-control" name="name">

</div>

<div class="mb-3">

<label class="form-label">Slug:</label>

<input type="text" value="{{$data->slug}}" class="form-control" name="slug">

</div>

<div class="mb-3">

<label class="form-label">Image</label>
<img src="{{ asset('products/' . $data->image) }}" class="rounded-circle" width="50" height="50" alt="Example Image">
<input type="file"  class="form-control" name="image"> 



</div>


<div class="mb-3">

<label class="form-label">Price:</label>

<input type="text" value="{{$data->price}}" class="form-control" name="price">

</div>

<div class="mb-3">

<label class="form-label">Description:</label>

<textarea   class="form-control" value="{{$data->description}}" name="description" rows="4"></textarea>

</div>

<div class="mb-3">

<label class="form-label">Category:</label>

<input type="text" class="form-control" value="{{$data->category}}" name="category">

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
}</style>
   <div id="success-message" class="messages" style="display:none">Record Update SuccessFull</div>
   <div id="error-message" class="messages" style="display:none">Some One Error</div>
<button type="submit" class="btn btn-primary">Updated</button>
<a href="/display"  class="btn btn-primary" >Back</a>

   </form>
   </div>
   </div>
   </div>
   </div>
   <script> 
   $(document).ready(function(){
         $("#myform").submit(function(e){
               e.preventDefault();
               var form = $("#myform")[0]; 
              var data = new FormData(form); 
            $.ajax({
               
                 url:"{{route('update.product', $data->id)}}",
                 type:"POST",
                 data:data,
                 processData:false,
                 contentType:false,
                 success: function(response) {
                 $("#success-message").show();
                 $("#myform").trigger("reset");
                   setTimeout(function() {
                $("#success-message").slideUp();
               }, 2000);   
            },
             error: function(xhr, status, error) {
        console.error(xhr.responseText); // Log any errors to the console for debugging
        // Optionally, display an error message to the user
        $("#error-message").text("An error occurred while updating data. Please try again later.").show();
    }

            })

         })       
   });

   </script>
</body>
</html>
