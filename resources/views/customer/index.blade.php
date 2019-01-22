Apakah keluar bro?
<br>
@foreach ($customer as $customerList)

{{ $customerList->customer_id}}
{{ $customerList->name}}
{{ $customerList->address}}
<a href="/customer/{{ $customerList->customer_id }}">Show</a>
</br >

<a href="/customer/{{ $customerList->customer_id }}/edit">Edit</a>
</br >


<form action="/customer/{{ $customerList->customer_id }}" method="post">
            {{ csrf_field()}}
             {{ method_field('DELETE')}}
             <button type="submit">X</button>
</form>
@endforeach

<a href="{{ url('customer/create') }}">
Create
</a>