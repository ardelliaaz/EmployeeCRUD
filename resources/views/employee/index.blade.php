@foreach ($employee as $employeeList)

{{ $employeeList->employee_id}}
{{ $employeeList->employee_name}}
{{ $employeeList->employee_address}}
{{ $employeeList->employee_phone}}


<a href="/employee/{{ $employeeList->employee_id }}"><button>Show</button></a>

<a href="/employee/{{ $employeeList->employee_id }}/edit"><button>Edit</button></a>
</br>
<form action="/employee/{{ $employeeList->employee_id }}" method="post">
            {{ csrf_field()}}
             {{ method_field('DELETE')}}
             <button type="submit">Delete</button>
</form>
@endforeach

<a href="{{ url('employee/create') }}">
New Create
</a>