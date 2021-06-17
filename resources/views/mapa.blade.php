@extends('layout.site')
@section('titulo', 'Deepspace')
@section('conteudo')

<style>
	body, html{overflow: hidden;}
</style>

		<div class="star belt"></div>
		<div class="star belt2"></div>
		<a href="#sun-modal"><div class="star sun"></div></a>
		<a href="#mercury-modal"><div class="planet mercury"></div></a>
		<a href="#venus-modal"><div class="planet venus"></div></a>
		<a href="#earth-modal"><div class="planet earth"></div></a>
		<a href="#mars-modal"><div class="planet mars"></div></a>
		<a href="#jupiter-modal"><div class="planet jupiter"></div></a>
		<a href="#saturn-modal"><div class="planet saturn"></div></a>
		<a href="#uranus-modal"><div class="planet uranus"></div></a>
		<a href="#neptune-modal"><div class="planet neptune"></div></a>

		@foreach($planetas as $p)
		<div id="{{$p->en}}-modal">
			<div class="{{$p->en}}-modal-content">
				
				<span class="header" align="center">
					<img class="img" src="/deepspace/public/icons/{{$p->en}}.png">
					<br><br>
					<h1>{{ $p ->planeta }}</h1>
				</span>
		
				<span>
		
				  <div class="tab">
					<button class="tablinks active" onclick="planetTabs(event, 'desc1')">TAB1</button>
					<button class="tablinks" onclick="planetTabs(event, 'desc2')">TAB2</button>
					<button class="tablinks" onclick="planetTabs(event, 'desc3')">TAB3</button>
					<button class="tablinks" onclick="planetTabs(event, 'desc4')">TAB4</button>
					<a class="tablinks" href="#"><img class="close" src="/deepspace/public/icons/close.png" style="width: 20px;"></a>
				  </div>
				  
				  <br><br><br><br>
		
				  <div id="desc1" class="tabcontent active" style="display: block;">
					<h2>Tab 1</h2>
					<p><h2>{{ $p ->desc1 }}</h2></p>
				  </div>
		  
				  <div id="desc2" class="tabcontent" style="display: none;">
					<h2>Tab 2</h2>
					<p><h2>{{ $p ->desc2 }}</h2></p>
				  </div>
		  
				  <div id="desc3" class="tabcontent" style="display: none;">
					<h2>Tab 3</h2>
					<p><h2>{{ $p ->desc3 }}</h2></p>
				  </div>
		
				  <div id="desc4" class="tabcontent" style="display: none;">
					<h2>Tab 4</h2>
					<p><h2>{{ $p ->desc4 }}</h2></p>
				  </div>
				</span>
			</div>
		  </div>
		  @endforeach

@endsection