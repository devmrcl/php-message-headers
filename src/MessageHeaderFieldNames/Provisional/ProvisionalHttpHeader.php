<?php

namespace Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Provisional;

interface ProvisionalHttpHeader
{
    /**
     * Access-Control
     *
     * @deprecated
     *
     * @link https://www.w3.org/2006/appformats/ W3C
     */
    public const ACCESS_CONTROL = 'Access-Control';

    /**
     * Access-Control-Allow-Credentials
     *
     * @link https://fetch.spec.whatwg.org/#http-access-control-allow-credentials Fetch
     */
    public const ACCESS_CONTROL_ALLOW_CREDENTIALS = 'Access-Control-Allow-Credentials';

    /**
     * Access-Control-Allow-Headers
     *
     * @link https://fetch.spec.whatwg.org/#http-access-control-allow-headers Fetch
     */
    public const ACCESS_CONTROL_ALLOW_HEADERS = 'Access-Control-Allow-Headers';

    /**
     * Access-Control-Allow-Methods
     *
     * @link https://fetch.spec.whatwg.org/#http-access-control-allow-methods Fetch
     */
    public const ACCESS_CONTROL_ALLOW_METHODS = 'Access-Control-Allow-Methods';

    /**
     * Access-Control-Allow-Origin
     *
     * @link https://fetch.spec.whatwg.org/#http-access-control-allow-origin Fetch
     */
    public const ACCESS_CONTROL_ALLOW_ORIGIN = 'Access-Control-Allow-Origin';

    /**
     * Access-Control-Max-Age
     *
     * @link https://fetch.spec.whatwg.org/#http-access-control-max-age Fetch
     */
    public const ACCESS_CONTROL_MAX_AGE = 'Access-Control-Max-Age';

    /**
     * Access-Control-Request-Method
     *
     * @link https://fetch.spec.whatwg.org/#http-access-control-request-method Fetch
     */
    public const ACCESS_CONTROL_REQUEST_METHOD = 'Access-Control-Request-Method';

    /**
     * Access-Control-Request-Headers
     *
     * @link https://fetch.spec.whatwg.org/#http-access-control-request-headers Fetch
     */
    public const ACCESS_CONTROL_REQUEST_HEADERS = 'Access-Control-Request-Headers';

    /**
     * AMP-Cache-Transform
     *
     * @link https://github.com/ampproject/amphtml/blob/main/spec/amp-cache-transform.md AMP
     */
    public const AMP_CACHE_TRANSFORM = 'AMP-Cache-Transform';

    /**
     * Compliance
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.1 RFC4229
     */
    public const COMPLIANCE = 'Compliance';

    /**
     * Content-Transfer-Encoding
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.2 RFC4229
     */
    public const CONTENT_TRANSFER_ENCODING = 'Content-Transfer-Encoding';

    /**
     * Cost
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.3 RFC4229
     */
    public const COST = 'Cost';

    /**
     * EDIINT-Features
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6017 RFC6017
     */
    public const EDIINT_FEATURES = 'EDIINT-Features';

    /**
     * Isolation
     *
     * @link https://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_HeaderIsolationODataIsolation OData
     */
    public const ISOLATION = 'Isolation';

    /**
     * Message-ID
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.4 RFC4229
     */
    public const MESSAGE_ID = 'Message-ID';

    /**
     * Method-Check
     *
     * @deprecated
     *
     * @link https://www.w3.org/2006/appformats/ W3C
     */
    public const METHOD_CHECK = 'Method-Check';

    /**
     * Method-Check-Expires
     *
     * @deprecated
     *
     * @link https://www.w3.org/2006/appformats/ W3C
     */
    public const METHOD_CHECK_EXPIRES = 'Method-Check-Expires';

    /**
     * Non-Compliance
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.5 RFC4229
     */
    public const NON_COMPLIANCE = 'Non-Compliance';

    /**
     * Optional
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.6 RFC4229
     */
    public const OPTIONAL = 'Optional';

    /**
     * OSLC-Core-Version
     *
     * @link https://docs.oasis-open-projects.org/oslc-op/core/v3.0/oslc-core.html OASIS
     */
    public const OSLC_CORE_VERSION = 'OSLC-Core-Version';

    /**
     * Referer-Root
     *
     * @deprecated
     *
     * @link https://www.w3.org/2006/appformats/ W3C
     */
    public const REFERER_ROOT = 'Referer-Root';

    /**
     * Repeatability-Client-ID
     *
     * @link https://docs.oasis-open.org/odata/repeatable-requests/v1.0/cs01/repeatable-requests-v1.0-cs01.html#_Toc45116388 OASIS
     */
    public const REPEATABILITY_CLIENT_ID = 'Repeatability-Client-ID';

    /**
     * Repeatability-First-Sent
     *
     * @link https://docs.oasis-open.org/odata/repeatable-requests/v1.0/cs01/repeatable-requests-v1.0-cs01.html#sec_RepeatabilityFirstSent OASIS
     */
    public const REPEATABILITY_FIRST_SENT = 'Repeatability-First-Sent';

    /**
     * Repeatability-Request-ID
     *
     * @link https://docs.oasis-open.org/odata/repeatable-requests/v1.0/cs01/repeatable-requests-v1.0-cs01.html#sec_RepeatabilityRequestID OASIS
     */
    public const REPEATABILITY_REQUEST_ID = 'Repeatability-Request-ID';

    /**
     * Repeatability-Result
     *
     * @link https://docs.oasis-open.org/odata/repeatable-requests/v1.0/cs01/repeatable-requests-v1.0-cs01.html#sec_RepeatabilityResult OASIS
     */
    public const REPEATABILITY_RESULT = 'Repeatability-Result';

    /**
     * Resolution-Hint
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.7 RFC4229
     */
    public const RESOLUTION_HINT = 'Resolution-Hint';

    /**
     * Resolver-Location
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.8 RFC4229
     */
    public const RESOLVER_LOCATION = 'Resolver-Location';

    /**
     * SubOK
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.9 RFC4229
     */
    public const SUBOK = 'SubOK';

    /**
     * Subst
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.10 RFC4229
     */
    public const SUBST = 'Subst';

    /**
     * Timing-Allow-Origin
     *
     * @link https://www.w3.org/TR/resource-timing-1/#timing-allow-origin W3C
     */
    public const TIMING_ALLOW_ORIGIN = 'Timing-Allow-Origin';

    /**
     * Title
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.11 RFC4229
     */
    public const TITLE = 'Title';

    /**
     * Traceparent
     *
     * @link https://www.w3.org/TR/trace-context/#traceparent-field W3C
     */
    public const TRACEPARENT = 'Traceparent';

    /**
     * Tracestate
     *
     * @link https://www.w3.org/TR/trace-context/#tracestate-field W3C
     */
    public const TRACESTATE = 'Tracestate';

    /**
     * UA-Color
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.12 RFC4229
     */
    public const UA_COLOR = 'UA-Color';

    /**
     * UA-Media
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.13 RFC4229
     */
    public const UA_MEDIA = 'UA-Media';

    /**
     * UA-Pixels
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.14 RFC4229
     */
    public const UA_PIXELS = 'UA-Pixels';

    /**
     * UA-Resolution
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.15 RFC4229
     */
    public const UA_RESOLUTION = 'UA-Resolution';

    /**
     * UA-Windowpixels
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.16 RFC4229
     */
    public const UA_WINDOWPIXELS = 'UA-Windowpixels';

    /**
     * Version
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.17 RFC4229
     */
    public const VERSION = 'Version';

    /**
     * X-Device-Accept
     *
     * @link https://www.w3.org/2005/MWI/BPWG/ W3C
     */
    public const X_DEVICE_ACCEPT = 'X-Device-Accept';

    /**
     * X-Device-Accept-Charset
     *
     * @link https://www.w3.org/2005/MWI/BPWG/ W3C
     */
    public const X_DEVICE_ACCEPT_CHARSET = 'X-Device-Accept-Charset';

    /**
     * X-Device-Accept-Encoding
     *
     * @link https://www.w3.org/2005/MWI/BPWG/ W3C
     */
    public const X_DEVICE_ACCEPT_ENCODING = 'X-Device-Accept-Encoding';

    /**
     * X-Device-Accept-Language
     *
     * @link https://www.w3.org/2005/MWI/BPWG/ W3C
     */
    public const X_DEVICE_ACCEPT_LANGUAGE = 'X-Device-Accept-Language';

    /**
     * X-Device-User-Agent
     *
     * @link https://www.w3.org/2005/MWI/BPWG/ W3C
     */
    public const X_DEVICE_USER_AGENT = 'X-Device-User-Agent';
}
