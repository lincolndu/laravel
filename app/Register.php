<?php 
namespace App;

use Illuminate\Database\Eloquent\Model; 

class Register extends Model{
	protected $table='crud';

	protected function getDateFormat() {
        return 'U';
    }
}

?>