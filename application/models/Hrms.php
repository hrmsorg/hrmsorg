<?php
/**
 *
 */
class Hrms extends ci_model
{
  
  function test()
  {
    $query=$this->db->get('pg_hrms');
  }

}


 ?>
