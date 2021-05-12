<?php

declare(strict_types=1);

namespace Mrcl\Tests\Utils\InternetStandards;

use Mrcl\Utils\InternetStandards\MailHeader;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

use function PHPUnit\Framework\assertContainsOnly;
use function PHPUnit\Framework\assertCount;
use function PHPUnit\Framework\assertSame;

class MailHeadersTest extends TestCase
{
    private static array $allConstants;

    public static function setUpBeforeClass(): void
    {
        $httpStatus = new ReflectionClass(MailHeader::class);
        self::$allConstants = $httpStatus->getConstants();
    }

    public function testCount(): void
    {
        $permanentCount = count($this->permanentMailHeadersProvider());
        $provisionalCount = count($this->provisionalMailHeadersProvider());
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
     * @dataProvider permanentMailHeadersProvider
     * @dataProvider provisionalMailHeadersProvider
     */
    public function testMapping(string $constant, string $fieldName): void
    {
        assertSame($fieldName, self::$allConstants[$constant]);
    }

    public function permanentMailHeadersProvider(): array
    {
        return [
            ['ACCEPT_LANGUAGE', 'Accept-Language'],
            ['ALTERNATE_RECIPIENT', 'Alternate-Recipient'],
            ['ARC_AUTHENTICATION_RESULTS', 'ARC-Authentication-Results'],
            ['ARCHIVED_AT', 'Archived-At'],
            ['ARC_MESSAGE_SIGNATURE', 'ARC-Message-Signature'],
            ['ARC_SEAL', 'ARC-Seal'],
            ['AUTHENTICATION_RESULTS', 'Authentication-Results'],
            ['AUTOFORWARDED', 'Autoforwarded'],
            ['AUTOSUBMITTED', 'Autosubmitted'],
            ['AUTO_SUBMITTED', 'Auto-Submitted'],
            ['BCC', 'Bcc'],
            ['CC', 'Cc'],
            ['COMMENTS', 'Comments'],
            ['CONTENT_IDENTIFIER', 'Content-Identifier'],
            ['CONTENT_RETURN', 'Content-Return'],
            ['CONVERSION', 'Conversion'],
            ['CONVERSION_WITH_LOSS', 'Conversion-With-Loss'],
            ['DATE', 'Date'],
            ['DEFERRED_DELIVERY', 'Deferred-Delivery'],
            ['DELIVERY_DATE', 'Delivery-Date'],
            ['DISCARDED_X400_IPMS_EXTENSIONS', 'Discarded-X400-IPMS-Extensions'],
            ['DISCARDED_X400_MTS_EXTENSIONS', 'Discarded-X400-MTS-Extensions'],
            ['DISCLOSE_RECIPIENTS', 'Disclose-Recipients'],
            ['DISPOSITION_NOTIFICATION_OPTIONS', 'Disposition-Notification-Options'],
            ['DISPOSITION_NOTIFICATION_TO', 'Disposition-Notification-To'],
            ['DKIM_SIGNATURE', 'DKIM-Signature'],
            ['DL_EXPANSION_HISTORY', 'DL-Expansion-History'],
            ['DOWNGRADED_BCC', 'Downgraded-Bcc'],
            ['DOWNGRADED_CC', 'Downgraded-Cc'],
            ['DOWNGRADED_DISPOSITION_NOTIFICATION_TO', 'Downgraded-Disposition-Notification-To'],
            ['DOWNGRADED_FINAL_RECIPIENT', 'Downgraded-Final-Recipient'],
            ['DOWNGRADED_FROM', 'Downgraded-From'],
            ['DOWNGRADED_IN_REPLY_TO', 'Downgraded-In-Reply-To'],
            ['DOWNGRADED_MAIL_FROM', 'Downgraded-Mail-From'],
            ['DOWNGRADED_MESSAGE_ID', 'Downgraded-Message-Id'],
            ['DOWNGRADED_ORIGINAL_RECIPIENT', 'Downgraded-Original-Recipient'],
            ['DOWNGRADED_RCPT_TO', 'Downgraded-Rcpt-To'],
            ['DOWNGRADED_REFERENCES', 'Downgraded-References'],
            ['DOWNGRADED_REPLY_TO', 'Downgraded-Reply-To'],
            ['DOWNGRADED_RESENT_BCC', 'Downgraded-Resent-Bcc'],
            ['DOWNGRADED_RESENT_CC', 'Downgraded-Resent-Cc'],
            ['DOWNGRADED_RESENT_FROM', 'Downgraded-Resent-From'],
            ['DOWNGRADED_RESENT_REPLY_TO', 'Downgraded-Resent-Reply-To'],
            ['DOWNGRADED_RESENT_SENDER', 'Downgraded-Resent-Sender'],
            ['DOWNGRADED_RESENT_TO', 'Downgraded-Resent-To'],
            ['DOWNGRADED_RETURN_PATH', 'Downgraded-Return-Path'],
            ['DOWNGRADED_SENDER', 'Downgraded-Sender'],
            ['DOWNGRADED_TO', 'Downgraded-To'],
            ['ENCODING', 'Encoding'],
            ['ENCRYPTED', 'Encrypted'],
            ['EXPIRES', 'Expires'],
            ['EXPIRY_DATE', 'Expiry-Date'],
            ['FROM', 'From'],
            ['GENERATE_DELIVERY_REPORT', 'Generate-Delivery-Report'],
            ['IMPORTANCE', 'Importance'],
            ['INCOMPLETE_COPY', 'Incomplete-Copy'],
            ['IN_REPLY_TO', 'In-Reply-To'],
            ['KEYWORDS', 'Keywords'],
            ['LANGUAGE', 'Language'],
            ['LATEST_DELIVERY_TIME', 'Latest-Delivery-Time'],
            ['LIST_ARCHIVE', 'List-Archive'],
            ['LIST_HELP', 'List-Help'],
            ['LIST_ID', 'List-ID'],
            ['LIST_OWNER', 'List-Owner'],
            ['LIST_POST', 'List-Post'],
            ['LIST_SUBSCRIBE', 'List-Subscribe'],
            ['LIST_UNSUBSCRIBE', 'List-Unsubscribe'],
            ['LIST_UNSUBSCRIBE_POST', 'List-Unsubscribe-Post'],
            ['MESSAGE_CONTEXT', 'Message-Context'],
            ['MESSAGE_ID', 'Message-ID'],
            ['MESSAGE_TYPE', 'Message-Type'],
            ['MMHS_ACP127_MESSAGE_IDENTIFIER', 'MMHS-Acp127-Message-Identifier'],
            ['MMHS_CODRESS_MESSAGE_INDICATOR', 'MMHS-Codress-Message-Indicator'],
            ['MMHS_COPY_PRECEDENCE', 'MMHS-Copy-Precedence'],
            ['MMHS_EXEMPTED_ADDRESS', 'MMHS-Exempted-Address'],
            ['MMHS_EXTENDED_AUTHORISATION_INFO', 'MMHS-Extended-Authorisation-Info'],
            ['MMHS_HANDLING_INSTRUCTIONS', 'MMHS-Handling-Instructions'],
            ['MMHS_MESSAGE_INSTRUCTIONS', 'MMHS-Message-Instructions'],
            ['MMHS_MESSAGE_TYPE', 'MMHS-Message-Type'],
            ['MMHS_ORIGINATOR_PLAD', 'MMHS-Originator-PLAD'],
            ['MMHS_ORIGINATOR_REFERENCE', 'MMHS-Originator-Reference'],
            ['MMHS_OTHER_RECIPIENTS_INDICATOR_CC', 'MMHS-Other-Recipients-Indicator-CC'],
            ['MMHS_OTHER_RECIPIENTS_INDICATOR_TO', 'MMHS-Other-Recipients-Indicator-To'],
            ['MMHS_PRIMARY_PRECEDENCE', 'MMHS-Primary-Precedence'],
            ['MMHS_SUBJECT_INDICATOR_CODES', 'MMHS-Subject-Indicator-Codes'],
            ['MT_PRIORITY', 'MT-Priority'],
            ['OBSOLETES', 'Obsoletes'],
            ['ORGANIZATION', 'Organization'],
            ['ORIGINAL_ENCODED_INFORMATION_TYPES', 'Original-Encoded-Information-Types'],
            ['ORIGINAL_FROM', 'Original-From'],
            ['ORIGINAL_MESSAGE_ID', 'Original-Message-ID'],
            ['ORIGINAL_RECIPIENT', 'Original-Recipient'],
            ['ORIGINAL_SUBJECT', 'Original-Subject'],
            ['ORIGINATOR_RETURN_ADDRESS', 'Originator-Return-Address'],
            ['PICS_LABEL', 'PICS-Label'],
            ['PREVENT_NONDELIVERY_REPORT', 'Prevent-NonDelivery-Report'],
            ['PRIORITY', 'Priority'],
            ['RECEIVED', 'Received'],
            ['RECEIVED_SPF', 'Received-SPF'],
            ['REFERENCES', 'References'],
            ['REPLY_BY', 'Reply-By'],
            ['REPLY_TO', 'Reply-To'],
            ['REQUIRE_RECIPIENT_VALID_SINCE', 'Require-Recipient-Valid-Since'],
            ['RESENT_BCC', 'Resent-Bcc'],
            ['RESENT_CC', 'Resent-Cc'],
            ['RESENT_DATE', 'Resent-Date'],
            ['RESENT_FROM', 'Resent-From'],
            ['RESENT_MESSAGE_ID', 'Resent-Message-ID'],
            ['RESENT_REPLY_TO', 'Resent-Reply-To'],
            ['RESENT_SENDER', 'Resent-Sender'],
            ['RESENT_TO', 'Resent-To'],
            ['RETURN_PATH', 'Return-Path'],
            ['SENDER', 'Sender'],
            ['SENSITIVITY', 'Sensitivity'],
            ['SOLICITATION', 'Solicitation'],
            ['SUBJECT', 'Subject'],
            ['SUPERSEDES', 'Supersedes'],
            ['TLS_REPORT_DOMAIN', 'TLS-Report-Domain'],
            ['TLS_REPORT_SUBMITTER', 'TLS-Report-Submitter'],
            ['TLS_REQUIRED', 'TLS-Required'],
            ['TO', 'To'],
            ['VBR_INFO', 'VBR-Info'],
            ['X400_CONTENT_IDENTIFIER', 'X400-Content-Identifier'],
            ['X400_CONTENT_RETURN', 'X400-Content-Return'],
            ['X400_CONTENT_TYPE', 'X400-Content-Type'],
            ['X400_MTS_IDENTIFIER', 'X400-MTS-Identifier'],
            ['X400_ORIGINATOR', 'X400-Originator'],
            ['X400_RECEIVED', 'X400-Received'],
            ['X400_RECIPIENTS', 'X400-Recipients'],
            ['X400_TRACE', 'X400-Trace'],
        ];
    }

    public function provisionalMailHeadersProvider(): array
    {
        return [
            ['APPARENTLY_TO', 'Apparently-To'],
            ['AUTHOR', 'Author'],
            ['EDIINT_FEATURES', 'EDIINT-Features'],
            ['EESST_VERSION', 'Eesst-Version'],
            ['ERRORS_TO', 'Errors-To'],
            ['FORM_SUB', 'Form-Sub'],
            ['JABBER_ID', 'Jabber-ID'],
            ['MMHS_AUTHORIZING_USERS', 'MMHS-Authorizing-Users'],
            ['PRIVICON', 'Privicon'],
            ['SIO_LABEL', 'SIO-Label'],
            ['SIO_LABEL_HISTORY', 'SIO-Label-History'],
            ['X_ARCHIVED_AT', 'X-Archived-At'],
            ['X_MITTENTE', 'X-Mittente'],
            ['X_RICEVUTA', 'X-Ricevuta'],
            ['X_RIFERIMENTO_MESSAGE_ID', 'X-Riferimento-Message-ID'],
            ['X_TIPORICEVUTA', 'X-TipoRicevuta'],
            ['X_TRASPORTO', 'X-Trasporto'],
            ['X_VERIFICASICUREZZA', 'X-VerificaSicurezza'],
        ];
    }
}
