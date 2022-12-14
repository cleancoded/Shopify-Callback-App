<?php
class Callrequest_model extends Master_model
{
  protected $_tablename = 'callrequest';
  private $_total_count = 0;
  private $_arrCallrequestKey = array();

  function __construct() {
    parent::__construct();
  }

  /**
  * Get the list of Callrequest
  */
  public function getList()
  {
      $where = 'shop = \'' . $this->_shop . '\'';

      return parent::getList( $where, 'id DESC' );
  }

  public function todayList($status = '')
  {
      $where = 'shop = \'' . $this->_shop . '\'';
      $where = $where . ' AND date = \'' . date("Y-m-d") . '\'';
      if($status != '')
        $where = $where . ' AND status = \'' . $status . '\'';

      return parent::getList( $where, 'id DESC' );
  }

  public function thedayList($date)
  {
      $where = 'shop = \'' . $this->_shop . '\'';
      $where = $where . ' AND date = \'' . $date . '\'';
      $where = $where . ' AND status = \'' . 'pending' . '\'';

      return parent::getList( $where, 'id DESC' );
  }

  public function lastdayList($status = '')
  {
      $where = 'shop = \'' . $this->_shop . '\'';
      $where = $where . ' AND date = \'' . date('Y-m-d',strtotime("-1 days")) . '\'';
      if($status != '')
        $where = $where . ' AND status = \'' . $status . '\'';

      return parent::getList( $where, 'id DESC' );
  }

  public function weekList($status = '')
  {
      $nextmonday = date( 'Y-m-d', strtotime( 'monday next week' ) );
      $lastsunday = date( 'Y-m-d', strtotime( 'sunday last week' ) );

      $where = 'shop = \'' . $this->_shop . '\'';
      $where = $where . ' AND date > \'' . $lastsunday . '\'' . ' AND date < \'' . $nextmonday . '\'';
      if($status != '')
        $where = $where . ' AND status = \'' . $status . '\'';

      return parent::getList( $where, 'id DESC' );
  }

  public function monthList($status = '')
  {
      $thisMonth = date( 'Y-m' );

      $where = 'shop = \'' . $this->_shop . '\'';
      $where = $where . ' AND date LIKE \'%' . $thisMonth . '%\'';
      if($status != '')
        $where = $where . ' AND status = \'' . $status . '\'';

      return parent::getList( $where, 'id DESC' );
  }

  public function visitList($status = '')
  {

    $sql = 'SELECT DISTINCT(location) as title, count(location) AS count FROM ' . $this->_tablename;
    $thisMonth = date( 'Y-m' );

    $where = 'shop = \'' . $this->_shop . '\'';
    $where = $where . ' AND date LIKE \'%' . $thisMonth . '%\'';
    if($status != '')
      $where = $where . ' AND status = \'' . $status . '\'';

    $sql = $sql . ' WHERE ' . $where . ' GROUP BY location HAVING count > 0';
    $query = $this->db->query($sql);

    return $query;

  }

  // Get last updated date
  public function getLastUpdateDate()
  {
      $return = '';

      $this->db->select( 'date' );
      $this->db->order_by( 'date DESC' );
      $this->db->limit( 1 );
      $this->db->where( 'shop', $this->_shop );

      $query = $this->db->get( $this->_tablename );

      if( $query->num_rows() > 0 )
      {
          $res = $query->result();

          $return = $res[0]->updated_at;
      }

      return $return;
  }

  // Add Callrequest to database from Shopify
  public function addCallrequest( $Callrequest )
  {
      $time_month = $Callrequest['time_month'];
      $time_day = $Callrequest['time_day'];

      if(strlen($time_month) == 1)
        $time_month = '0' . $time_month;
      if(strlen($time_month) == 1)
        $time_day = '0' . $time_day;

      $newCallrequestInfo = array(
        'name' => $Callrequest['name'],
        'email' => $Callrequest['email'],
        'phone' => $Callrequest['phone'],
        'call_type' => $Callrequest['call_type'],
        'date' => date("Y") . '-' . $time_month . '-' . $time_day,
        'time' => $Callrequest['time_hour'],
        'timezone' => $Callrequest['time_gmt'],
        'note' => $Callrequest['message'],
        'location' => $Callrequest['location'],
        'status' => 'pending',
        'shop' => $Callrequest['shop']
      );

      parent::add( $newCallrequestInfo );
  }

  // Update the Callrequest from Callrequest_id
  public function updateCallrequest($Callrequest_id, $status)
  {
    $this->db->where('id', $Callrequest_id);
    $this->db->update( $this->_tablename, array( 'status' => $status, 'shop' => $this->_shop ) );
    if( $this->db->affected_rows() > 0 )
        return true;
    else
        return false;

  }

  // ********************** //
}
?>
