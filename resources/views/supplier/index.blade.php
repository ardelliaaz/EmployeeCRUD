
@foreach ($supplier as $supplierList)

{{ $supplierList->supplier_id}}
{{ $supplierList->supplier_name}}
{{ $supplierList->supplier_address}}
</br >
@endforeach

<a href="{{ url('supplier/create') }}">
Pencet saya
</a>