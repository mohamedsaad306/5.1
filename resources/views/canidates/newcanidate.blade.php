@extends('masterlayout')
@section('content')

<!-- 
<div id="creationform	" class="form-inline" style="direction:rtl;">
	{!! Form::label('title','اسم المرشح') !!}
	{!! Form::text('title','null',['class' =>'form-control']) !!}
</div>

 -->
<style type="text/css">
	#labelSpacing{
		direction:rtl;
		float:right
	}
</style>

{!! Form::open(array('url'=>'canidates/store',  'files' => true ,'novalidate' => 'novalidate',"enctype"=>"multipart/form-data")) !!}

{!! Form::file('photo') !!}

<div class="form-inline" style="direction: rtl;" >


            <!-- <form class="form-inline"  style="direction:rtl;" > -->

<!-- Form Name -->
    <legend>مرشح جديد </legend>

            <!-- Text input-->

    <div class="col-md-2" id="labelSpacing">  <label class="" for="name">اسم المرشح </label> </div>
    <input id="name" name="name" type="text" placeholder="placeholder" class="form-control input-md" required="">
    <br><br>


    {{--<input name="thefile2" type="file">--}}
    <br><br><br>
    <hr>



            <!-- Text input-->
    <div class="col-md-2" id="labelSpacing">
        <label class="" for="phone">رقم الهاتف</label>
    </div>
    <input id="phone" name="phone" type="text" placeholder="\" class="form-control input-md">
    <br><br>

            <!-- Text input-->
    <div class="col-md-2" id="labelSpacing">
        <label class="" for="adress">العنوان</label>
    </div>
    <input id="adress" name="adress" type="text" placeholder="" class="form-control input-md" style="width: 45%;">
    <br><br>
            <!-- Select Basic -->
    <div class="col-md-2" id="labelSpacing">
        <label class="" for="enroll_type">enroll_type</label>
    </div>
    <select id="enroll_type" name="enroll_type" class="form-control">
      <option value="عمال">عمال</option>
      <option value="فلاحين">فلاحين</option>
    </select>
<br><br>

<!-- Select Basic -->
  <div class="col-md-2" id="labelSpacing">
  <label class="" for="enroll_list	">enroll_list	</label>
</div>
    <select id="enroll_list	" name="enroll_list	" class="form-control">
      <option value="1">مستقل</option>
      <option value="2">Option two</option>
    </select>
<br><br>

<!-- Text input-->
  <div class="col-md-2" id="labelSpacing">
  <label class="" for="political_party">political_party</label>
  </div>  
  <input id="political_party" name="political_party" type="text" placeholder="political_party" class="form-control input-md">
    
<br><br>

<!-- Select Basic -->
  <div class="col-md-2" id="labelSpacing">
  <label class="" for="government">government</label>
    </div>
    <select id="government" name="government" class="form-control">
      <option value="1">القاهرة</option>
      <option value="2">Option two</option>
    </select>
<br><br>

<!-- Select Basic -->
  <div class="col-md-2" id="labelSpacing">
   <label class="" for="gov_circle">الدائرة المرشح عنها </label>
</div>
    <select id="gov_circle" name="gov_circle" class="form-control">
      <option value="1">بنها/قليوب</option>
    </select>
<br><br>

<!-- Text input-->
<div class="col-md-2" id="labelSpacing">
	<label class="" for="list_number">رقم الترشيح</label>  
</div>
     <input id="list_number" name="list_number" type="text" placeholder="" class="form-control input-md" required="">
    <br><br>
  
<!-- Select Basic -->
<div class="col-md-2" id="labelSpacing">
 <label class="" for="election_ico">الرمز الانتخابي</label>
</div>  
      <select id="election_ico" name="election_ico" class="form-control">
      <option value="1">رمز البجعه</option>
      <option value="2">Option two</option>
    </select>
<br><br>

<!-- Text input-->
<div class="col-md-2" id="labelSpacing">
	<label class="" for="campaign_solgan">شعار الحملة الانخابية</label>  
  </div>
  <input id="campaign_solgan" name="campaign_solgan" type="text" placeholder="" class="form-control input-md">
<br><br>    

<!-- Textarea -->
<div class="col-md-2" id="labelSpacing">
  <label class="" for="campaign_program">البرنامج الانتخابى</label>
  </div>                     
    <textarea class="form-control" id="campaign_program" name="campaign_program">default text</textarea>
  
<br><br>
<!-- Button -->
  <div class="col-md-4">
      {!! Form::submit('تسجيل المرشح!') !!}
      {{--<button id="singlebutton" name="singlebutton" class="btn btn-inverse">تسجيل المرشح</button>--}}
<!-- </form> -->
</div>
{!! Form::close() !!}




@stop

