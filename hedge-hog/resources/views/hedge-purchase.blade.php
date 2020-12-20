@extends('hedge_layout')

@section('title', 'Hedge-Hog| Buy Stock')

@section('content')
	<h3>HELLO WORLD</h3>
	
        <?php echo $thing ?>
	<div class="form-group">
	<form action="submit_order" method="post" class="form">
                @csrf
		<label for="buy-thing">Purchase Amazon Stock</label>
		<input name="stock" type="number" class="form-control" id="stock" placeholder="100" step="any">
                <button type="submit" class="btn btn-primary"> Purchase Stock</button>
	</form>
	</div>
@stop 
