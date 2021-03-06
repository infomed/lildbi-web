$(document).ready(
		function() {
			
			$("#confirm-type-document").click(
					function() {
						$(this).attr(
								"href",
								"/lildbi/documents/add/"
										+ $("select").attr("value"));
					});

			$('#cleanField').live(
					'click',
					function(e) {
						$(this).parent().parent().parent().next().children()
								.attr('value', "");
						e.preventDefault();
					});
				
			$("#documentCancelButton button[type='button']").click(function() {
				$(location).attr("href", "/lildbi/documents/add");
			});
			
			
			$("#backBreadcrumb").click(function() {
				$("#backAction").click();
				e.preventDefault();
			});
			
			
			//Styles
			$("#documentCancelButton button[type='button']").addClass("btn");
			$("#documentCancelButton").parent().css("padding-bottom", '11px');
			$("#documentPreviewButton button[type='submit']").addClass("btn btn-primary");		
			
			//Submit Formulario
			$('#DocumentAddForm').submit(function(e) {				
				var alertElements = $(this).children().next().children().next().children().find("[class='alert alert-error lil'][style = 'display: block;']");				
				if(alertElements.length){					
					e.preventDefault(); 					
				}	
				else{					
					$('textarea[disabled]').attr('disabled',false);					
				}
			});	
			
			// Validation required fields
			$("#documentPreviewButton button[type='submit']").click(function() {				
					var requiredElements = $("#DocumentAddForm").children().next().children().find("[required]");
					var temp = false;
					var temp2 = true;
					requiredElements.each(function(index){						
						if(($(this).is('input')) && ($(this).attr("value") == "")){	
							//alert($(this).parent().parent().prev().attr("style"));
							if($(this).parent().parent().prev().hasClass("alert alert-error lil") && $(this).parent().parent().prev().css("display") == "block"){
								$(this).parent().parent().prev().hide();							
							}
							$(this).parent().parent().prev().css('display', 'block');
							!temp ? temp=true : null;							
						}
						if(($(this).is('textarea')) && ($(this).attr("value") == "")){
							if($(this).prev().hasClass("alert alert-error lil") && $(this).prev().css("display") == "block"){
								$(this).prev().hide();
							}							
							$(this).prev().css('display', 'block');						
							!temp ? temp=true : null;
						}
						if(($(this).is('select')) && ($(this).find(":selected").text().trim() == "")){
							if($(this).parent().parent().prev().hasClass("alert alert-error lil") && $(this).parent().parent().prev().css("display") == "block"){
								$(this).parent().parent().prev().hide();
							}	
							$(this).parent().parent().prev().css('display', 'block');
							!temp ? temp=true : null;
						}
						
						if(temp && temp2){								
							$('html, body').stop().animate({scrollTop: $(this).offset().top - 150}, 500);
							temp2 = false;
						}
					 });
			});
									
			$("input").keypress(function() {
				if($(this).parent().parent().prev().hasClass("alert alert-error lil")){
					$(this).parent().parent().prev().hide();	//oculto el mensaje de error
				}			
			});
			
			$('textarea').keypress(function() {
				if($(this).prev().hasClass("alert alert-error lil")){
					$(this).prev().hide(); //oculto el mensaje de error
				}
			});
			
			$("select").change(function() {
				if($(this).parent().parent().prev().hasClass("alert alert-error lil")){
					$(this).parent().parent().prev().hide(); //oculto el mensaje de error
				}
			});
			
			
			//Close alert
			$('.alert.alert-error.lil .close').live("click", function(e) {
			    $(this).parent().hide();
			});		
			
			//Complements
			$("#eventNotes").click( function(){
				   var elementRequired = $('#collapseOne').children().find("td[class='mandatory']");
				   
				   if( $(this).is(':checked') ){
					    $('#collapseOne').collapse('show');
					    elementRequired.each(function(index){
					    	if($(this).prev().find("textarea").length > 0){						    	
					    		 $(this).prev().find("textarea").attr("required", true);
						    }
						    else{						    	
						    	$(this).prev().children().find("input").attr("required", true);						    	
						    }					    
					    });
					    
				   } 
				   else{
					    $('#collapseOne').collapse('hide');
					    elementRequired.each(function(index){					    	
					    	if($(this).prev().find("textarea").length > 0){						    	
						    	$(this).prev().find("textarea").attr("required", false);						    	
						    	if($(this).prev().find("textarea").prev().css("display") == "block"){
						    		$(this).prev().find("textarea").prev().hide();
						    	}  
						    	
						    }
						    else{						    	
						    	$(this).prev().children().find("input").attr("required", false);						    	
						    	if($(this).prev().children().find("input").parent().parent().prev().css("display") == "block"){
						    		$(this).prev().children().find("input").parent().parent().prev().hide();
						    	}
						    }					    
					    });
					    
					    $('#collapseOne').children().find("input").attr("value", "");
					    $('#collapseOne').children().find("textarea").attr("value", "");
					    $('#collapseOne').children().find("select").find("option:eq(0)").attr('selected', 'selected');
				   }
			});
			
			$("#proyectNotes").click( function(){
				   if( $(this).is(':checked') ){
					    $('#collapseTwo').collapse('show');
				   } 
				   else{
					   $('#collapseTwo').collapse('hide');
					   $('#collapseTwo').children().find("input").attr("value", "");
					   $('#collapseTwo').children().find("textarea").attr("value", "");
				   }
			});
			
			
		});
