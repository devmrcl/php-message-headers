<?php

declare(strict_types=1);

namespace Mrcl\Tests\Utils\InternetStandards;

use Mrcl\Utils\InternetStandards\HttpHeader;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

use function PHPUnit\Framework\assertContainsOnly;
use function PHPUnit\Framework\assertCount;
use function PHPUnit\Framework\assertSame;

class HttpHeadersTest extends TestCase
{
    private static array $allConstants;

    public static function setUpBeforeClass(): void
    {
        $httpStatus = new ReflectionClass(HttpHeader::class);
        self::$allConstants = $httpStatus->getConstants();
    }

    public function testCount(): void
    {
        $permanentCount = count($this->permanentHttpHeadersProvider());
        $provisionalCount = count($this->provisionalHttpHeadersProvider());
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
     * @dataProvider permanentHttpHeadersProvider
     * @dataProvider provisionalHttpHeadersProvider
     */
    public function testMapping(string $constant, string $fieldName): void
    {
        assertSame($fieldName, self::$allConstants[$constant]);
    }

    public function permanentHttpHeadersProvider(): array
    {
        return [
            ['ACCEPT', 'Accept'],
            ['ACCEPT_ADDITIONS', 'Accept-Additions'],
            ['ACCEPT_CH', 'Accept-CH'],
            ['ACCEPT_CHARSET', 'Accept-Charset'],
            ['ACCEPT_DATETIME', 'Accept-Datetime'],
            ['ACCEPT_ENCODING', 'Accept-Encoding'],
            ['ACCEPT_FEATURES', 'Accept-Features'],
            ['ACCEPT_LANGUAGE', 'Accept-Language'],
            ['ACCEPT_PATCH', 'Accept-Patch'],
            ['ACCEPT_POST', 'Accept-Post'],
            ['ACCEPT_RANGES', 'Accept-Ranges'],
            ['AGE', 'Age'],
            ['A_IM', 'A-IM'],
            ['ALLOW', 'Allow'],
            ['ALPN', 'ALPN'],
            ['ALTERNATES', 'Alternates'],
            ['ALT_SVC', 'Alt-Svc'],
            ['ALT_USED', 'Alt-Used'],
            ['APPLY_TO_REDIRECT_REF', 'Apply-To-Redirect-Ref'],
            ['AUTHENTICATION_CONTROL', 'Authentication-Control'],
            ['AUTHENTICATION_INFO', 'Authentication-Info'],
            ['AUTHORIZATION', 'Authorization'],
            ['CACHE_CONTROL', 'Cache-Control'],
            ['CALDAV_TIMEZONES', 'CalDAV-Timezones'],
            ['CAL_MANAGED_ID', 'Cal-Managed-ID'],
            ['CDN_LOOP', 'CDN-Loop'],
            ['CERT_NOT_AFTER', 'Cert-Not-After'],
            ['CERT_NOT_BEFORE', 'Cert-Not-Before'],
            ['C_EXT', 'C-Ext'],
            ['CLOSE', 'Close'],
            ['C_MAN', 'C-Man'],
            ['CONNECTION', 'Connection'],
            ['CONTENT_BASE', 'Content-Base'],
            ['CONTENT_DISPOSITION', 'Content-Disposition'],
            ['CONTENT_ENCODING', 'Content-Encoding'],
            ['CONTENT_ID', 'Content-ID'],
            ['CONTENT_LANGUAGE', 'Content-Language'],
            ['CONTENT_LENGTH', 'Content-Length'],
            ['CONTENT_LOCATION', 'Content-Location'],
            ['CONTENT_MD5', 'Content-MD5'],
            ['CONTENT_RANGE', 'Content-Range'],
            ['CONTENT_SCRIPT_TYPE', 'Content-Script-Type'],
            ['CONTENT_STYLE_TYPE', 'Content-Style-Type'],
            ['CONTENT_TYPE', 'Content-Type'],
            ['CONTENT_VERSION', 'Content-Version'],
            ['COOKIE', 'Cookie'],
            ['COOKIE2', 'Cookie2'],
            ['C_OPT', 'C-Opt'],
            ['C_PEP', 'C-PEP'],
            ['C_PEP_INFO', 'C-PEP-Info'],
            ['DASL', 'DASL'],
            ['DATE', 'Date'],
            ['DAV', 'DAV'],
            ['DEFAULT_STYLE', 'Default-Style'],
            ['DELTA_BASE', 'Delta-Base'],
            ['DEPTH', 'Depth'],
            ['DERIVED_FROM', 'Derived-From'],
            ['DESTINATION', 'Destination'],
            ['DIFFERENTIAL_ID', 'Differential-ID'],
            ['DIGEST', 'Digest'],
            ['EARLY_DATA', 'Early-Data'],
            ['ETAG', 'ETag'],
            ['EXPECT', 'Expect'],
            ['EXPECT_CT', 'Expect-CT'],
            ['EXPIRES', 'Expires'],
            ['EXT', 'Ext'],
            ['FORWARDED', 'Forwarded'],
            ['FROM', 'From'],
            ['GETPROFILE', 'GetProfile'],
            ['HOBAREG', 'Hobareg'],
            ['HOST', 'Host'],
            ['HTTP2_SETTINGS', 'HTTP2-Settings'],
            ['IF', 'If'],
            ['IF_MATCH', 'If-Match'],
            ['IF_MODIFIED_SINCE', 'If-Modified-Since'],
            ['IF_NONE_MATCH', 'If-None-Match'],
            ['IF_RANGE', 'If-Range'],
            ['IF_SCHEDULE_TAG_MATCH', 'If-Schedule-Tag-Match'],
            ['IF_UNMODIFIED_SINCE', 'If-Unmodified-Since'],
            ['IM', 'IM'],
            ['INCLUDE_REFERRED_TOKEN_BINDING_ID', 'Include-Referred-Token-Binding-ID'],
            ['KEEP_ALIVE', 'Keep-Alive'],
            ['LABEL', 'Label'],
            ['LAST_MODIFIED', 'Last-Modified'],
            ['LINK', 'Link'],
            ['LOCATION', 'Location'],
            ['LOCK_TOKEN', 'Lock-Token'],
            ['MAN', 'Man'],
            ['MAX_FORWARDS', 'Max-Forwards'],
            ['MEMENTO_DATETIME', 'Memento-Datetime'],
            ['METER', 'Meter'],
            ['MIME_VERSION', 'MIME-Version'],
            ['NEGOTIATE', 'Negotiate'],
            ['ODATA_ENTITYID', 'OData-EntityId'],
            ['ODATA_ISOLATION', 'OData-Isolation'],
            ['ODATA_MAXVERSION', 'OData-MaxVersion'],
            ['ODATA_VERSION', 'OData-Version'],
            ['OPT', 'Opt'],
            ['OPTIONAL_WWW_AUTHENTICATE', 'Optional-WWW-Authenticate'],
            ['ORDERING_TYPE', 'Ordering-Type'],
            ['ORIGIN', 'Origin'],
            ['OSCORE', 'OSCORE'],
            ['OVERWRITE', 'Overwrite'],
            ['P3P', 'P3P'],
            ['PEP', 'PEP'],
            ['PEP_INFO', 'Pep-Info'],
            ['PICS_LABEL', 'PICS-Label'],
            ['POSITION', 'Position'],
            ['PRAGMA', 'Pragma'],
            ['PREFER', 'Prefer'],
            ['PREFERENCE_APPLIED', 'Preference-Applied'],
            ['PROFILEOBJECT', 'ProfileObject'],
            ['PROTOCOL', 'Protocol'],
            ['PROTOCOL_INFO', 'Protocol-Info'],
            ['PROTOCOL_QUERY', 'Protocol-Query'],
            ['PROTOCOL_REQUEST', 'Protocol-Request'],
            ['PROXY_AUTHENTICATE', 'Proxy-Authenticate'],
            ['PROXY_AUTHENTICATION_INFO', 'Proxy-Authentication-Info'],
            ['PROXY_AUTHORIZATION', 'Proxy-Authorization'],
            ['PROXY_FEATURES', 'Proxy-Features'],
            ['PROXY_INSTRUCTION', 'Proxy-Instruction'],
            ['PUBLIC', 'Public'],
            ['PUBLIC_KEY_PINS', 'Public-Key-Pins'],
            ['PUBLIC_KEY_PINS_REPORT_ONLY', 'Public-Key-Pins-Report-Only'],
            ['RANGE', 'Range'],
            ['REDIRECT_REF', 'Redirect-Ref'],
            ['REFERER', 'Referer'],
            ['REPLAY_NONCE', 'Replay-Nonce'],
            ['RETRY_AFTER', 'Retry-After'],
            ['SAFE', 'Safe'],
            ['SCHEDULE_REPLY', 'Schedule-Reply'],
            ['SCHEDULE_TAG', 'Schedule-Tag'],
            ['SEC_TOKEN_BINDING', 'Sec-Token-Binding'],
            ['SECURITY_SCHEME', 'Security-Scheme'],
            ['SEC_WEBSOCKET_ACCEPT', 'Sec-WebSocket-Accept'],
            ['SEC_WEBSOCKET_EXTENSIONS', 'Sec-WebSocket-Extensions'],
            ['SEC_WEBSOCKET_KEY', 'Sec-WebSocket-Key'],
            ['SEC_WEBSOCKET_PROTOCOL', 'Sec-WebSocket-Protocol'],
            ['SEC_WEBSOCKET_VERSION', 'Sec-WebSocket-Version'],
            ['SERVER', 'Server'],
            ['SET_COOKIE', 'Set-Cookie'],
            ['SET_COOKIE2', 'Set-Cookie2'],
            ['SETPROFILE', 'SetProfile'],
            ['SLUG', 'SLUG'],
            ['SOAPACTION', 'SoapAction'],
            ['STATUS_URI', 'Status-URI'],
            ['STRICT_TRANSPORT_SECURITY', 'Strict-Transport-Security'],
            ['SUNSET', 'Sunset'],
            ['SURROGATE_CAPABILITY', 'Surrogate-Capability'],
            ['SURROGATE_CONTROL', 'Surrogate-Control'],
            ['TCN', 'TCN'],
            ['TE', 'TE'],
            ['TIMEOUT', 'Timeout'],
            ['TOPIC', 'Topic'],
            ['TRAILER', 'Trailer'],
            ['TRANSFER_ENCODING', 'Transfer-Encoding'],
            ['TTL', 'TTL'],
            ['UPGRADE', 'Upgrade'],
            ['URGENCY', 'Urgency'],
            ['URI', 'URI'],
            ['USER_AGENT', 'User-Agent'],
            ['VARIANT_VARY', 'Variant-Vary'],
            ['VARY', 'Vary'],
            ['VIA', 'Via'],
            ['WANT_DIGEST', 'Want-Digest'],
            ['WARNING', 'Warning'],
            ['WWW_AUTHENTICATE', 'WWW-Authenticate'],
            ['X_CONTENT_TYPE_OPTIONS', 'X-Content-Type-Options'],
            ['X_FRAME_OPTIONS', 'X-Frame-Options'],
        ];
    }

    public function provisionalHttpHeadersProvider(): array
    {
        return [
            ['ACCESS_CONTROL', 'Access-Control'],
            ['ACCESS_CONTROL_ALLOW_CREDENTIALS', 'Access-Control-Allow-Credentials'],
            ['ACCESS_CONTROL_ALLOW_HEADERS', 'Access-Control-Allow-Headers'],
            ['ACCESS_CONTROL_ALLOW_METHODS', 'Access-Control-Allow-Methods'],
            ['ACCESS_CONTROL_ALLOW_ORIGIN', 'Access-Control-Allow-Origin'],
            ['ACCESS_CONTROL_MAX_AGE', 'Access-Control-Max-Age'],
            ['ACCESS_CONTROL_REQUEST_METHOD', 'Access-Control-Request-Method'],
            ['ACCESS_CONTROL_REQUEST_HEADERS', 'Access-Control-Request-Headers'],
            ['AMP_CACHE_TRANSFORM', 'AMP-Cache-Transform'],
            ['COMPLIANCE', 'Compliance'],
            ['CONTENT_TRANSFER_ENCODING', 'Content-Transfer-Encoding'],
            ['COST', 'Cost'],
            ['EDIINT_FEATURES', 'EDIINT-Features'],
            ['ISOLATION', 'Isolation'],
            ['MESSAGE_ID', 'Message-ID'],
            ['METHOD_CHECK', 'Method-Check'],
            ['METHOD_CHECK_EXPIRES', 'Method-Check-Expires'],
            ['NON_COMPLIANCE', 'Non-Compliance'],
            ['OPTIONAL', 'Optional'],
            ['OSLC_CORE_VERSION', 'OSLC-Core-Version'],
            ['REFERER_ROOT', 'Referer-Root'],
            ['REPEATABILITY_CLIENT_ID', 'Repeatability-Client-ID'],
            ['REPEATABILITY_FIRST_SENT', 'Repeatability-First-Sent'],
            ['REPEATABILITY_REQUEST_ID', 'Repeatability-Request-ID'],
            ['REPEATABILITY_RESULT', 'Repeatability-Result'],
            ['RESOLUTION_HINT', 'Resolution-Hint'],
            ['RESOLVER_LOCATION', 'Resolver-Location'],
            ['SUBOK', 'SubOK'],
            ['SUBST', 'Subst'],
            ['TIMING_ALLOW_ORIGIN', 'Timing-Allow-Origin'],
            ['TITLE', 'Title'],
            ['TRACEPARENT', 'Traceparent'],
            ['TRACESTATE', 'Tracestate'],
            ['UA_COLOR', 'UA-Color'],
            ['UA_MEDIA', 'UA-Media'],
            ['UA_PIXELS', 'UA-Pixels'],
            ['UA_RESOLUTION', 'UA-Resolution'],
            ['UA_WINDOWPIXELS', 'UA-Windowpixels'],
            ['VERSION', 'Version'],
            ['X_DEVICE_ACCEPT', 'X-Device-Accept'],
            ['X_DEVICE_ACCEPT_CHARSET', 'X-Device-Accept-Charset'],
            ['X_DEVICE_ACCEPT_ENCODING', 'X-Device-Accept-Encoding'],
            ['X_DEVICE_ACCEPT_LANGUAGE', 'X-Device-Accept-Language'],
            ['X_DEVICE_USER_AGENT', 'X-Device-User-Agent'],
        ];
    }
}
