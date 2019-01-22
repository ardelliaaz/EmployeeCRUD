<h2>Silahkan Edit</h2>

@foreach ($employee as $employeeList)
<form method="POST" action="{{ route('employee.update', $employeeList->employee_id) }}" >
{{ csrf_field()}}
             {{ method_field('PUT')}}

<input type="text" name="txt_id" id="txt_id" value="{{ $employeeList->employee_id}}"/>
<br>
<input type="text" name="txt_name" id="txt_id" value="{{ $employeeList->employee_name }}" />
<br>
<input type="text" name="txt_address" id="txt_id" value="{{ $employeeList->employee_address }}"/>
<br>
<input type="text" name="txt_phone" id="txt_id" value="{{ $employeeList->employee_phone }}"/>
<br>



@endforeach
<button type="submit">Submit</button>
<a href="{{ url('employee') }}">
back
</a>