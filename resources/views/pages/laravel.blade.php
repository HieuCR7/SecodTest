@extends('layouts.master')
@section('content')

<h1>Laravel</h1>
<!-- <?php echo $KhoaHoc; ?> -->
<b>{{$KhoaHoc}}</b><br>
<!-- CÂU ĐIỀU KIỆN IF ELSE -->
@if($KhoaHoc != "")
	{{$KhoaHoc}}
@else
	{{"Khong co Khoa Hoc"}}
@endif
<br>

<!-- VÒNG LẶP FOR -->
@for($i=1; $i<=10; $i++)
	{{$i.""}}
@endfor
<br>
<!-- VÒNG LẶP FOREACH -->
<?php $KhoaHoc1 = array('Laravel', 'PHP', 'IOS', 'Androi');?>
@if(!empty($KhoaHoc1))
	@foreach($KhoaHoc1 as $value)
		{{$value}}
	@endforeach
@else
	{{"Mảng rỗng"}}
@endif
<br>
<!-- VÒNG LẶP ĐIỀU KIỆN FORELSE -->
<?php $KhoaHoc2 = array('Laravel', 'PHP', 'IOS', 'Androi');?>
@forelse($KhoaHoc2 as $value)
	@break($value=="Androi")
	{{$value}}
@empty
	{{"Không có phần tử nào trong mảng"}}
@endforelse



@endsection