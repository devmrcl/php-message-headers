<?php

namespace Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Permanent;

interface PermanentHttpHeader
{
    /**
     * A-IM
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.1 RFC4229
     */
    public const A_IM = 'A-IM';

    /**
     * Accept
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.2 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-5.3.2 RFC7231
     */
    public const ACCEPT = 'Accept';

    /**
     * Accept-Additions
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.3 RFC4229
     */
    public const ACCEPT_ADDITIONS = 'Accept-Additions';

    /**
     * Accept-CH
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8942#section-3.1 RFC8942
     */
    public const ACCEPT_CH = 'Accept-CH';

    /**
     * Accept-Charset
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.4 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-5.3.3 RFC7231
     */
    public const ACCEPT_CHARSET = 'Accept-Charset';

    /**
     * Accept-Datetime
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7089#section-2.1.1 RFC7089
     */
    public const ACCEPT_DATETIME = 'Accept-Datetime';

    /**
     * Accept-Encoding
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.5 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-5.3.4 RFC7231
     * @link https://datatracker.ietf.org/doc/html/rfc7694#section-3 RFC7694
     */
    public const ACCEPT_ENCODING = 'Accept-Encoding';

    /**
     * Accept-Features
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.6 RFC4229
     */
    public const ACCEPT_FEATURES = 'Accept-Features';

    /**
     * Accept-Language
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.7 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-5.3.5 RFC7231
     */
    public const ACCEPT_LANGUAGE = 'Accept-Language';

    /**
     * Accept-Patch
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5789#section-3.1 RFC5789
     */
    public const ACCEPT_PATCH = 'Accept-Patch';

    /**
     * Accept-Post
     *
     * @link https://www.w3.org/TR/ldp/#header-accept-post W3C
     */
    public const ACCEPT_POST = 'Accept-Post';

    /**
     * Accept-Ranges
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.8 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7233#section-2.3 RFC7233
     */
    public const ACCEPT_RANGES = 'Accept-Ranges';

    /**
     * Age
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.9 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7234#section-5.1 RFC7234
     */
    public const AGE = 'Age';

    /**
     * Allow
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.10 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-7.4.1 RFC7231
     */
    public const ALLOW = 'Allow';

    /**
     * ALPN
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7639#section-2 RFC7639
     */
    public const ALPN = 'ALPN';

    /**
     * Alt-Svc
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7838#section-3 RFC7838
     */
    public const ALT_SVC = 'Alt-Svc';

    /**
     * Alt-Used
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7838#section-5 RFC7838
     */
    public const ALT_USED = 'Alt-Used';

    /**
     * Alternates
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.11 RFC4229
     */
    public const ALTERNATES = 'Alternates';

    /**
     * Apply-To-Redirect-Ref
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4437#section-12.2 RFC4437
     */
    public const APPLY_TO_REDIRECT_REF = 'Apply-To-Redirect-Ref';

    /**
     * Authentication-Control
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8053#section-4 RFC8053
     */
    public const AUTHENTICATION_CONTROL = 'Authentication-Control';

    /**
     * Authentication-Info
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.12 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7615#section-3 RFC7615
     */
    public const AUTHENTICATION_INFO = 'Authentication-Info';

    /**
     * Authorization
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.13 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7235#section-4.2 RFC7235
     */
    public const AUTHORIZATION = 'Authorization';

    /**
     * C-Ext
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.14 RFC4229
     */
    public const C_EXT = 'C-Ext';

    /**
     * C-Man
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.15 RFC4229
     */
    public const C_MAN = 'C-Man';

    /**
     * C-Opt
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.16 RFC4229
     */
    public const C_OPT = 'C-Opt';

    /**
     * C-PEP
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.17 RFC4229
     */
    public const C_PEP = 'C-PEP';

    /**
     * C-PEP-Info
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.18 RFC4229
     */
    public const C_PEP_INFO = 'C-PEP-Info';

    /**
     * Cache-Control
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.19 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7234#section-5.2 RFC7234
     */
    public const CACHE_CONTROL = 'Cache-Control';

    /**
     * Cal-Managed-ID
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8607#section-5.1 RFC8607
     */
    public const CAL_MANAGED_ID = 'Cal-Managed-ID';

    /**
     * CalDAV-Timezones
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7809#section-7.1 RFC7809
     */
    public const CALDAV_TIMEZONES = 'CalDAV-Timezones';

    /**
     * CDN-Loop
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8586#section-2 RFC8586
     */
    public const CDN_LOOP = 'CDN-Loop';

    /**
     * Cert-Not-After
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8739#section-3.3 RFC8739
     */
    public const CERT_NOT_AFTER = 'Cert-Not-After';

    /**
     * Cert-Not-Before
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8739#section-3.3 RFC8739
     */
    public const CERT_NOT_BEFORE = 'Cert-Not-Before';

    /**
     * Close
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7230#section-8.1 RFC7230
     */
    public const CLOSE = 'Close';

    /**
     * Connection
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.20 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7230#section-6.1 RFC7230
     */
    public const CONNECTION = 'Connection';

    /**
     * Content-Base
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.21 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc2616#section-19.6.3 RFC2616
     */
    public const CONTENT_BASE = 'Content-Base';

    /**
     * Content-Disposition
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.22 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc6266 RFC6266
     */
    public const CONTENT_DISPOSITION = 'Content-Disposition';

    /**
     * Content-Encoding
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.23 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-3.1.2.2 RFC7231
     */
    public const CONTENT_ENCODING = 'Content-Encoding';

    /**
     * Content-ID
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.24 RFC4229
     */
    public const CONTENT_ID = 'Content-ID';

    /**
     * Content-Language
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.25 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-3.1.3.2 RFC7231
     */
    public const CONTENT_LANGUAGE = 'Content-Language';

    /**
     * Content-Length
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.26 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7230#section-3.3.2 RFC7230
     */
    public const CONTENT_LENGTH = 'Content-Length';

    /**
     * Content-Location
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.27 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-3.1.4.2 RFC7231
     */
    public const CONTENT_LOCATION = 'Content-Location';

    /**
     * Content-MD5
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.28 RFC4229
     */
    public const CONTENT_MD5 = 'Content-MD5';

    /**
     * Content-Range
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.29 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7233#section-4.2 RFC7233
     */
    public const CONTENT_RANGE = 'Content-Range';

    /**
     * Content-Script-Type
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.30 RFC4229
     */
    public const CONTENT_SCRIPT_TYPE = 'Content-Script-Type';

    /**
     * Content-Style-Type
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.31 RFC4229
     */
    public const CONTENT_STYLE_TYPE = 'Content-Style-Type';

    /**
     * Content-Type
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.32 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-3.1.1.5 RFC7231
     */
    public const CONTENT_TYPE = 'Content-Type';

    /**
     * Content-Version
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.33 RFC4229
     */
    public const CONTENT_VERSION = 'Content-Version';

    /**
     * Cookie
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.34 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc6265#section-4.2 RFC6265
     */
    public const COOKIE = 'Cookie';

    /**
     * Cookie2
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.35 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc6265#section-9.3 RFC6265
     * @link https://datatracker.ietf.org/doc/html/rfc2965 RFC2965
     */
    public const COOKIE2 = 'Cookie2';

    /**
     * DASL
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5323#section-9.1.1 RFC5323
     */
    public const DASL = 'DASL';

    /**
     * DAV
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.36 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-10.1 RFC4918
     */
    public const DAV = 'DAV';

    /**
     * Date
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.37 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-7.1.1.2 RFC7231
     */
    public const DATE = 'Date';

    /**
     * Default-Style
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.38 RFC4229
     */
    public const DEFAULT_STYLE = 'Default-Style';

    /**
     * Delta-Base
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.39 RFC4229
     */
    public const DELTA_BASE = 'Delta-Base';

    /**
     * Depth
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.40 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-10.2 RFC4918
     */
    public const DEPTH = 'Depth';

    /**
     * Derived-From
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.41 RFC4229
     */
    public const DERIVED_FROM = 'Derived-From';

    /**
     * Destination
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.42 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-10.3 RFC4918
     */
    public const DESTINATION = 'Destination';

    /**
     * Differential-ID
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.43 RFC4229
     */
    public const DIFFERENTIAL_ID = 'Differential-ID';

    /**
     * Digest
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.44 RFC4229
     */
    public const DIGEST = 'Digest';

    /**
     * Early-Data
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8470#section-5.1 RFC8470
     */
    public const EARLY_DATA = 'Early-Data';

    /**
     * ETag
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.45 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc2616#section-14.19 RFC2616
     * @link https://datatracker.ietf.org/doc/html/rfc7232#section-2.3 RFC7232
     */
    public const ETAG = 'ETag';

    /**
     * Expect
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.46 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc2616#section-14.20 RFC2616
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-5.1.1 RFC7231
     */
    public const EXPECT = 'Expect';

    /**
     * Expect-CT
     *
     * @link https://datatracker.ietf.org/doc/draft-ietf-httpbis-expect-ct/08/ DRAFT
     */
    public const EXPECT_CT = 'Expect-CT';

    /**
     * Expires
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.47 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7234#section-5.3 RFC7234
     */
    public const EXPIRES = 'Expires';

    /**
     * Ext
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.48 RFC4229
     */
    public const EXT = 'Ext';

    /**
     * Forwarded
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7239#section-4 RFC7239
     */
    public const FORWARDED = 'Forwarded';

    /**
     * From
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.49 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-5.5.1 RFC7231
     */
    public const FROM = 'From';

    /**
     * GetProfile
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.50 RFC4229
     */
    public const GETPROFILE = 'GetProfile';

    /**
     * Hobareg
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7486#section-6.1.1 RFC7486
     */
    public const HOBAREG = 'Hobareg';

    /**
     * Host
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.51 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7230#section-5.4 RFC7230
     */
    public const HOST = 'Host';

    /**
     * HTTP2-Settings
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7540#section-3.2.1 RFC7540
     */
    public const HTTP2_SETTINGS = 'HTTP2-Settings';

    /**
     * IM
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.52 RFC4229
     */
    public const IM = 'IM';

    /**
     * If
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.53 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-10.4 RFC4918
     */
    public const IF = 'If';

    /**
     * If-Match
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.54 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7232#section-3.1 RFC7232
     */
    public const IF_MATCH = 'If-Match';

    /**
     * If-Modified-Since
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.55 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7232#section-3.3 RFC7232
     */
    public const IF_MODIFIED_SINCE = 'If-Modified-Since';

    /**
     * If-None-Match
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.56 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7232#section-3.2 RFC7232
     */
    public const IF_NONE_MATCH = 'If-None-Match';

    /**
     * If-Range
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.57 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7232#section-3.5 RFC7232
     * @link https://datatracker.ietf.org/doc/html/rfc7233#section-3.2 RFC7233
     */
    public const IF_RANGE = 'If-Range';

    /**
     * If-Schedule-Tag-Match
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6638#section-8.3 RFC6638
     */
    public const IF_SCHEDULE_TAG_MATCH = 'If-Schedule-Tag-Match';

    /**
     * If-Unmodified-Since
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.58 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7232#section-3.4 RFC7232
     */
    public const IF_UNMODIFIED_SINCE = 'If-Unmodified-Since';

    /**
     * Include-Referred-Token-Binding-ID
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8473#section-5.3 RFC8473
     */
    public const INCLUDE_REFERRED_TOKEN_BINDING_ID = 'Include-Referred-Token-Binding-ID';

    /**
     * Keep-Alive
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.59 RFC4229
     */
    public const KEEP_ALIVE = 'Keep-Alive';

    /**
     * Label
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.60 RFC4229
     */
    public const LABEL = 'Label';

    /**
     * Last-Modified
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.61 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7232#section-2.2 RFC7232
     */
    public const LAST_MODIFIED = 'Last-Modified';

    /**
     * Link
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.62 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc8288 RFC8288
     */
    public const LINK = 'Link';

    /**
     * Location
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.63 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-7.1.2 RFC7231
     */
    public const LOCATION = 'Location';

    /**
     * Lock-Token
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.64 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-10.5 RFC4918
     */
    public const LOCK_TOKEN = 'Lock-Token';

    /**
     * Man
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.66 RFC4229
     */
    public const MAN = 'Man';

    /**
     * Max-Forwards
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.67 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-5.1.2 RFC7231
     */
    public const MAX_FORWARDS = 'Max-Forwards';

    /**
     * Memento-Datetime
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7089#section-2.1.1 RFC7089
     */
    public const MEMENTO_DATETIME = 'Memento-Datetime';

    /**
     * Meter
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.68 RFC4229
     */
    public const METER = 'Meter';

    /**
     * MIME-Version
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.65 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#appendix-A.1 RFC7231
     */
    public const MIME_VERSION = 'MIME-Version';

    /**
     * Negotiate
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.69 RFC4229
     */
    public const NEGOTIATE = 'Negotiate';

    /**
     * OData-EntityId
     *
     * @link https://docs.oasis-open.org/odata/odata/v4.01/csprd05/part1-protocol/odata-v4.01-csprd05-part1-protocol.html#_Toc14172735 OData
     */
    public const ODATA_ENTITYID = 'OData-EntityId';

    /**
     * OData-Isolation
     *
     * @link https://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_HeaderIsolationODataIsolation OData
     */
    public const ODATA_ISOLATION = 'OData-Isolation';

    /**
     * OData-MaxVersion
     *
     * @link https://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_HeaderODataMaxVersion OData
     */
    public const ODATA_MAXVERSION = 'OData-MaxVersion';

    /**
     * OData-Version
     *
     * @link https://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_HeaderODataVersion OData
     */
    public const ODATA_VERSION = 'OData-Version';

    /**
     * Opt
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.70 RFC4229
     */
    public const OPT = 'Opt';

    /**
     * Optional-WWW-Authenticate
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8053#section-3 RFC8053
     */
    public const OPTIONAL_WWW_AUTHENTICATE = 'Optional-WWW-Authenticate';

    /**
     * Ordering-Type
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.71 RFC4229
     */
    public const ORDERING_TYPE = 'Ordering-Type';

    /**
     * Origin
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6454#section-7 RFC6454
     */
    public const ORIGIN = 'Origin';

    /**
     * OSCORE
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8613#section-11.1 RFC8613
     */
    public const OSCORE = 'OSCORE';

    /**
     * Overwrite
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.72 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-10.6 RFC4918
     */
    public const OVERWRITE = 'Overwrite';

    /**
     * P3P
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.73 RFC4229
     */
    public const P3P = 'P3P';

    /**
     * PEP
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.74 RFC4229
     */
    public const PEP = 'PEP';

    /**
     * PICS-Label
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.75 RFC4229
     */
    public const PICS_LABEL = 'PICS-Label';

    /**
     * Pep-Info
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.76 RFC4229
     */
    public const PEP_INFO = 'Pep-Info';

    /**
     * Position
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.77 RFC4229
     */
    public const POSITION = 'Position';

    /**
     * Pragma
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.78 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7234#section-5.4 RFC7234
     */
    public const PRAGMA = 'Pragma';

    /**
     * Prefer
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7240 RFC7240
     */
    public const PREFER = 'Prefer';

    /**
     * Preference-Applied
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7240#section-3 RFC7240
     */
    public const PREFERENCE_APPLIED = 'Preference-Applied';

    /**
     * ProfileObject
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.79 RFC4229
     */
    public const PROFILEOBJECT = 'ProfileObject';

    /**
     * Protocol
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.80 RFC4229
     */
    public const PROTOCOL = 'Protocol';

    /**
     * Protocol-Info
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.81 RFC4229
     */
    public const PROTOCOL_INFO = 'Protocol-Info';

    /**
     * Protocol-Query
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.82 RFC4229
     */
    public const PROTOCOL_QUERY = 'Protocol-Query';

    /**
     * Protocol-Request
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.83 RFC4229
     */
    public const PROTOCOL_REQUEST = 'Protocol-Request';

    /**
     * Proxy-Authenticate
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.84 RFC4299
     * @link https://datatracker.ietf.org/doc/html/rfc7235#section-4.3 RFC7235
     */
    public const PROXY_AUTHENTICATE = 'Proxy-Authenticate';

    /**
     * Proxy-Authentication-Info
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.85 RFC4299
     * @link https://datatracker.ietf.org/doc/html/rfc7615#section-4 RFC7615
     */
    public const PROXY_AUTHENTICATION_INFO = 'Proxy-Authentication-Info';

    /**
     * Proxy-Authorization
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.86 RFC4299
     * @link https://datatracker.ietf.org/doc/html/rfc7235#section-4.4 RFC7235
     */
    public const PROXY_AUTHORIZATION = 'Proxy-Authorization';

    /**
     * Proxy-Features
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.87 RFC4299
     */
    public const PROXY_FEATURES = 'Proxy-Features';

    /**
     * Proxy-Instruction
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.88 RFC4299
     */
    public const PROXY_INSTRUCTION = 'Proxy-Instruction';

    /**
     * Public
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.89 RFC4299
     */
    public const PUBLIC = 'Public';

    /**
     * Public-Key-Pins
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7469 RFC7469
     */
    public const PUBLIC_KEY_PINS = 'Public-Key-Pins';

    /**
     * Public-Key-Pins-Report-Only
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7469 RFC7469
     */
    public const PUBLIC_KEY_PINS_REPORT_ONLY = 'Public-Key-Pins-Report-Only';

    /**
     * Range
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.90 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7233#section-3.1 RFC7233
     */
    public const RANGE = 'Range';

    /**
     * Redirect-Ref
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4437#section-12.1 RFC4437
     */
    public const REDIRECT_REF = 'Redirect-Ref';

    /**
     * Referer
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.91 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-5.5.2 RFC7231
     */
    public const REFERER = 'Referer';

    /**
     * Replay-Nonce
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8555#section-6.5.1 RFC8555
     */
    public const REPLAY_NONCE = 'Replay-Nonce';

    /**
     * Retry-After
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.92 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-7.1.3 RFC7231
     */
    public const RETRY_AFTER = 'Retry-After';

    /**
     * Safe
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.93 RFC4229
     */
    public const SAFE = 'Safe';

    /**
     * Schedule-Reply
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6638#section-8.1 RFC6638
     */
    public const SCHEDULE_REPLY = 'Schedule-Reply';

    /**
     * Schedule-Tag
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6638#section-8.2 RFC6638
     */
    public const SCHEDULE_TAG = 'Schedule-Tag';

    /**
     * Sec-Token-Binding
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8473#section-2 RFC8473
     */
    public const SEC_TOKEN_BINDING = 'Sec-Token-Binding';

    /**
     * Sec-WebSocket-Accept
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6455#section-11.3.3 RFC6455
     */
    public const SEC_WEBSOCKET_ACCEPT = 'Sec-WebSocket-Accept';

    /**
     * Sec-WebSocket-Extensions
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6455#section-11.3.2 RFC6455
     */
    public const SEC_WEBSOCKET_EXTENSIONS = 'Sec-WebSocket-Extensions';

    /**
     * Sec-WebSocket-Key
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6455#section-11.3.1 RFC6455
     */
    public const SEC_WEBSOCKET_KEY = 'Sec-WebSocket-Key';

    /**
     * Sec-WebSocket-Protocol
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6455#section-11.3.4 RFC6455
     */
    public const SEC_WEBSOCKET_PROTOCOL = 'Sec-WebSocket-Protocol';

    /**
     * Sec-WebSocket-Version
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6455#section-11.3.5 RFC6455
     */
    public const SEC_WEBSOCKET_VERSION = 'Sec-WebSocket-Version';

    /**
     * Security-Scheme
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.94 RFC4229
     */
    public const SECURITY_SCHEME = 'Security-Scheme';

    /**
     * Server
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.95 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-7.4.2 RFC7231
     */
    public const SERVER = 'Server';

    /**
     * Set-Cookie
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.96 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc6265#section-9.2 RFC6265
     */
    public const SET_COOKIE = 'Set-Cookie';

    /**
     * Set-Cookie2
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.97 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc2965#section-3.2 RFC2965
     * @link https://datatracker.ietf.org/doc/html/rfc6265#section-9.4 RFC6265
     */
    public const SET_COOKIE2 = 'Set-Cookie2';

    /**
     * SetProfile
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.98 RFC4229
     */
    public const SETPROFILE = 'SetProfile';

    /**
     * SLUG
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5023#section-9.7 RFC5023
     */
    public const SLUG = 'SLUG';

    /**
     * SoapAction
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.99 RFC4229
     */
    public const SOAPACTION = 'SoapAction';

    /**
     * Status-URI
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.100 RFC4229
     */
    public const STATUS_URI = 'Status-URI';

    /**
     * Strict-Transport-Security
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6797#section-6.1 RFC6797
     */
    public const STRICT_TRANSPORT_SECURITY = 'Strict-Transport-Security';

    /**
     * Sunset
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8594 RFC8594
     */
    public const SUNSET = 'Sunset';

    /**
     * Surrogate-Capability
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.101 RFC4229
     */
    public const SURROGATE_CAPABILITY = 'Surrogate-Capability';

    /**
     * Surrogate-Control
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.102 RFC4229
     */
    public const SURROGATE_CONTROL = 'Surrogate-Control';

    /**
     * TCN
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.103 RFC4229
     */
    public const TCN = 'TCN';

    /**
     * TE
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.104 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7230#section-4.3 RFC7230
     */
    public const TE = 'TE';

    /**
     * Timeout
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.105 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-10.7 RFC4918
     */
    public const TIMEOUT = 'Timeout';

    /**
     * Topic
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8030#section-5.4 RFC8030
     */
    public const TOPIC = 'Topic';

    /**
     * Trailer
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.106 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7230#section-4.4 RFC7230
     */
    public const TRAILER = 'Trailer';

    /**
     * Transfer-Encoding
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.107 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7230#section-3.3.1 RFC7230
     */
    public const TRANSFER_ENCODING = 'Transfer-Encoding';

    /**
     * TTL
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8030#section-5.2 RFC8030
     */
    public const TTL = 'TTL';

    /**
     * Urgency
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8030#section-5.3 RFC8030
     */
    public const URGENCY = 'Urgency';

    /**
     * URI
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.108 RFC4229
     */
    public const URI = 'URI';

    /**
     * Upgrade
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.109 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7230#section-6.7 RFC7230
     */
    public const UPGRADE = 'Upgrade';

    /**
     * User-Agent
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.110 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-5.5.3 RFC7231
     */
    public const USER_AGENT = 'User-Agent';

    /**
     * Variant-Vary
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.111 RFC4229
     */
    public const VARIANT_VARY = 'Variant-Vary';

    /**
     * Vary
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.112 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-7.1.4 RFC7231
     */
    public const VARY = 'Vary';

    /**
     * Via
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.113 RFC4229
     * @linkhttps://datatracker.ietf.org/doc/html/rfc7230#section-5.7.1 RFC7230
     */
    public const VIA = 'Via';

    /**
     * WWW-Authenticate
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.114 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7235#section-4.1 RFC7235
     */
    public const WWW_AUTHENTICATE = 'WWW-Authenticate';

    /**
     * Want-Digest
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.115 RFC4229
     */
    public const WANT_DIGEST = 'Want-Digest';

    /**
     * Warning
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.1.116 RFC4229
     * @link https://datatracker.ietf.org/doc/html/rfc7234#section-5.5 RFC7234
     */
    public const WARNING = 'Warning';

    /**
     * X-Content-Type-Options
     *
     * @link https://fetch.spec.whatwg.org/#x-content-type-options-header Fetch
     */
    public const X_CONTENT_TYPE_OPTIONS = 'X-Content-Type-Options';

    /**
     * X-Frame-Options
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7034 RFC7034
     */
    public const X_FRAME_OPTIONS = 'X-Frame-Options';
}
