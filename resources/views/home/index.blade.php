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
@foreach($members as $value)
<tr>
  <td>{{$value->id}}</td>
  <td>{{$value->name}}</td>
  <td>{{$value->address}}</td>
  <td>{{$value->age}}</td>
  <td>{{$value->email}}</td>
</tr>
@endforeach

</table>

<!--insert data-->
<table border="0">
  <th colspan="2">Insert</th>
  <tr>
   <td>Name:</td>
   <td><input type="text" name="name"/></td>
  </tr>
  <tr>
   <td>Age:</td>
   <td><input type="text" name="age"/></td>
  </tr>
  <tr>
   <td>Address:</td>
   <td><input type="text" name="address"/></td>
  </tr>
  <tr>
   <td>Email:</td>
   <td><input type="text" name="email"/></td>
  </tr>
  <tr>
    <td colspan="2"><button type="submit" id="insert"  >Add Member</button></td>
  </tr>




</table>


<!--Update data-->
<table>
 <th>Update</th>
 <tr>
  <td>Select Id</td>
  <td>
    <select name="upid" id="upid">
     @foreach($members as $value)
    <option value="{{$value->id}}">{{$value->id}}</option>
     @endforeach
    </select>
  </td>
 </tr>
 <tr>
  <td>Name:</td>
  <td><input type="text" name="upname"/></td>
 </tr>
 <tr>
  <td>Age:</td>
  <td><input type="text" name="upage"/></td>
 </tr>
 <tr>
  <td>Address:</td>
  <td><input type="text" name="upaddress"/></td>
 </tr>
 <tr>
  <td>Email:</td>
  <td><input type="text" name="upemail"/></td>
 </tr>
 <tr>
   <td colspan="2"><button type="submit" id="Update"  >Update</td>
 </tr>




</table>


@endsection
