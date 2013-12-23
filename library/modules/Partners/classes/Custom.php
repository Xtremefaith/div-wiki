<?php /* THIS IS AN EXAMPLE OF A CLASS WITHIN THE MODULE */
 /*
  * Class: Custom class templet (DO NOT USE)
  * @author Nick Worth
  * @version: 1.0
  */

class Custom{

  public $eid;
  public $obj;
  public $date;
  public $details;

  public function __construct($eid){
    $page_object = get_page( $eid );
    $this->eid = $eid;
    $this->obj = array(get_post($eid));
    $this->date = get_field('start_date',$eid);
    $this->end_date = get_field('end_date',$eid);
    $this->details['content'] = $page_object->post_content;
    $this->details['permalink'] = get_permalink($eid);
    $this->details['start_time'] = get_field('start_time',$eid);
    $this->details['end_time'] = get_field('end_time',$eid);
    $this->details['location_name'] = get_field('location_name',$eid);
    $this->details['location_address'] = get_field('location_address',$eid);
    $this->details['location'] = get_field('location',$eid);
    $this->details['contact_name'] = get_field('contact_name',$eid);
    $this->details['phone'] = get_field('phone',$eid);
    $this->details['email'] = get_field('email',$eid);
  }

  /**
   * FORMAT DATE
   * 
   * @author Nick Worth
   * @since 1.0
   * @param <string> date format (http://php.net/manual/en/function.date.php#refsect1-function.date-parameters)
   * @return <string> $date
   */
  public function get_date($format = 'M j, Y'){
    return $date = date($format,strtotime($this->date));
  }

  /**
   * GET THE DATE
   * 
   * @author Nick Worth
   * @since 1.1
   * @param <string> date format (http://php.net/manual/en/function.date.php#refsect1-function.date-parameters)
   * @return <string> $date
   */
  public function get_the_date($format = 'M j, Y'){
    if($this->date && $this->end_date){
      return date($format,strtotime($this->date)).' - '.date($format,strtotime($this->end_date));
    } else {
      return date($format,strtotime($this->date));
    }
  }

  /**
   * GET THE TIME
   * 
   * @author Nick Worth
   * @since 1.1
   * @param <string> date format (http://php.net/manual/en/function.date.php#refsect1-function.date-parameters)
   * @return <string> $date
   */
  public function get_the_time(){
    if($this->details['start_time'] && $this->details['end_time']){
      return $this->details['start_time']." - ".$this->details['end_time']; 
    } else{
      return $this->details['start_time'];
    }
  }
  
  /**
   * GET PHONE NUMBER
   * 
   * @author Nick Worth
   * @since 1.1
   * @param <string> date format (http://php.net/manual/en/function.date.php#refsect1-function.date-parameters)
   * @return <string> $date
   */
  public function get_phone_number() {
    $phoneNumber = preg_replace('/[^0-9]/','',$this->details['phone']);

    if(strlen($phoneNumber) > 10) {
        $countryCode = substr($phoneNumber, 0, strlen($phoneNumber)-10);
        $areaCode = substr($phoneNumber, -10, 3);
        $nextThree = substr($phoneNumber, -7, 3);
        $lastFour = substr($phoneNumber, -4, 4);

        $phoneNumber = '+'.$countryCode.' ('.$areaCode.') '.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phoneNumber) == 10) {
        $areaCode = substr($phoneNumber, 0, 3);
        $nextThree = substr($phoneNumber, 3, 3);
        $lastFour = substr($phoneNumber, 6, 4);

        $phoneNumber = '('.$areaCode.') '.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phoneNumber) == 7) {
        $nextThree = substr($phoneNumber, 0, 3);
        $lastFour = substr($phoneNumber, 3, 4);

        $phoneNumber = $nextThree.'-'.$lastFour;
    }

    return $phoneNumber;
  }

}
?>