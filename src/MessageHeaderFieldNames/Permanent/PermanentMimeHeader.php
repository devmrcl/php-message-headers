<?php

namespace Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Permanent;

interface PermanentMimeHeader
{
    /**
     * Base
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc1808#section-3 RFC1808
     */
    public const BASE = 'Base';

    /**
     * Content-Alternative
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.2.11 RFC4021
     */
    public const CONTENT_ALTERNATIVE = 'Content-Alternative';

    /**
     * Content-Base
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.2.6 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc2110#section-4.2 RFC2110
     * @link https://datatracker.ietf.org/doc/html/rfc2557#section-2.2 RFC2557
     */
    public const CONTENT_BASE = 'Content-Base';

    /**
     * Content-Description
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.2.3 RFC4021
     */
    public const CONTENT_DESCRIPTION = 'Content-Description';

    /**
     * Content-Disposition
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.2.9 RFC4021
     */
    public const CONTENT_DISPOSITION = 'Content-Disposition';

    /**
     * Content-Duration
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.2.13 RFC4021
     */
    public const CONTENT_DURATION = 'Content-Duration';

    /**
     * Content-features
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.2.8 RFC4021
     */
    public const CONTENT_FEATURES = 'Content-features';

    /**
     * Content-ID
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.2.2 RFC4021
     */
    public const CONTENT_ID = 'Content-ID';

    /**
     * Content-Language
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.2.10 RFC4021
     */
    public const CONTENT_LANGUAGE = 'Content-Language';

    /**
     * Content-Location
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.2.7 RFC4021
     */
    public const CONTENT_LOCATION = 'Content-Location';

    /**
     * Content-MD5
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.2.12 RFC4021
     */
    public const CONTENT_MD5 = 'Content-MD5';

    /**
     * Content-Transfer-Encoding
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.2.4 RFC4021
     */
    public const CONTENT_TRANSFER_ENCODING = 'Content-Transfer-Encoding';

    /**
     * Content-Translation-Type
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8255#section-6 RFC8255
     */
    public const CONTENT_TRANSLATION_TYPE = 'Content-Translation-Type';

    /**
     * Content-Type
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.2.5 RFC4021
     */
    public const CONTENT_TYPE = 'Content-Type';

    /**
     * MIME-Version
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.2.1 RFC4021
     */
    public const MIME_VERSION = 'MIME-Version';
}
