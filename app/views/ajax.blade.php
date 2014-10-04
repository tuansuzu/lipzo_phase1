<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{{HTML::script('js/jquery.js')}}
	
</head>
<body>

	<div class="container">
		<a href="#" id="get">Read more</a>
		<hr>
		@if($ok)
		{{Form::open(array('url'=>''))}}
			
			
			<button type="submit">Submit</button>
			
		{{Form::close()}}
		@endif
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			var take = 1;
			var skip = 1;
			var offset = 1;
			$('#get').click(function(e){
				e.preventDefault();

				$.get('ajax',function(data){
					$('#item').append('<h1> ' + data.title + '</h1>');
				});
			});

			$('form').submit(function(e){
				e.preventDefault();

				
				//var name = $(this).find('input[name=name]').val();
				//post ajax
				$.post('ajax',{take:take,skip:skip,offset:offset},function(data){
					
					$.each(data, function(i, item) {
						console.log('remain: '+data[i].remain);
						
						$('#item').append('<h1> ' + data[i].title + '</h1>');
						if(data[i].ok == false){
							
							$('form').hide();
						}
						
					})					

					offset +=1;
					
				});
			});
		});
	</script>
	<h2>total: {{$count}}</h2>
	<div id="item">
		@foreach($faces as $face)
		<h1>{{$face->title}}</h1>
		@endforeach
	</div>

</body>
</html>