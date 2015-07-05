@extends('app')

@section('content')

        <h1 style="color:red;font-size:100px;position:center"><a href="" style="">Hello, World !</a></h1>

      <?php 

			
			function getTotal($tax){
				$total=0.00;

				$callback=function ($quantity, $product){
					$pricePerItem=constant(__CLASS__."::PRICE_".strtoupper($product));
					$total +=($pricePerItem * $quantity)*($tax +1.0);
				};
				array_walk($this->products, $callback);
				return round($total, 2);
			}

      
      ?>
@endsection