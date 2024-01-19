<html>
<head>
<link rel="stylesheet" href="public\css\style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<style>

nav .w-5{
   display:none
}
</style>
   <div class="container">
      <div class="row">
         <div class="col-6">
         <h1>ALL Product List</h1>
                 <table class="table table-bordered table-striped">
                 <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Image</th>
                      <th>1st image</th>
                      <th>2st image</th>
                      <th>3st image</th>
                      <th>Slug</th>
                      <th>Price</th>
                      <th>Description</th>
                      <th>Category</th>
                      <th>Cerated_at</th>
                      <th>Upadted_at</th>
                      <th>Delted_at</th>
                      <th>view</th>
                      <th>Update</th>
                      <th>delete</th>
                      <th>Add Image</th>
                      <th> Add Multiple Image</th>
                 </tr>
                 @foreach ($product as $prod)
                    <tr>
                         <td>{{$prod -> id}}</td>
                         <td>{{$prod -> name}}</td>
                         <td><img src="products/{{$prod->image}}" class="rounded-circle" width="50" height="50" alt="Example Image"></td>
                          <td><img src="products/{{$prod->image1}}" class="rounded-circle" width="50" height="50" alt="Example Image"></td>
                          <td><img src="products/{{$prod->image2}}" class="rounded-circle" width="50" height="50" alt="Example Image"></td>
                          <td><img src="products/{{$prod->image3}}" class="rounded-circle" width="50" height="50" alt="Example Image"></td>
                         <td>{{$prod -> slug}}</td>
                         <td>{{$prod -> price}}</td>
                         <td>{{$prod -> description}}</td>
                         <td>{{$prod -> category}}</td>
                         <td>{{$prod -> created_at}}</td>
                         <td>{{$prod -> updated_at}}</td>t
                         <td>{{$prod -> deleted_at}}</td>
                         <td> <a href="{{ route('view.product',$prod -> id)}}" class="btn btn-primary btn-sm mb-3">view</a></td>
                        <td> <a href="{{route('update.page',$prod -> id)}}" class="btn btn-warning btn-sm mb-3">Update</a></td>
                        <td>  <a href="{{route('delete.product',$prod -> id)}}" class="btn btn-danger btn-sm mb-3">Delete</a>
                        <td>  <a href="{{route('updateimage.product',$prod-> id)}}" style="width:100px" class="btn btn-secondary btn-sm mb-3">Add Image</a></td>
                        <td> <a href="{{route('updatemulimage.product',$prod ->id)}}" class="btn btn-dark btn-sm mb-3"  style="width:100px"> Add Multiple Images</a></td>
                        </tr> 
                        @endforeach
<div>
     <a href="/insert" class="btn btn-success btn-sm mb-3">Add new Product</a>
     
     <a href="/" class="btn btn-success btn-sm mb-3">Back</a>

</div>

                        </table>
                        {{-- <div class="mt10">
                               {{ $product -> links() }}
                        </div>
                        <div>
                        Total Products : {{$product->total()}}<br>
                        Current page : {{$product->currentpage()}}
                        </div> --}}
         </div>
     </div>
</div>

</body>
</html>