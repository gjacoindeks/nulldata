$(document).ready(function(){
    var maxField = 10; 
    var addButton = $('.add_button'); 
    var wrapper = $('.field_wrapper'); 
    var fieldHTML = '<div><input type="text" name="domicilio[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="http://localhost:8000/images/remove-icon.png"/></a></div>'; //New input field html 
    var x = 1; 
    $(addButton).click(function(){ 
        if(x < maxField){ 
            x++; 
            $(wrapper).append(fieldHTML); 
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ 
        e.preventDefault();
        $(this).parent('div').remove(); l
        x--; 
    });
});



 


      $(document).ready(function() {

    $('#datetimepicker').datetimepicker({
        format: 'yyyy/MM/dd',
        pickTime: false,
        pick12HourFormat: false,
        pickSeconds: false, 
        pickDate: true 
      });
});