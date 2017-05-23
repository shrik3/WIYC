<?php
namespace App\Traits;
use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;
/**
 *
 */
trait RequestTest
{
    use Helpers;

    public function is_not_json($str){
        return is_null(json_decode($str));
    }

    public function is_json($string) {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }

    public function check_item($items,$array){

        foreach($items as $item){
            if (!array_key_exists($item,$array)){
                return false;
            }
        }

        return true;
    }

    public function check_request(Request $request,$check=[]){
        // To use this helper function , make sure Dingo\Api\Routing\Helpers
        // and Illuminate\Http\Request  have been imported where this function
        // is to be used
        $content = $request->getContent();
        if($this->is_not_json($content)){
            $this->response->errorBadRequest('this is not json ');
        }

        $data = json_decode($content,true);
        if(!$this->check_item($check,$data)){
            $this->response->errorBadRequest('incomplete data set ');
        }
        return $data;
    }
}
