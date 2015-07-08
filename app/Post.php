<?php 
namespace App;

use Illuminate\Database\Eloquent\Model; 

class Post extends Model{
	protected $table='post';

	protected function getDateFormat() {
        return 'U';
    }
}

?>