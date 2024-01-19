<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
     <link rel="stylesheet" href="css/style.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     
</head>
<body>
<div class="container">
   <div class = "row">
   <div class = "col-4">
                 <h1>ADD New Category</h1>
            @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
          <strong>{{$message}}</strong>
          </div>
   @endif
           <form style="hieight:100px" action="{{route ('store.category') }}" method="POST" enctype="multipart/form-data">
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
               <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/"  class="btn btn-primary">Back</a></div>
                </form> 
                 <form style="hieight:100px" action="{{route ('store.subcategory') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <select class="form-control" name="category_id">
                 <option value="">Open This Select Manu</option>
                 @foreach ($categories as $cate)
                 <option value="{{$cate->id}}">{{$cate->category_name}}</option>      
                 @endforeach
          </select>
             <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" name="subcategory_name">
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
               <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/"  class="btn btn-primary">Back</a></div>
                </form>    
                </div>
                </div>
                </div>
                </div>
</body>
</html>
