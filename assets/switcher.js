		$(document).ready(function() { 
		
			var Counter = 1; 
			var NumberMockups = $('.section').size();
			$('.total-mockups').html(NumberMockups);
			
			$('.section:first').addClass('active');
			
			function swap(Counter) { 
				
					$('.section').removeClass('active');
					$('#mockup-' + Counter).addClass('active');
					$('.mockup-on').html(Counter);	
				
			}
			
			$('#next').click(function( e ) { e.preventDefault();
				
				if (Counter != NumberMockups) { 
					
					$('#prev').removeClass('disabled');
					Counter++;
					
					swap(Counter);
					
					if (Counter == NumberMockups) { $('#next').addClass('disabled');	}
					
				}
				
			});
			
			$('#prev').click(function( e ) { e.preventDefault();				
				if (Counter != 1) {
					
					$('#next').removeClass('disabled');
					Counter--;
			
					swap(Counter);
					
					if (Counter == 1) { $('#prev').addClass('disabled'); }
					
				}
				
				
			});
			
$('#home').click(function( e ) { e.preventDefault();			
				Counter = 1; 
				
				swap(Counter);
					
				$('#prev').addClass('disabled');
				$('#next').removeClass('disabled');
					
				
			});
			
		});
