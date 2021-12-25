<h1>Customers</h1>

@foreach ($customer as $custom)
    {{ $custom->name }}

@endforeach

<a href="{{ $customer->name }}"></a>