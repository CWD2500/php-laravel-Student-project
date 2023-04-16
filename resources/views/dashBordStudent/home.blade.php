@extends('layouts.admin')


@section('content')


<div class="container">
    <h6>Dash Bord</h6> 
    <h3 class="text-center ">    بيانات الطلاب</h3>  
</div>


<div class="container  mt-5">

   

    
    <table  class="table ">
        <thead class="table-dark" style="font-size:20px;font-weight: bold;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" >
            <tr>
                <th>رقم الطالب</th>
                <th>القسم</th>
                <th>أسم الطالب</th>
                <th>أسم الاب</th>
                <th>اسم الأم</th>
                <th>المنطقة</th>
                <th>المعدل </th>
                <th>أظهار</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="homeProduct">
            <tr>
                <td>1</td>
                <td>Action</td>
                <td>Book Christisne</td>
                <td>Christiane</td>
                <td>200$</td>
                <td>199$</td>
                <td>170$</td>
                <td>edit</td>
                <td><a href="" class="btn btn-primary" > Edit </a>  </td>
                <td><a href="" class="btn btn-danger" > Delete </a>  </td>

            </tr>
        </tbody>
    </table>
</div>


    
@endsection