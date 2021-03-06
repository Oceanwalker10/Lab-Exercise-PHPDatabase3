<?php
/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-03-23 at 13:38:24.
 */
use PHPunit\Framework\TestCase;
include_once("Artist.php");
class ArtistTest extends TestCase
{
    /**
     * @var Artist
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Artist("Pablo", "Picasso", "Malaga", "Oct 25, 1881",
                "Apl 8, 1973");
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Artist::serialize
     * @todo   Implement testSerialize().
     */
    public function testSerialize()
    {
        $serializedArtist = serialize($this->object);
        $deserializedObject = unserialize($serializedArtist);
        // assert that all the fields are the same.
        $this->assertEquals($serializedArtist, serialize($deserializedObject));
    }

    /**
     * $depends testSerialize
     * @covers Artist::unserialize
     * @todo   Implement testUnserialize().
     */
    public function testUnserialize()
    {
        $serializedArtist = serialize($this->object);
        $deserializedObject = unserialize($serializedArtist);
        //assert that all the fields are the same.
        $this->assertEquals($serializedArtist,serialize($deserializedObject));
    }

    /**
     * @covers Artist::printNice
     * @todo   Implement testPrintNice().
     */
    public function testPrintNice()
    {
        $this->assertEquals(1,1);
    }

    /**
     * @covers Artist::__toString
     * @todo   Implement test__toString().
     */
    public function test__toString()
    {
        $this->assertEquals(1,1);
    }

    /**
     * @covers Artist::earliestDate
     * @todo   Implement testEarliestDate().
     */
    public function testEarliestDate()
    {
        $this->assertEquals($this->object->earliestDate(), "Oct 25, 1881");
    }

    /**
     * @covers Artist::getFirstName
     * @todo   Implement testGetFirstName().
     */
    public function testGetFirstName()
    {
        $this->assertEquals($this->object->getFirstName(), "Pablo");
    }

    /**
     * @covers Artist::getLastName
     * @todo   Implement testGetLastName().
     */
    public function testGetLastName()
    {
        $this->assertEquals($this->object->getLastName(), "Picasso");
    }

    /**
     * @covers Artist::getBirthCity
     * @todo   Implement testGetBirthCity().
     */
    public function testGetBirthCity()
    {
        $this->assertEquals($this->object->getbirthCity(), "Malaga");
    }

    /**
     * @covers Artist::getBirthDate
     * @todo   Implement testGetBirthDate().
     */
    public function testGetBirthDate()
    {
        $this->assertEquals($this->object->getBirthDate(), "Oct 25, 1881");
    }

    /**
     * @covers Artist::getDeathDate
     * @todo   Implement testGetDeathDate().
     */
    public function testGetDeathDate()
    {
        $this->assertEquals($this->object->getDeathDate(), "Apl 8, 1973");
    }

    /**
     * @covers Artist::setLastName
     * @todo   Implement testSetLastName().
     */
    public function testSetLastName()
    {
        $this->object->setLastName("Testy");
        $this->assertEquals($this->object->getLastName(), "Testy");
    }

    /**
     * @covers Artist::setFirstName
     * @todo   Implement testSetFirstName().
     */
    public function testSetFirstName()
    {
        $this->object->setFirstName("Testy");
        $this->assertEquals($this->object->getFirstName(), "Testy");
    }

    /**
     * @covers Artist::setDeathDate
     * @todo   Implement testSetDeathDate().
     */
    public function testSetDeathDate()
    {
        $this->object->setDeathDate("Jan 1, 1900");
        $this->assertEquals($this->object->getDeathDate(), "Jan 1, 1900");
    }

    /**
     * @covers Artist::addWork
     * @todo   Implement testAddWork().
     */
    public function testAddWork()
    {
        $this->object->addWork(new Painting("1920", $this->object, "Picas", "Oil on canvas"));
        $this->assertEquals($this->object->numArtWorks(), 1);
    }

    /**
     * @covers Artist::numArtworks
     * @todo   Implement testNumArtworks().
     */
    public function testNumArtworks()
    {
        $this->object->addWork(new Painting("1920", $this->object, "Picas", "Oil on canvas"));
        $this->assertEquals($this->object->numArtWorks(), 1);
    }
}
