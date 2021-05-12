<?php

declare(strict_types=1);

namespace Mrcl\Tests\Utils\InternetStandards;

use Mrcl\Utils\InternetStandards\MimeHeader;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

use function PHPUnit\Framework\assertContainsOnly;
use function PHPUnit\Framework\assertCount;
use function PHPUnit\Framework\assertSame;

class MimeHeadersTest extends TestCase
{
    private static array $allConstants;

    public static function setUpBeforeClass(): void
    {
        $httpStatus = new ReflectionClass(MimeHeader::class);
        self::$allConstants = $httpStatus->getConstants();
    }

    public function testCount(): void
    {
        $expectedCount = count($this->permanentMimeHeadersProvider());
        assertCount($expectedCount, self::$allConstants);
    }

    public function testType(): void
    {
        assertContainsOnly('string', self::$allConstants);
    }

    /**
     * @depends      testCount
     * @depends      testType
     * @dataProvider permanentMimeHeadersProvider
     */
    public function testMapping(string $constant, string $fieldName): void
    {
        assertSame($fieldName, self::$allConstants[$constant]);
    }

    public function permanentMimeHeadersProvider(): array
    {
        return [
            ['BASE', 'Base'],
            ['CONTENT_ALTERNATIVE', 'Content-Alternative'],
            ['CONTENT_BASE', 'Content-Base'],
            ['CONTENT_DESCRIPTION', 'Content-Description'],
            ['CONTENT_DISPOSITION', 'Content-Disposition'],
            ['CONTENT_DURATION', 'Content-Duration'],
            ['CONTENT_FEATURES', 'Content-features'],
            ['CONTENT_ID', 'Content-ID'],
            ['CONTENT_LANGUAGE', 'Content-Language'],
            ['CONTENT_LOCATION', 'Content-Location'],
            ['CONTENT_MD5', 'Content-MD5'],
            ['CONTENT_TRANSFER_ENCODING', 'Content-Transfer-Encoding'],
            ['CONTENT_TRANSLATION_TYPE', 'Content-Translation-Type'],
            ['CONTENT_TYPE', 'Content-Type'],
            ['MIME_VERSION', 'MIME-Version'],
        ];
    }
}
