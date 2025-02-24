<?php

declare(strict_types=1);

namespace TTN\Tea\Tests\Unit\Domain\Model\Product;

use Nimut\TestingFramework\TestCase\UnitTestCase;
use TTN\Tea\Domain\Model\Product\Tea;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * @covers \TTN\Tea\Domain\Model\Product\Tea
 */
class TeaTest extends UnitTestCase
{
    /**
     * @var Tea
     */
    private $subject = null;

    protected function setUp(): void
    {
        $this->subject = new Tea();
    }

    /**
     * @test
     */
    public function isAbstractEntity(): void
    {
        self::assertInstanceOf(AbstractEntity::class, $this->subject);
    }

    /**
     * @test
     */
    public function getTitleInitiallyReturnsEmptyString(): void
    {
        self::assertSame('', $this->subject->getTitle());
    }

    /**
     * @test
     */
    public function setTitleSetsTitle(): void
    {
        $value = 'Club-Mate';
        $this->subject->setTitle($value);

        self::assertSame($value, $this->subject->getTitle());
    }

    /**
     * @test
     */
    public function getDescriptionInitiallyReturnsEmptyString(): void
    {
        self::assertSame('', $this->subject->getDescription());
    }

    /**
     * @test
     */
    public function setDescriptionSetsDescription(): void
    {
        $value = 'Club-Mate';
        $this->subject->setDescription($value);

        self::assertSame($value, $this->subject->getDescription());
    }

    /**
     * @test
     */
    public function getImageInitiallyReturnsNull(): void
    {
        self::assertNull($this->subject->getImage());
    }

    /**
     * @test
     */
    public function setImageSetsImage(): void
    {
        $model = new FileReference();
        $this->subject->setImage($model);

        self::assertSame($model, $this->subject->getImage());
    }
}
