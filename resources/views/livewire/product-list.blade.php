<div>
    {{-- The best athlete wants his opponent at his best. --}}
    
<h1>product list components</h1>  
<div class="table-responsive">
    <table class="table table-primary " border="1px">
     <tr class="">
                <td >Name</td>
                <td>Category</td>
                <td>Price</td>
            </tr>
 @foreach ($products as $item)
 {{-- <h3>{{$item->name}} </h3> --}}
      <tr class="">
                <td >{{$item->name}}</td>
                <td>{{$item->category}}</td>
                <td>{{$item->price}}</td>
            </tr>
 @endforeach
 
    </table>
</div>
      
</div>



