$(function()  {
  $('td').click(function(e) {
    var t = e.target || e.srcElement;
    var elm_name = t.tagName.toLowerCase();
    var elm_id = t.id.toLowerCase();
    var str = $(event.target).attr('id');
    if((elm_name == 'input') || (str == 'name') || (str == 'id') || (str == 'prabout') || (str == 'cur_name') || (str == 'stud_name') || (str == 'sj')) {return false;}
    var val = $(this).html();
    var code = '<input type="text" name="'+elm_id+'" id="edit" value="'+val+'" />';
    $(this).empty().append(code);
    $('#edit').focus();
    $('#edit').blur(function()  {
      var val = $(this).val();
      var elm = $(this).attr('name');
      var str = "elm="+elm+"&value="+val;
        $.ajax({
         type: 'POST',
         url: 'update.php',
         dataType: 'json',
         data: str,
           success: function(data){
              if (data['error']) {
                alert(data['error']);
              } else {
              }
             },
           error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status); 
                alert(thrownError);
             }
                      
           });

      $(this).parent().empty().html(val);

    });
  });
});