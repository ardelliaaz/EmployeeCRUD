Ini Halaman Show
<br>
@foreach ($customer as $customerList)
<form method="POST" action="{{ route('customer.update', $customerList->customer_id) }}" >
{{ csrf_field()}}
             {{ method_field('PUT')}}

<input type="text" name="txt_id" id="txt_id" value="{{ $customerList->customer_id}}"/>
<br>
<input type="text" name="txt_name" id="txt_id" value="{{ $customerList->name }}" />
<br>
<input type="text" name="txt_address" id="txt_id" value="{{ $customerList->address }}"/>
<br>



@endforeach
<button type="submit">Submit</button>
<a href="{{ url('customer') }}">
back
</a>