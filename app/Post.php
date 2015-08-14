<?php 
namespace App;

use DB;
use Illuminate\Database\Eloquent\Model; 

class Post extends Model{
	protected $table='posts';

	protected function getDateFormat() {
        return 'U';
    }
    public static function posts(){
    	return DB::table('posts')
            // ->LeftJoin('', 'posts.id', '=', 'comments.post_id')
            // ->select('posts.*', 'comments.post_id')
            ->limit(3)
            ->orderBy('id', 'desc')
            // ->latest()
            ->get();
        // return $posts;    
    }
}

?>