@extends('layouts.app')


@section('content')

<style>
body{
    /* background: black; */
}    
</style>

<div class="container">
    <h6>لوحة التحكم</h6> 
    <h3 class="text-center "> صفحة أختيار القسم</h3>  
</div>


<div class="container  mt-2">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
       
            <form action=""  method="">

               
    
      

             
                    <div class="form-group mt-3">
                        <label for="#studentname mt-3"> أسم الطالب/الطالبة فقد</label>
                        <input type="text" class="form-control" name="" id="#studentname"  placeholder="أدخل أسم الطالب  من فضلك">            
                    </div>

                    
                    
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group mt-3">
                        <label for="#bookOldPrice">  أسم الاب  </label>
                        <input type="text" class="form-control" name=""   placeholder=" أادل اسم الاب من فضلك ">            
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#bookCost"> أسم الام</label>
                        <input type="text" id=""  class="form-control" name=""   placeholder="أدخل أسم الأم من فضلك">            
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#bookCost"> المجموع  </label>
                        <input type="text" id=""  class="form-control" name=""   placeholder="أدخل معدل الطالب من فضلك">            
                    </div>
                </div>

                                
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="Student's section">الجنس    </label>
                        <select name="" id="" class="form-control">
                            <option value="">--------</option>
                            <option value="">ذكر</option>
                            <option value="">انثى</option>
                        </select>
                    </div>
                </div>

                
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#bookCost"> المدينة </label>
                        <input type="text" id=""  class="form-control" name=""   placeholder="أدخل منطقة الطالب من فضلك">            
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#bookCost"> تاريخ التسجيل</label>
                        <input type="Date" id=""  class="form-control" name=""   >            
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#bookCost">  مكان الحصول على الشهادة  </label>
                        <input type="text" id=""  class="form-control" name=""   >            
                    </div>
                </div>



                {{-- <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#bookCost"> رقم الموبايل</label>
                        <input type="text" id=""  class="form-control" name=""   placeholder="أدخل رقم الموبايل من فضلك">            
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#bookCost"> رقم الأرضي</label>
                        <input type="text" id=""  class="form-control" name=""   placeholder="أدخل رقم الأرضي من فضلك">            
                    </div>
                </div> --}}





 

       

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group  mt-3">
                        <label for="#bookCost"> العنوان بالتفصيل</label>
                        <textarea  class="form-control"   rows="4" ></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-outline-info w-100 mt-3">  حفظ  </button>
 
            </form>
        
    </div>
</div>






    
@endsection