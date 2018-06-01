@extends('welcome')

@section('content')

<!--View Data-->
<table border="0">
  <th colspan="5">Members</th>
  <tr>
  <td>Id</td>
  <td>Name</td>
  <td>Age</td>
  <td>Email</td>
  <td>Address</td>
  </tr>
@foreach($member as $value)
<tr>
  <td>$value->id</td>
  <td>$value->name</td>
  <td>$value->address</td>
  <td>$value->age</td>
  <td>$value->email</td>
</tr>
@endforeach

</table>




@endsection
