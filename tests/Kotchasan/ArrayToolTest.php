<?php

namespace Kotchasan;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2018-06-16 at 19:07:15.
 */
class ArrayToolTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @var ArrayTool
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
    $this->object = new ArrayTool();
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {

  }

  /**
   * Generated from @assert (array(array('id' => 2, 'value' => 'two'), array('id' => 3, 'value' => 'three'), array('id' => 1, 'value' => 'one'))) [==] array(array('id' => 1, 'value' => 'one'), array('id' => 2, 'value' => 'two'), array('id' => 3, 'value' => 'three')).
   *
   * @covers Kotchasan\ArrayTool::sort
   */
  public function testSort()
  {

    $this->assertEquals(
      array(array('id' => 1, 'value' => 'one'), array('id' => 2, 'value' => 'two'), array('id' => 3, 'value' => 'three')), \Kotchasan\ArrayTool::sort(array(array('id' => 2, 'value' => 'two'), array('id' => 3, 'value' => 'three'), array('id' => 1, 'value' => 'one')))
    );
  }

  /**
   * Generated from @assert (array('one', 'One', 'two'), 'one') [==] array('one', 'One').
   *
   * @covers Kotchasan\ArrayTool::filter
   */
  public function testFilter()
  {

    $this->assertEquals(
      array('one', 'One'), \Kotchasan\ArrayTool::filter(array('one', 'One', 'two'), 'one')
    );
  }

  /**
   * Generated from @assert (array(array('id' => 1, 'name' => 'one'), array('id' => 2, 'name' => 'two'), array('id' => 3, 'name' => 'three')), 'name') [==] array(0 => 'one', 1 => 'two', 2 => 'three').
   *
   * @covers Kotchasan\ArrayTool::columns
   */
  public function testColumns()
  {

    $this->assertEquals(
      array(0 => 'one', 1 => 'two', 2 => 'three'), \Kotchasan\ArrayTool::columns(array(array('id' => 1, 'name' => 'one'), array('id' => 2, 'name' => 'two'), array('id' => 3, 'name' => 'three')), 'name')
    );
  }

  /**
   * Generated from @assert (array(array('id' => 1, 'name' => 'one'), array('id' => 2, 'name' => 'two'), array('id' => 3, 'name' => 'three')), 'name', 'id') [==] array(1 => 'one', 2 => 'two', 3 => 'three').
   *
   * @covers Kotchasan\ArrayTool::columns
   */
  public function testColumns2()
  {

    $this->assertEquals(
      array(1 => 'one', 2 => 'two', 3 => 'three'), \Kotchasan\ArrayTool::columns(array(array('id' => 1, 'name' => 'one'), array('id' => 2, 'name' => 'two'), array('id' => 3, 'name' => 'three')), 'name', 'id')
    );
  }

  /**
   * Generated from @assert (array(array('id' => 1, 'name' => 'one'), array('id' => 2, 'name' => 'two'), array('id' => 3, 'name' => 'one')), 'name', 'one') [==] array(0 => array('id' => 1, 'name' => 'one'), 2 => array('id' => 3, 'name' => 'one')).
   *
   * @covers Kotchasan\ArrayTool::search
   */
  public function testSearch()
  {

    $this->assertEquals(
      array(0 => array('id' => 1, 'name' => 'one'), 2 => array('id' => 3, 'name' => 'one')), \Kotchasan\ArrayTool::search(array(array('id' => 1, 'name' => 'one'), array('id' => 2, 'name' => 'two'), array('id' => 3, 'name' => 'one')), 'name', 'one')
    );
  }

  /**
   * Generated from @assert (array(array('id' => 1, 'name' => 'one'), array('id' => 2, 'name' => 'two'), array('id' => 3, 'name' => 'one')), 'id', 'one') [==] array().
   *
   * @covers Kotchasan\ArrayTool::search
   */
  public function testSearch2()
  {

    $this->assertEquals(
      array(), \Kotchasan\ArrayTool::search(array(array('id' => 1, 'name' => 'one'), array('id' => 2, 'name' => 'two'), array('id' => 3, 'name' => 'one')), 'id', 'one')
    );
  }

  /**
   * Generated from @assert ('|', array('a' => 'A', 'b' => array('b', 'B'), 'c' => array('c' => array('c', 'C')))) [==] "A|b|B|c|C".
   *
   * @covers Kotchasan\ArrayTool::toString
   */
  public function testToString()
  {

    $this->assertEquals(
      "A|b|B|c|C", \Kotchasan\ArrayTool::toString('|', array('a' => 'A', 'b' => array('b', 'B'), 'c' => array('c' => array('c', 'C'))))
    );
  }

  /**
   * Generated from @assert (array(0, 1, 2, 3, 4, 5), '0,2') [==] array(1 => 1, 3 => 3, 4 => 4, 5 => 5).
   *
   * @covers Kotchasan\ArrayTool::delete
   */
  public function testDelete()
  {

    $this->assertEquals(
      array(1 => 1, 3 => 3, 4 => 4, 5 => 5), \Kotchasan\ArrayTool::delete(array(0, 1, 2, 3, 4, 5), '0,2')
    );
  }

  /**
   * Generated from @assert (array(1 => 1, 2 => 2, 3 => 'three'), array(1 => 'one', 2 => 'two')) [==] array(1 => 'one', 2 => 'two', 3 => 'three').
   *
   * @covers Kotchasan\ArrayTool::replace
   */
  public function testReplace()
  {

    $this->assertEquals(
      array(1 => 'one', 2 => 'two', 3 => 'three'), \Kotchasan\ArrayTool::replace(array(1 => 1, 2 => 2, 3 => 'three'), array(1 => 'one', 2 => 'two'))
    );
  }

  /**
   * Generated from @assert ('') [==] array().
   *
   * @covers Kotchasan\ArrayTool::unserialize
   */
  public function testUnserialize()
  {

    $this->assertEquals(
      array(), \Kotchasan\ArrayTool::unserialize('')
    );
  }

  /**
   * Generated from @assert (serialize(array(1, 2, 3))) [==] array(1, 2, 3).
   *
   * @covers Kotchasan\ArrayTool::unserialize
   */
  public function testUnserialize2()
  {

    $this->assertEquals(
      array(1, 2, 3), \Kotchasan\ArrayTool::unserialize(serialize(array(1, 2, 3)))
    );
  }

  /**
   * Generated from @assert (serialize(array(1 => 'One', 2 => 'Two', 3 => 'Three')), array(3 => 3, 4 => 'Four'), true) [==] array(1 => 'One', 2 => 'Two', 3 => 'Three', 4 => 'Four').
   *
   * @covers Kotchasan\ArrayTool::unserialize
   */
  public function testUnserialize3()
  {

    $this->assertEquals(
      array(1 => 'One', 2 => 'Two', 3 => 'Three', 4 => 'Four'), \Kotchasan\ArrayTool::unserialize(serialize(array(1 => 'One', 2 => 'Two', 3 => 'Three')), array(3 => 3, 4 => 'Four'), true)
    );
  }

  /**
   * Generated from @assert (serialize(array(1 => 'One', 2 => 'Two', 3 => 'Three')), array(3 => 3, 4 => 'Four'), false) [==] array(1 => 'One', 2 => 'Two', 3 => 3, 4 => 'Four').
   *
   * @covers Kotchasan\ArrayTool::unserialize
   */
  public function testUnserialize4()
  {

    $this->assertEquals(
      array(1 => 'One', 2 => 'Two', 3 => 3, 4 => 'Four'), \Kotchasan\ArrayTool::unserialize(serialize(array(1 => 'One', 2 => 'Two', 3 => 'Three')), array(3 => 3, 4 => 'Four'), false)
    );
  }

  /**
   * Generated from @assert (array('one' => 1, 'three' => 3), 'three', 'two', 2) [==] array('one' => 1, 'two' => 2, 'three' => 3).
   *
   * @covers Kotchasan\ArrayTool::insertBefore
   */
  public function testInsertBefore()
  {

    $this->assertEquals(
      array('one' => 1, 'two' => 2, 'three' => 3), \Kotchasan\ArrayTool::insertBefore(array('one' => 1, 'three' => 3), 'three', 'two', 2)
    );
  }

  /**
   * Generated from @assert (array(1 => 'one', 3 => 'three'), 3, 2, 'two') [==] array(1 => 'one', 2 => 'two', 3 => 'three').
   *
   * @covers Kotchasan\ArrayTool::insertBefore
   */
  public function testInsertBefore2()
  {

    $this->assertEquals(
      array(1 => 'one', 2 => 'two', 3 => 'three'), \Kotchasan\ArrayTool::insertBefore(array(1 => 'one', 3 => 'three'), 3, 2, 'two')
    );
  }

  /**
   * Generated from @assert (array(1 => 'one', 3 => 'three'), 2, 2, 'two') [==] array(1 => 'one', 3 => 'three', 2 => 'two').
   *
   * @covers Kotchasan\ArrayTool::insertBefore
   */
  public function testInsertBefore3()
  {

    $this->assertEquals(
      array(1 => 'one', 3 => 'three', 2 => 'two'), \Kotchasan\ArrayTool::insertBefore(array(1 => 'one', 3 => 'three'), 2, 2, 'two')
    );
  }

  /**
   * Generated from @assert (array('one' => 1, 'two' => 2), 'two', 'three', 3) [==] array('one' => 1, 'two' => 2, 'three' => 3).
   *
   * @covers Kotchasan\ArrayTool::insertAfter
   */
  public function testInsertAfter()
  {

    $this->assertEquals(
      array('one' => 1, 'two' => 2, 'three' => 3), \Kotchasan\ArrayTool::insertAfter(array('one' => 1, 'two' => 2), 'two', 'three', 3)
    );
  }

  /**
   * Generated from @assert (array(1 => 'one', 2 => 'two'), 2, 3, 'three') [==] array(1 => 'one', 2 => 'two', 3 => 'three').
   *
   * @covers Kotchasan\ArrayTool::insertAfter
   */
  public function testInsertAfter2()
  {

    $this->assertEquals(
      array(1 => 'one', 2 => 'two', 3 => 'three'), \Kotchasan\ArrayTool::insertAfter(array(1 => 'one', 2 => 'two'), 2, 3, 'three')
    );
  }

  /**
   * Generated from @assert (array(1 => 'one', 2 => 'two'), 3, 3, 'three') [==] array(1 => 'one', 2 => 'two', 3 => 'three').
   *
   * @covers Kotchasan\ArrayTool::insertAfter
   */
  public function testInsertAfter3()
  {

    $this->assertEquals(
      array(1 => 'one', 2 => 'two', 3 => 'three'), \Kotchasan\ArrayTool::insertAfter(array(1 => 'one', 2 => 'two'), 3, 3, 'three')
    );
  }

  /**
   * Generated from @assert (array('one' => 1, 'two' => 2, 'three' => 3), 'two') [==] array('three' => 3).
   *
   * @covers Kotchasan\ArrayTool::shift
   */
  public function testShift()
  {

    $this->assertEquals(
      array('three' => 3), \Kotchasan\ArrayTool::shift(array('one' => 1, 'two' => 2, 'three' => 3), 'two')
    );
  }

  /**
   * Generated from @assert (array('one' => 1, 'two' => 2, 'three' => 3), 1) [==] array('one' => 1, 'two' => 2, 'three' => 3).
   *
   * @covers Kotchasan\ArrayTool::shift
   */
  public function testShift2()
  {

    $this->assertEquals(
      array('one' => 1, 'two' => 2, 'three' => 3), \Kotchasan\ArrayTool::shift(array('one' => 1, 'two' => 2, 'three' => 3), 1)
    );
  }
}