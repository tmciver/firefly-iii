<?php
/**
 * CurrencyControllerTest.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */


/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-12-10 at 05:51:41.
 */
class CurrencyControllerTest extends TestCase
{


    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @covers \FireflyIII\Http\Controllers\CurrencyController::create
     */
    public function testCreate()
    {
        $this->be($this->user());
        $this->call('GET', route('currencies.create'));
        $this->assertResponseStatus(200);
        // has bread crumb
        $this->see('<ol class="breadcrumb">');
    }

    /**
     * @covers \FireflyIII\Http\Controllers\CurrencyController::defaultCurrency
     */
    public function testDefaultCurrency()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \FireflyIII\Http\Controllers\CurrencyController::delete
     */
    public function testDelete()
    {
        $this->be($this->user());
        $this->call('GET', route('currencies.delete', [2]));
        $this->assertResponseStatus(200);
        // has bread crumb
        $this->see('<ol class="breadcrumb">');
    }

    /**
     * @covers \FireflyIII\Http\Controllers\CurrencyController::destroy
     */
    public function testDestroy()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \FireflyIII\Http\Controllers\CurrencyController::edit
     */
    public function testEdit()
    {
        $this->be($this->user());
        $this->call('GET', route('currencies.edit', [2]));
        $this->assertResponseStatus(200);
        // has bread crumb
        $this->see('<ol class="breadcrumb">');
    }

    /**
     * @covers \FireflyIII\Http\Controllers\CurrencyController::index
     */
    public function testIndex()
    {
        $this->be($this->user());
        $this->call('GET', route('currencies.index'));
        $this->assertResponseStatus(200);
        // has bread crumb
        $this->see('<ol class="breadcrumb">');
    }

    /**
     * @covers \FireflyIII\Http\Controllers\CurrencyController::store
     */
    public function testStore()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \FireflyIII\Http\Controllers\CurrencyController::update
     */
    public function testUpdate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
