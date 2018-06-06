 /*for ajax insert*/
 $('#insert').click(function(){
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
    });
    });
    
    //for updating Data
    $('#update').click(function(){
    $.ajax({
      type:"post",
      url:"update",
      data:{
        '_token':$(input[name=_token]).val(),
        'id':$('#upid').val(),
        'name':$(input[name=upname]).val(),
        'age':$(input[name=upage]).val(),
        'address':$(input[name=upaddress]).val(),
        'email':$(input[name=upemail]).val(),
    
      },
      success:function(data){
        window.location.reload()
    
      }
    });
    });
    
    //deleting Data
    $('#delete').click(function(){
    $.ajax({
      type:"post",
      url:"delete",
      data:{
        '_token':$(input[name=_token]).val(),
        'id':$('#deleteid').val(),
    
      },
      success:function(data){
        window.location.reload()
    
      }
    });
    });
    
    