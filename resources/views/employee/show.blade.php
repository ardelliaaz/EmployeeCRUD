<h3>Halaman Show</h3>

@foreach ($employee as $employeeList)

{{ $employeeList->employee_id}}
{{ $employeeList->employee_name}}
{{ $employeeList->employee_address}}
{{ $employeeList->employee_phone}}

@endforeach
<a href="{{ url('employee/create') }}">
<br>
<button>New Create</button>
</a>
<a href="{{ url('/employee') }}">

<button>Back</button>
</a>