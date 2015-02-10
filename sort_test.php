<?php
require_once('sort.php');

class sortTest extends PHPUnit_Framework_TestCase
{
  public function test_can_asc_sort()
  {
    $list = array(7, 5, 10, 1, 3, 2, 6, 8);
    $result = selection_sort($list, true);
    $assert = array(1, 2, 3, 5, 6, 7, 8, 10);
    $this->assertEquals($result, $assert);
  }

  public function test_can_desc_sort()
  {
    $list = array(7, 5, 10, 1, 3, 2, 6, 8);
    $result = selection_sort($list, false);
    $assert = array(10, 8, 7, 6, 5, 3, 2, 1);
    $this->assertEquals($result, $assert);
  }

  public function test_swap()
  {
    $array = array(10, 20);
    $this->assertEquals(swap($array, 0, 1), array(20, 10));
  }
}
