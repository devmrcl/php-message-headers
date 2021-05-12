<?php

namespace Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Permanent;

interface PermanentNetnewsHeader
{
    /**
     * Also-Control
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc1849#section-6.15 RFC1849
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.3 RFC5536
     */
    public const ALSO_CONTROL = 'Also-Control';

    /**
     * Approved
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2.1 RFC5536
     */
    public const APPROVED = 'Approved';

    /**
     * Archive
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2.2 RFC5536
     */
    public const ARCHIVE = 'Archive';

    /**
     * Archived-At
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5064 RFC5064
     */
    public const ARCHIVED_AT = 'Archived-At';

    /**
     * Article-Names
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc1849#section-6.17 RFC1849
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.3 RFC5536
     */
    public const ARTICLE_NAMES = 'Article-Names';

    /**
     * Article-Updates
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc1849#section-6.18 RFC1849
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.3 RFC5536
     */
    public const ARTICLE_UPDATES = 'Article-Updates';

    /**
     * Cancel-Key
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8315#section-2.2 RFC8315
     */
    public const CANCEL_KEY = 'Cancel-Key';

    /**
     * Cancel-Lock
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8315#section-2.1 RFC8315
     */
    public const CANCEL_LOCK = 'Cancel-Lock';

    /**
     * Comments
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.5 RFC5322
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2 RFC5536
     */
    public const COMMENTS = 'Comments';

    /**
     * Control
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2.3 RFC5536
     */
    public const CONTROL = 'Control';

    /**
     * Date
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.3 RFC5322
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.1.1 RFC5536
     */
    public const DATE = 'Date';

    /**
     * Date-Received
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc0850#section-2.2.4 RFC0850
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.3 RFC5536
     */
    public const DATE_RECEIVED = 'Date-Received';

    /**
     * Distribution
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2.4 RFC5536
     */
    public const DISTRIBUTION = 'Distribution';

    /**
     * Expires
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2.5 RFC5536
     */
    public const EXPIRES = 'Expires';

    /**
     * Followup-To
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2.6 RFC5536
     */
    public const FOLLOWUP_TO = 'Followup-To';

    /**
     * From
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.2 RFC5322
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.1.2 RFC5536
     */
    public const FROM = 'From';

    /**
     * Injection-Date
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2.7 RFC5536
     */
    public const INJECTION_DATE = 'Injection-Date';

    /**
     * Injection-Info
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2.8 RFC5536
     */
    public const INJECTION_INFO = 'Injection-Info';

    /**
     * Keywords
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.5 RFC5322
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2 RFC5536
     */
    public const KEYWORDS = 'Keywords';

    /**
     * Lines
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.3.1 RFC5536
     * @link https://datatracker.ietf.org/doc/html/rfc3977 RFC3977
     */
    public const LINES = 'Lines';

    /**
     * Message-ID
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.4 RFC5322
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.1.3 RFC5536
     */
    public const MESSAGE_ID = 'Message-ID';

    /**
     * Newsgroups
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.1.4 RFC5536
     */
    public const NEWSGROUPS = 'Newsgroups';

    /**
     * NNTP-Posting-Date
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2.7 RFC5536
     */
    public const NNTP_POSTING_DATE = 'NNTP-Posting-Date';

    /**
     * NNTP-Posting-Host
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2980#section-3.4.1 RFC2980
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2.8 RFC5536
     */
    public const NNTP_POSTING_HOST = 'NNTP-Posting-Host';

    /**
     * Organization
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2.9 RFC5536
     */
    public const ORGANIZATION = 'Organization';

    /**
     * Original-Sender
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5537#section-3.10.3 RFC5537
     */
    public const ORIGINAL_SENDER = 'Original-Sender';

    /**
     * Path
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.1.5 RFC5536
     */
    public const PATH = 'Path';

    /**
     * Posting-Version
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc0850#section-2.1.2 RFC0850
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.3 RFC5536
     */
    public const POSTING_VERSION = 'Posting-Version';

    /**
     * References
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.4 RFC5322
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2.10 RFC5536
     */
    public const REFERENCES = 'References';

    /**
     * Relay-Version
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc0850#section-2.1.1 RFC0850
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.3 RFC5536
     */
    public const RELAY_VERSION = 'Relay-Version';

    /**
     * Reply-To
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.2 RFC5322
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2 RFC5536
     */
    public const REPLY_TO = 'Reply-To';

    /**
     * See-Also
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc1849#section-6.16 RFC1849
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.3 RFC5536
     */
    public const SEE_ALSO = 'See-Also';

    /**
     * Sender
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.2 RFC5322
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2 RFC5536
     */
    public const SENDER = 'Sender';

    /**
     * Subject
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-2.2.3 RFC5322
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.1.6 RFC5536
     */
    public const SUBJECT = 'Subject';

    /**
     * Summary
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2.11 RFC5536
     */
    public const SUMMARY = 'Summary';

    /**
     * Supersedes
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2.12 RFC5536
     * @link https://datatracker.ietf.org/doc/html/rfc2156#section-5.3.4 RFC2156
     */
    public const SUPERSEDES = 'Supersedes';

    /**
     * User-Agent
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2.13 RFC5536
     * @link https://datatracker.ietf.org/doc/html/rfc2616#section-14.43 RFC2616
     */
    public const USER_AGENT = 'User-Agent';

    /**
     * Xref
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5536#section-3.2.14 RFC5536
     */
    public const XREF = 'Xref';
}
