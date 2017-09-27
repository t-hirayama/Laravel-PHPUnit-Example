<?php
/**
 * Created by PhpStorm.
 * User: hirayamatakaaki
 * Date: 2017/09/28
 * Time: 0:34
 */
class BookRepositoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var \App\Repositories\BookRepository */
    protected $repository;

    protected function setUp()
    {
        $this->repository = new \App\Repositories\BookRepository();
    }

    public function testReturnResultBasic()
    {
        $this->assertInternalType('array', $this->repository->getReferenceBooks());
    }
}