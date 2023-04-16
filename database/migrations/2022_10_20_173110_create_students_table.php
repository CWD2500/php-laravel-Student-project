<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigincrements("id");
            $table->string("departement");
            $table->string("name"); //  الاسم
            $table->string("ratio"); // 	النسبة
            $table->string("father"); // أسم الاب
            // $table->string("father_job"); //  عمل الاب
             $table->string("mother");  // أسم الام
            // $table->string("place_and_number_of_registration");  // محل ورقم القيد
            // $table->string("place_of_birth");  // مكان الولادة
            // $table->string("place_Get_the_certificate"); // مكان  الحصول على الشهادة
            $table->string("total");  //   المجموع
            // $table->string("religion");  // الديانة
            // $table->string("city"); //  مدينة 
            // $table->string("gender"); // جنس
            // $table->string("language");
            // $table->string("exam_session"); // الدورة الامتحانية
            // $table->string("teacher"); 
            // $table->string("family");  //  الغائلة
            // $table->string("recruitment_division"); // شعبة التجنيد
            // $table->string("national_number");  //رقم الوطني
            // $table->date("date_of_birth"); // تاريخ الولادة
            // $table->string("mobile_phone_number");  // رقم الهاتف المحمول
            // $table->string("landline_number");  //   رقم الأرضي
            // $table->Text("detailed_address"); // عنوان تفصيلي
            // $table->date("date_of_registration"); // تاريخ  التسجيل 
            $table->softDeletes();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};







// $table->string("name"); //  الاسم
// $table->string("ratio"); // 	النسبة
// $table->string("father"); // أسم الاب
// $table->string("father_job"); //  عمل الاب
// $table->string("mother");  // أسم الام
// $table->string("place_and_number_of_registration");  // محل ورقم القيد
// $table->string("place_of_birth");  // مكان الولادة
// $table->string("place_Get_the_certificate"); // مكان  الحصول على الشهادة
// $table->string("total");  //   المجموع

// $table->string("religion");  // الديانة
// $table->string("gender");  //  جنس
// $table->string("city"); //  مدينة



// $table->string("family");  //  مدينة
// $table->string("recruitment_division"); // شعبة التجنيد
// $table->integer("national_number");  //رقم الوطني
// $table->date("date_of_registration"); // تاريخ التسجيل
// $table->string("mobile_phone_number");  // رقم الهاتف المحمول
// $table->string("landline_number");  //   رقم الأرضي
// $table->Text("detailed_address"); // عنوان تفصيلي