<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">


    <!-- Required meta tags -->
    @include("admin.admincss")
  </head>
  <body>
     <div class="container-scroller">
     @include("admin.navbar")
     
     <div style="position: relative; top: 60px; right: -150px">
       <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

        @csrf

         <div>
           <label>Title</label>
           <input style="color:blue;" type="text" name="title" value="{{$data->title}}" required><!-- textfield -->

         </div>
         <div>
           <label>Price</label>
           <input style="color:blue;" type="number" name="price" value="{{$data->price}}" required><!-- textfield -->
           
         </div>
         


         <div>
           <label>Description</label>
           <input style="color:blue;" type="text" name="description" value="{{$data->description}}" required><!-- textfield -->
           
         </div>

         <div>
           <label>old Images</label>
           <img height="200" width="200" src="/foodimage/{{$data->image}}">
           
         </div>

         <div>
           <label>New Images</label>
           <input type="file" name="image"required><!-- textfield -->
           
         </div>


         <div>
           <input style="color: white" type="submit" value="Save"><!-- textfield -->
           
         </div>
       </form>


       <div>


     </div>

    @include("admin.adminscript")
  </body>
</html>