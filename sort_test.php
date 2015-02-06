<?php
  require_once('sort.php');

  class sortTest extends PHPUnit_Framework_TestCase
  {
    // 昇順ソートができる
    public function test_can_asc_sort()
    {
      $list = array(7, 5, 10, 1, 3, 2, 6, 8);

      $result = selection_sort($list, true);
      $assert = array(1, 2, 3, 5, 6, 7, 8, 10);

      $this->assertEquals($result, $assert);
    }

    // 降順ソートができる
    public function test_can_desc_sort()
    {
      $list = array(7, 5, 10, 1, 3, 2, 6, 8);

      $result = selection_sort($list, false);
      $assert = array(10, 8, 7, 6, 5, 3, 2, 1);

      $this->assertEquals($result, $assert);
    }
  }
?>
