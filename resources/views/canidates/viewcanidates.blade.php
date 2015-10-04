@extends('masterlayout')

@section('content')
<table class="table" style="direction: rtl;">
      <caption>Optional table caption.</caption>
      <thead>
        <tr>
          <th>#</th>
          <th>اسم المرشح</th>
          <th>تعديل</th>
          <th>حذف</th>
        </tr>
      </thead>
      <tbody>
        <tr>
       
          
          @foreach($registered_canidates as $canidate) 
          <tr>
          <th scope="row">  <a href="#"> {{ $canidate->id }}</a></th>
          <td> <a href="#"> {{ $canidate->name }}</a></td>
          <td> <a href="#"> Edite</a></td>
          <td> <a href="#"> delete</a></td>
        </tr>      
          @endforeach
        </tbody>
    </table>
    <br><br>

    @stop