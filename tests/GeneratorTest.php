<?php

/**
 * Class:  Generator Test.
 *
 * @author: Minh Duc Nguyen <minh.nguyen@ands.org.au>
 */
use MinhD\Generator as Generator;

class GeneratorTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test default generation
     * 2 words with dashed
     */
    public function testDefaultGenerate()
    {
        for ($i = 0; $i < 100; ++$i) {
            $result = Generator::generate();
            $this->assertRegExp(
                '/[a-z]+-[a-z]+/',
                $result
            );
            $resultSet = explode('-', $result);
            $this->assertEquals(2, sizeof($resultSet));
        }
    }

    /**
     * Test custom generation
     * 4 words with underscore
     */
    public function testGenerateFourWords()
    {
        for ($i = 0; $i < 100; ++$i) {
            $result = Generator::generate(' ', $words = 4);
            $this->assertRegExp(
                '/[a-z]+ [a-z]+ [a-z]+ [a-z]+/',
                $result
            );
            $resultSet = explode(' ', $result);
            $this->assertEquals(4, sizeof($resultSet));
        }
    }

    /**
     * Test generation with number
     * 2 words with a number
     */
    public function testGenerateNumber()
    {
        for ($i = 0; $i < 100; ++$i) {
            $result = Generator::generate('-', $words = 2, $number = 4);
            $this->assertRegExp(
                '/([a-z]+)-([a-z]+)-(\d{4})/',
                $result
            );
            $resultSet = explode('-', $result);
            $this->assertEquals(3, sizeof($resultSet));
        }
    }

    /**
     * Test dashed()
     */
    public function testGenerateDashed()
    {
        for ($i = 0; $i < 100; ++$i) {
            $result = Generator::dashed();
            $this->assertRegExp(
                '/[a-z]+-[a-z]+/',
                $result
            );
            $resultSet = explode('-', $result);
            $this->assertEquals(2, sizeof($resultSet));
        }
    }

    /**
     * Test spaced()
     */
    public function testGenerateSpaced()
    {
        for ($i = 0; $i < 100; ++$i) {
            $result = Generator::spaced();
            $this->assertRegExp(
                '/[a-z]+ [a-z]+/',
                $result
            );
            $resultSet = explode(' ', $result);
            $this->assertEquals(2, sizeof($resultSet));
        }
    }

    /**
     * Test snake()
     */
    public function testGenerateSnake()
    {
        for ($i = 0; $i < 100; ++$i) {
            $result = Generator::snake();
            $this->assertRegExp(
                '/[a-z]+_[a-z]+/',
                $result
            );
            $resultSet = explode('_', $result);
            $this->assertEquals(2, sizeof($resultSet));
        }
    }

    public function __construct()
    {
        parent::__construct();
        require_once dirname(__FILE__).'/../vendor/autoload.php';
    }
}
