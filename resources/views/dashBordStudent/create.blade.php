@extends('layouts.admin')


@section('content')


<?php  $myList = ['البرمحة' , 'الشبكات' , 'الصيانة'];
    $myListTecher = ['نعم'  , 'لا'];
    $myListGender = [' ذكر'  , 'انثى'];
    $myListTEst = [' الاول'  , 'الثانية'  , 'الاول/الثانية'];
    $myListLanguage = [' الانكليزي '  , 'الفرنسي'  , 'الروسي'];

?>

<div class="container mt-5">
 
    <h3 class="text-center myTitiel " > صفحة أضافة الطلاب</h3>  
</div>


<div class="container  mt-5  ">
    <div class="row ">
        <div class="col-sm-12 col-md-4 col-lg-12 ">
       
            <form action="{{  route('admin.store')  }}"  method="POST">
                {{ csrf_field() }}

               
                    <div class="form-group">
                        <label for="Student's section">الأقسام</label>
                        <select name="departement" id="" class="inputForm text-center"   >
                            <option value="" class="myOption" >--------</option>
                            <option value="<?php   $myList[0]  ?>"class="myOption" > البرمحة </option>
                            <option value="<?php  $myList[1]  ?>" class="myOption" > الشبكات</option>
                            <option value="<?php   $myList[2]  ?>" class="myOption" >الصيانة</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-6">    
                    <div class=" mt-3">
                        <label for="#name mt-3"> أسم الطالب/الطالبة فقد</label>
                        <input type="text" class="inputForm mt-3  " name="name" id="#name"  placeholder="أدخل أسم الطالب/الطالبة فقد  من فضلك" >            
                    </div>
                </div>

                
                <div class="col-sm-12 col-md-4 col-lg-6">    
                    <div class="form-group mt-3">
                        <label for="#ratio mt-3"> النسبة</label>
                        <input type="text" class="inputForm mt-3" name="ratio" id="#studentname"  placeholder="أدخل النسبة  من فضلك">            
                    </div>   
                </div>

                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group mt-3">
                        <label for="#father">  أسم الاب  </label>
                        <input type="text" class="inputForm mt-3" name="father"   placeholder=" أدخل اسم الاب من فضلك ">            
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group mt-3">
                        <label for="#father_job">عمل الاب  </label>
                        <input type="text" class="inputForm mt-3" name="father_job"   placeholder=" ادخل عمل الاب من فضلك ">            
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#mother"> أسم الام</label>
                        <input type="text" id=""  class="inputForm mt-3" name="mother"   placeholder="أدخل أسم الأم من فضلك">            
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#place_and_number_of_registration"> محل ورقم القيد</label>
                        <input type="text" id=""  class="inputForm mt-3" name="place_and_number_of_registration"   placeholder="أدخل  محل ورقم القيد من فضلك">            
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#place_of_birth">مكان الولادة</label>
                        <input type="text" id=""  class="inputForm mt-3" name="place_of_birth"   placeholder="أدخل  مكان الولادة  من فضلك" >            
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#place_Get_the_certificate">  مكان الحصول على الشهادة  </label>
                        <input type="text" id=""  class="inputForm mt-3" name="place_Get_the_certificate"   placeholder="أدخل  مكان الحصول على الشهادة   من فضلك" >            
                    </div>
                </div>



                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#total"> المجموع  </label>
                        <input type="text" id=""  class="inputForm mt-3" name="total"   placeholder="أدخل المجموع من فضلك">            
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#religion">  الديانة </label>
                        <input type="text" id=""  class="inputForm mt-3" name="religion"   placeholder="أدخل الديانة من فضلك" >            
                    </div>
                </div>







                
                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#city"> المدينة </label>
                        <input type="text" id=""  class="inputForm mt-3" name="city"   placeholder="أدخل منطقة الطالب من فضلك">            
                    </div>
                </div>





                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#family"> الوضع العائلي /الجنسية</label>
                        <input type="text" id=""  class="inputForm mt-3" name="family"   placeholder="أدخل الوضع العائلي /الجنسية من فضلك">            
                    </div>
                </div>

           
            
             
                

                 <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="Student's section">أبناء المعلمين   </label>
                        <select name="teacher" id="" class="inputForm mt-3">
                            <option value="" class="myOption">--------</option>
                            <option value="<?php  $myListTecher[0] ?>" class="myOption">نعم</option>
                            <option value="<?php   $myListTecher[1] ?>" class="myOption"> لا </option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="language's section"> اللغة  </label>
                        <select name="language" id="" class="inputForm mt-3">
                            <option value=""class="myOption">--------</option>
                            <option value="<?php  $myListLanguage[0] ?>" class="myOption">الانكليزي </option>
                            <option value="<?php  $myListLanguage[1] ?>" class="myOption">الروسي</option>
                            <option value="<?php  $myListLanguage[2] ?>" class="myOption"> الفرنسي</option>
                        </select>
                    </div>
                </div>

                
                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="Student's section">  الدورة الامتحانية   </label>
                        <select name="exam_session" id="" class="inputForm mt-3">
                            <option value="">--------</option>
                            <option value="<?php  $myListTEst[0] ?>" class="myOption">  الاولى</option>
                            <option value="<?php   $myListTEst[1] ?>" class="myOption"> الثانية</option>
                            <option value="<?php  $myListTEst[2] ?>"class="myOption" > الاولى/القانية</option>
                        </select>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="Student's section">  الجنس   </label>
                        <select name="gender" id="" class="inputForm mt-3">
                            <option value=""class="myOption" >--------</option>
                            <option value="<?php   $myListGender[0] ?>"class="myOption"> ذكر</option>
                            <option value="<?php   $myListGender[1] ?>"class="myOption"> انثى</option>
                        </select>
                    </div>
                </div>
  



                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#recruitment_division"> شعبة التجنيد</label>
                        <input type="text" id=""  class="inputForm mt-3" name="recruitment_division"   placeholder="أدخل مكان شعبة التجنيد من فضلك">            
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#nationalNumber"> رقم الوطني</label>
                        <input type="text" id=""  class="inputForm mt-3" name="national_number"   placeholder="أدخل مكان شعبة التجنيد من فضلك">            
                    </div>
                </div>



                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#dateOFBirth"> تاريخ الولادة</label>
                        <input type="date" id=""  class="inputForm mt-3" name="date_of_birth"   placeholder="أدخل تاريخ التسجيل من فضلك">            
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#phone"> رقم الموبايل</label>
                        <input type="text" id=""  class="inputForm mt-3" name="mobile_phone_number"   placeholder="أدخل رقم الموبايل من فضلك">            
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#number"> رقم الأرضي</label>
                        <input type="text" id=""  class="inputForm mt-3" name="landline_number"   placeholder="أدخل رقم الأرضي من فضلك">            
                    </div>
                </div>
       
                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-group  mt-3">
                        <label for="#date"> تاريخ التسجيل </label>
                        <input type="date" id=""  class="inputForm mt-3" name="date_of_registration"   placeholder="أدخل تاريخ التسجيل ">            
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group  mt-3">
                        <label for="#address"> العنوان بالتفصيل</label>
                        <textarea  class="inputForm mt-3"   rows="4"  name="detailed_address"  > </textarea>
                    </div>
                </div>

                <button type="submit" class="btnSubmit mt-3">  حفظ المعلومات </button>
 
            </form>
        
    </div>
</div>






    
@endsection