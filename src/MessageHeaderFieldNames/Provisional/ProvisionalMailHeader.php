<?php

namespace Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Provisional;

interface ProvisionalMailHeader
{
    /**
     * Apparently-To
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2076 RFC2076
     */
    public const APPARENTLY_TO = 'Apparently-To';

    /**
     * Author
     *
     * @link https://datatracker.ietf.org/doc/html/rfc9057 RFC9057
     */
    public const AUTHOR = 'Author';

    /**
     * EDIINT-Features
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6017 RFC6017
     */
    public const EDIINT_FEATURES = 'EDIINT-Features';

    /**
     * Eesst-Version
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7681#section-8.1 RFC7681
     */
    public const EESST_VERSION = 'Eesst-Version';

    /**
     * Errors-To
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2076#section-3.5 RFC2076
     */
    public const ERRORS_TO = 'Errors-To';

    /**
     * Form-Sub
     *
     * @link https://datatracker.ietf.org/doc/draft-levine-mailbomb-header/ DRAFT
     */
    public const FORM_SUB = 'Form-Sub';

    /**
     * Jabber-ID
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7259 RFC7259
     */
    public const JABBER_ID = 'Jabber-ID';

    /**
     * MMHS-Authorizing-Users
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7912 RFC7912
     */
    public const MMHS_AUTHORIZING_USERS = 'MMHS-Authorizing-Users';

    /**
     * Privicon
     *
     * @link https://datatracker.ietf.org/doc/draft-koenig-privicons/ DRAFT
     */
    public const PRIVICON = 'Privicon';

    /**
     * SIO-Label
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7444#section-4 RFC7444
     */
    public const SIO_LABEL = 'SIO-Label';

    /**
     * SIO-Label-History
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7444#section-5 RFC7444
     */
    public const SIO_LABEL_HISTORY = 'SIO-Label-History';

    /**
     * X-Archived-At
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5064#section-2.5 RFC5064
     */
    public const X_ARCHIVED_AT = 'X-Archived-At';

    /**
     * X-Mittente
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6109#section-8.1.6 RFC6109
     */
    public const X_MITTENTE = 'X-Mittente';

    /**
     * X-Ricevuta
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6109#section-8.1.2 RFC6109
     */
    public const X_RICEVUTA = 'X-Ricevuta';

    /**
     * X-Riferimento-Message-ID
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6109#section-8.1.1 RFC6109
     */
    public const X_RIFERIMENTO_MESSAGE_ID = 'X-Riferimento-Message-ID';

    /**
     * X-TipoRicevuta
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6109#section-8.1.5 RFC6109
     */
    public const X_TIPORICEVUTA = 'X-TipoRicevuta';

    /**
     * X-Trasporto
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6109#section-8.1.4 RFC6109
     */
    public const X_TRASPORTO = 'X-Trasporto';

    /**
     * X-VerificaSicurezza
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6109#section-8.1.3 RFC6109
     */
    public const X_VERIFICASICUREZZA = 'X-VerificaSicurezza';
}
