$(document).on('change keyup', '.required2', function(e){
	   let Disabled = true;
		$(".required2").each(function() {
		  let value = this.value
		  if ((value)&&(value.trim() !=''))
			  {
				Disabled = false
			  }else{
				Disabled = true
				return false
			  }
		});
	   
		if(Disabled){
			$('#apply2').prop("disabled", true);		
		}else{
			$('#apply2').prop("disabled", false);		
		}
	})

	$(document).ready(function(){
		$("#ChangepassBtn").click(function(e){
			e.preventDefault();
			$("#createPasword").hide();
			$("#Success").show();

		});
	});

