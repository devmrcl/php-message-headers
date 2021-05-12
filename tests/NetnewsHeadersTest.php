<?php

declare(strict_types=1);

namespace Mrcl\Tests\Utils\InternetStandards;

use Mrcl\Utils\InternetStandards\NetnewsHeader;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

use function PHPUnit\Framework\assertContainsOnly;
use function PHPUnit\Framework\assertCount;
use function PHPUnit\Framework\assertSame;

class NetnewsHeadersTest extends TestCase
{
    private static array $allConstants;

    public static function setUpBeforeClass(): void
    {
        $httpStatus = new ReflectionClass(NetnewsHeader::class);
        self::$allConstants = $httpStatus->getConstants();
    }

    public function testCount(): void
    {
        $permanentCount = count($this->permanentNetnewsHeadersProvider());
        $provisionalCount = count($this->provisionalNetnewsHeadersProvider());
        $totalCount = $permanentCount + $provisionalCount;
        assertCount($totalCount, self::$allConstants);
    }

    public function testType(): void
    {
        assertContainsOnly('string', self::$allConstants);
    }

    /**
     * @depends      testCount
     * @depends      testType
     * @dataProvider permanentNetnewsHeadersProvider
     * @dataProvider provisionalNetnewsHeadersProvider
     */
    public function testMapping(string $constant, string $fieldName): void
    {
        assertSame($fieldName, self::$allConstants[$constant]);
    }

    public function permanentNetnewsHeadersProvider(): array
    {
        return [
            ['ALSO_CONTROL', 'Also-Control'],
            ['APPROVED', 'Approved'],
            ['ARCHIVE', 'Archive'],
            ['ARCHIVED_AT', 'Archived-At'],
            ['ARTICLE_NAMES', 'Article-Names'],
            ['ARTICLE_UPDATES', 'Article-Updates'],
            ['CANCEL_KEY', 'Cancel-Key'],
            ['CANCEL_LOCK', 'Cancel-Lock'],
            ['COMMENTS', 'Comments'],
            ['CONTROL', 'Control'],
            ['DATE', 'Date'],
            ['DATE_RECEIVED', 'Date-Received'],
            ['DISTRIBUTION', 'Distribution'],
            ['EXPIRES', 'Expires'],
            ['FOLLOWUP_TO', 'Followup-To'],
            ['FROM', 'From'],
            ['INJECTION_DATE', 'Injection-Date'],
            ['INJECTION_INFO', 'Injection-Info'],
            ['KEYWORDS', 'Keywords'],
            ['LINES', 'Lines'],
            ['MESSAGE_ID', 'Message-ID'],
            ['NEWSGROUPS', 'Newsgroups'],
            ['NNTP_POSTING_DATE', 'NNTP-Posting-Date'],
            ['NNTP_POSTING_HOST', 'NNTP-Posting-Host'],
            ['ORGANIZATION', 'Organization'],
            ['ORIGINAL_SENDER', 'Original-Sender'],
            ['PATH', 'Path'],
            ['POSTING_VERSION', 'Posting-Version'],
            ['REFERENCES', 'References'],
            ['RELAY_VERSION', 'Relay-Version'],
            ['REPLY_TO', 'Reply-To'],
            ['SEE_ALSO', 'See-Also'],
            ['SENDER', 'Sender'],
            ['SUBJECT', 'Subject'],
            ['SUMMARY', 'Summary'],
            ['SUPERSEDES', 'Supersedes'],
            ['USER_AGENT', 'User-Agent'],
            ['XREF', 'Xref'],
        ];
    }

    public function provisionalNetnewsHeadersProvider(): array
    {
        return [
            ['JABBER_ID', 'Jabber-ID'],
            ['X_ARCHIVED_AT', 'X-Archived-At'],
            ['X_PGP_SIG', 'X-PGP-Sig'],
        ];
    }
}
