$(document).ready(function(){
  $('#form-checkout').validate({
    ignore: [],
    rules: {                                            
      name_ship: {
        required: true
      },
      tujuan_ship: {
        required: true
      },
      province_ship: {
        required: true
      },
      city_ship: {
        required: true
      },
      region_ship: {
        required: true
      },
      postcode_ship: {
        required: true
      }
    },
    submitHandler: function(form) {
      var target = $(form).attr('action');
      //$('#form-checkout .msg-status').text('');
      $.ajax({
        url : target,
        type : 'POST',
        dataType : 'json',
        data : $(form).serialize(),
        success : function(response){
          if(response.status == 'ok'){
            //$('#form-checkout .msg-status').text('Delete Success...');
            window.location.href = response.redirect;
          }
            //$('#form-checkout .msg-status').text('Delete Failed');
        },
        error : function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });

  $('#form-product-detail').validate({
    ignore: [],
    rules: {},
    submitHandler: function(form) {
      var target = $(form).attr('action');
      $.ajax({
        url : target,
        type : 'POST',
        dataType : 'json',
        data : $(form).serialize(),
        success : function(response){
          if(response.status == 'ok'){
            window.location.href = response.redirect;
          }
        },
        error : function(jqXHR, textStatus, errorThrown) {
          alert(textStatus, errorThrown);
        }
      });
    }
  });

})