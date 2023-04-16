@extends('layouts.app')


@section('content')


<div class="container">
    <h6>Dash Bord</h6> 
    <h3 class="text-center "> Book Trashed  </h3>  
</div>


<div class="container  mt-5">

   

    
    <table  class="table table-dark">
        <thead >
            <tr>
                <th>Count</th>
                <th>Categories</th>
                <th>Book Name</th>
                <th>Customer</th>
                <th>Price</th>
                <th>Old Price</th>
                <th>Cost</th>
                <th>Restore</th>
                <th>Delete End </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Action</td>
                <td>Book Christisne</td>
                <td>Christiane</td>
                <td>200$</td>
                <td>199$</td>
                <td>170$</td>
                <td>edit</td>
                <td>delete  </td>

            </tr>
        </tbody>
    </table>
</div>


    
@endsection