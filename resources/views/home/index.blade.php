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
{csrf_field()}  //token generation


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
<!--deleting data-->
<table>
 <th>Delete</th>
 <tr>
  <td>Select Id:</td>
  <td>
    <select name="deleteid" id="deleteid">
     @foreach($members as $value)
    <option value="{{$value->id}}">{{$value->id}}</option>
     @endforeach
    </select>
  </td>
 </tr>

 <tr>
   <td colspan="2"><button type="submit" id="delete"  >Delete</td>
 </tr>




</table>
<!--Ajax section-->
<script type="text/script">
 //for ajax insert
$(#insert).click(function(){
$.ajax({
  type:"post",
  url:"insert",
  data:{
    '_token':$(input[name=_token]).val(),
    'name':$(input[name=name]).val(),
    'age':$(input[name=age]).val(),
    'address':$(input[name=address]).val(),
    'email':$(input[name=email]).val()

  },
  success:function(data){
    window.location.reload()

  }
})
});

//for updating Data
$(#update).click(function(){
$.ajax({
  type:"post",
  url:"update",
  data:{
    '_token':$(input[name=_token]).val(),
    'name':$(input[name=upname]).val(),
    'age':$(input[name=upage]).val(),
    'address':$(input[name=upaddress]).val(),
    'email':$(input[name=upemail]).val(),

  },
  success:function(data){
    window.location.reload()

  }
})
});

//deleting Data
$(#delete).click(function(){
$.ajax({
  type:"post",
  url:"delete",
  data:{
    '_token':$(input[name=_token]).val(),
    'id':$(#deleteid).val(),

  },
  success:function(data){
    window.location.reload()

  }
})
});




</script>






@endsection
