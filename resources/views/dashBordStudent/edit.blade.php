@extends('layouts.app')


@section('content')

<style>
body{
    /* background: black; */
}    
</style>

<div class="container">
    <h6>لوحة التحكم</h6> 
    <h3 class="text-center "> صفحة أضافة الطلاب</h3>  
</div>


<div class="container  mt-2">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-12">
       
            <form action=""  method="">

               
                    <div class="form-group">
                        <label for="Student's section">الأقسام</label>
                        <select name="" id="" class="form-control">
                            <option value="">--------</option>
                            <option value="">البرمجة</option>
                            <option value="">الشبكات</option>
                            <option value="">الصيانة</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">    
                    <div class="form-group mt-3">
                        <label for="#studentname mt-3"> أسم الطالب/الطالبة فقد</label>
                        <input type="text" class="form-control" name="" id="#studentname"  placeholder="أدخل أسم الطالب/الطالبة فقد  من فضلك">            
                    </div>
                </div>

                
                <div class="col-sm-12 col-md-6 col-lg-6">    
                    <div class="form-group mt-3">
                        <label for="#studentname mt-3"> النسبة</label>
                        <input type="text" class="form-control" name="" id="#studentname"  placeholder="أدخل النسبة  من فضلك">            
                    </div>   
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group mt-3">
                        <label for="#bookOldPrice">  أسم الاب  </label>
                        <input type="text" class="form-control" name=""   placeholder=" أدخل اسم الاب من فضلك ">            
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group mt-3">
                        <label for="#bookOldPrice">عمل الاب  </label>
                        <input type="text" class="form-control" name=""   placeholder=" ادخل عمل الاب من فضلك ">            
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
                        <label for="#bookCost"> محل ورقم القيد</label>
                        <input type="text" id=""  class="form-control" name=""   placeholder="أدخل  محل ورقم القيد من فضلك">            
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#bookCost">مكان الولادة</label>
                        <input type="Date" id=""  class="form-control" name=""   placeholder="أدخل  مكان الولادة  من فضلك" >            
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#bookCost">  مكان الحصول على الشهادة  </label>
                        <input type="text" id=""  class="form-control" name=""   placeholder="أدخل  مكان الحصول على الشهادة   من فضلك" >            
                    </div>
                </div>



                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#bookCost"> المجموع  </label>
                        <input type="text" id=""  class="form-control" name=""   placeholder="أدخل المجموع من فضلك">            
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#bookCost">  الديانة </label>
                        <input type="text" id=""  class="form-control" name=""   placeholder="أدخل الديانة من فضلك" >            
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
                        <label for="Student's section">الدورة الامتحانية    </label>
                        <select name="" id="" class="form-control">
                            <option value="">--------</option>
                            <option value="">الاولى</option>
                            <option value="">الثانية</option>
                            <option value="">الاولى/الثانية</option>
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
                        <label for="Student's section">اللغة   </label>
                        <select name="" id="" class="form-control">
                            <option value="">--------</option>
                            <option value="">الانكليزي</option>
                            <option value="">الفرنسي</option>
                        </select>
                    </div>
                </div>



                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#bookCost"> الوضع العائلي /الجنسية</label>
                        <input type="text" id=""  class="form-control" name=""   placeholder="أدخل الوضع العائلي /الجنسية من فضلك">            
                    </div>
                </div>






                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="Student's section">أبناء المعلمين   </label>
                        <select name="" id="" class="form-control">
                            <option value="">--------</option>
                            <option value="">نعم</option>
                            <option value="">لا</option>
                        </select>
                    </div>
                </div>
 



                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#bookCost"> شعبة التجنيد</label>
                        <input type="text" id=""  class="form-control" name=""   placeholder="أدخل مكان شعبة التجنيد من فضلك">            
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#bookCost"> تاريخ التسجيل</label>
                        <input type="date" id=""  class="form-control" name=""   placeholder="أدخل تاريخ التسجيل من فضلك">            
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
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
                </div>
       

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group  mt-3">
                        <label for="#bookCost"> العنوان بالتفصيل</label>
                        <textarea  class="form-control"   rows="4"  > </textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-outline-info w-100 mt-3">  حفظ المعلومات </button>
 
            </form>
        
    </div>
</div>






    
@endsection