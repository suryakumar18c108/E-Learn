<?php 
class table{
    protected $dayarr = array();   
    public function __construct($arr){
        for($i=0;$i<count($arr);$i++){
            array_push($this->dayarr,$arr[$i]);
        }        
    }

    public function get_day(){
        return $this->dayarr;
    }


}
class Assignment{
    protected $title;
    protected $description;
    protected $due;
    public function __construct($a,$b,$c){
        $this->title = $a;
        $this->description = $b;
        $this->due = $c;
    }
    public function get_title(){
        return $this->title;
    }
    public function get_description(){
        return $this->description;
    }
    public function get_due(){
        return $this->due;
    }
}

class Resources{
    protected $sub;
    protected $des;
    protected $link;
    public function __construct($a,$b,$c){
        $this->sub = $a;
        $this->des = $b;
        $this->link = $c;
    }
    public function get_sub(){
        return $this->sub;
    }
    public function get_des(){
        return $this->des;
    }
    public function get_link(){
        return $this->link;
    }

}

class Subdivision {
  protected $event_name;
  protected $timing;
  protected $date;
 
  function __construct($event_name, $date,$timing) {
    $this->event_name = $event_name;
    $this->date= $date;
     $this->timing = $timing;
  
       
  }
  function get_ename() {
    return $this->event_name;
  }
  function get_time() {
    return $this->timing;
  }
  function get_date(){
    return $this->date;
  }

}

?>