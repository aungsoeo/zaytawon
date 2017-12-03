<?php

namespace App\Helpers; // Edited By HeinHtetAung for helper function call from view getCategories
use App\Model\Category;
class MyFuncs {

    public static function full_name($first_name,$last_name) {
        return $first_name . ', '. $last_name;   
    }

	public static function getCategory($sub, $c){
	  	$c++;
	  	foreach($sub as $s){
	    	$space="";
	    	for($i=0; $i<$c; $i++){
	      		$space=$space."&nbsp;&nbsp;&nbsp;";
	    	}
	    	echo $space." - ".$s->title."<br>";
	    	if(self::hasCategory($s->Categories)){
	      		self::getCategory($s->Categories, $c);
	    	}
	  	}
	}

	static function hasCategory($sub){
      	if(sizeof($sub)>0){
        	return true;
      	}else{
        	return false;
     	}
    }

    public static function getNewsSideBar(){
    	$subcategory = Category::where('parent_id', 2)->get();
    	echo '
    	<h6>News Category</h6>
        <nav class="sdb_holder">
          <ul>';
            foreach($subcategory as $s){
              echo '<li><a href="'.route('news.index').'?sub='.$s->id.'">'.$s->title.'</a></li>';
            }
           echo '
          </ul>
        </nav>';
    }

}
