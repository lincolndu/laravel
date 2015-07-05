<!DOCTYPE html>
<html>
    <head>
        <title>local Laravel</title>
    </head>
    <body>

        <h1 style="color:red;font-size:100px;position:center"><a href="" style="">Hello, World !</a></h1>

      	<?php $items=array(); ?>
      	@forelse($items as $item)
      		The item is {{$item}}
      	@empty
      	There is no item
      	@endforelse


    </body>
</html>
