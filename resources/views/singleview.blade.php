<h1> User Detail </h1>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <table class="table table-bordered table-striped">
                 <tr>
                     
                      <th>id</th>
                      <th>Name</th>
                      <th>slug</th>
                      <th>Image</th>
                      <th>price</th>
                      <th>description</th>
                      <th>category</th>
                      
                 </tr>
                 @foreach ($data as $id=>$product)
                    <tr>
                      
                         <td>{{$product -> id}}</td>
                         <td>{{$product -> name}}</td>
                         <td>{{$product ->  slug}}</td>
                         <td><img src="products/{{$product->image}}" class="rounded-circle" width="50" height="50" alt="Example Image"></td>
                         <td>{{$product -> price}}</td>
                         <td>{{$product -> description}}</td>
                         <td>{{$product -> category}}</td>
                        
                    </tr> 
                        @endforeach

                        </table>
</body>
</html>
