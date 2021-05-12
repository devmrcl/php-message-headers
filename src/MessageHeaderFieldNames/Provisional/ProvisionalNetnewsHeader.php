<?php

namespace Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Provisional;

interface ProvisionalNetnewsHeader
{
    /**
     * Jabber-ID
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7259 RFC7259
     */
    public const JABBER_ID = 'Jabber-ID';

    /**
     * X-Archived-At
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5064#section-2.5 RFC5064
     */
    public const X_ARCHIVED_AT = 'X-Archived-At';

    /**
     * X-PGP-Sig
     *
     * @link https://ftp.isc.org/pub/pgpcontrol/FORMAT ISC
     */
    public const X_PGP_SIG = 'X-PGP-Sig';
}
