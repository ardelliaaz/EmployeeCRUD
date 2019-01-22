@foreach ($customer as $customerList)

{{ $customerList->customer_id}}
{{ $customerList->name}}
{{ $customerList->address}}

@endforeach
<a href="{{ url('customer/create') }}">
<br>
pencet saya
</a>