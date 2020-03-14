@extends('layout')

@section('content')

<h1>
Customers
</h1>
<ul>

<li>Elikem</li>
<li>Esther</li>
<li>Lord</li>
<li>Kennneth</li>
<li>Sefakor</li>

</ul>


<hr>


<!-- feeding data into the view using PHP -->
<h1>Using PHP</h1>


<ul>
<?php
foreach ($customers as $customer) {
    echo '<li>' .$customer . '</li>';
}

?>
</ul>

<hr>
<!-- feeding data into the view using blade -->

<h1>Using Blade</h1>


<ul>
@foreach ($customers as $customer) 
     <li> {{ $customer }} </li>

@endforeach
</ul>


@endsection
