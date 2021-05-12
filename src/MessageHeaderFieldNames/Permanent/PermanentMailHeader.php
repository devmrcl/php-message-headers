<?php

namespace Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Permanent;

interface PermanentMailHeader
{
    /**
     * Accept-Language
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.27 RFC4021
     */
    public const ACCEPT_LANGUAGE = 'Accept-Language';

    /**
     * Alternate-Recipient
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.40 RFC4021
     */
    public const ALTERNATE_RECIPIENT = 'Alternate-Recipient';

    /**
     * ARC-Authentication-Results
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8617#section-4.1.1 RFC8617
     */
    public const ARC_AUTHENTICATION_RESULTS = 'ARC-Authentication-Results';

    /**
     * ARC-Message-Signature
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8617#section-4.1.2 RFC8617
     */
    public const ARC_MESSAGE_SIGNATURE = 'ARC-Message-Signature';

    /**
     * ARC-Seal
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8617#section-4.1.3 RFC8617
     */
    public const ARC_SEAL = 'ARC-Seal';

    /**
     * Archived-At
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5064 RFC5064
     */
    public const ARCHIVED_AT = 'Archived-At';

    /**
     * Authentication-Results
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8601#section-6.1 RFC8601
     */
    public const AUTHENTICATION_RESULTS = 'Authentication-Results';

    /**
     * Auto-Submitted
     * @link https://datatracker.ietf.org/doc/html/rfc3834#section-5 RFC3834
     */
    public const AUTO_SUBMITTED = 'Auto-Submitted';

    /**
     * Autoforwarded
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.61 RFC4021
     */
    public const AUTOFORWARDED = 'Autoforwarded';

    /**
     * Autosubmitted
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.60 RFC4021
     */
    public const AUTOSUBMITTED = 'Autosubmitted';

    /**
     * Bcc
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.7 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.3 RFC5322
     */
    public const BCC = 'Bcc';

    /**
     * Cc
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.6 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.3 RFC5322
     */
    public const CC = 'Cc';

    /**
     * Comments
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.12 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.5 RFC5322
     */
    public const COMMENTS = 'Comments';

    /**
     * Content-Identifier
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.47 RFC4021
     */
    public const CONTENT_IDENTIFIER = 'Content-Identifier';

    /**
     * Content-Return
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.42 RFC4021
     */
    public const CONTENT_RETURN = 'Content-Return';

    /**
     * Conversion
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.57 RFC4021
     */
    public const CONVERSION = 'Conversion';

    /**
     * Conversion-With-Loss
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.58 RFC4021
     */
    public const CONVERSION_WITH_LOSS = 'Conversion-With-Loss';

    /**
     * DL-Expansion-History
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.39 RFC4021
     */
    public const DL_EXPANSION_HISTORY = 'DL-Expansion-History';

    /**
     * Date
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.1 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.3 RFC5322
     */
    public const DATE = 'Date';

    /**
     * Deferred-Delivery
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.65 RFC4021
     */
    public const DEFERRED_DELIVERY = 'Deferred-Delivery';

    /**
     * Delivery-Date
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.48 RFC4021
     */
    public const DELIVERY_DATE = 'Delivery-Date';

    /**
     * Discarded-X400-IPMS-Extensions
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.62 RFC4021
     */
    public const DISCARDED_X400_IPMS_EXTENSIONS = 'Discarded-X400-IPMS-Extensions';

    /**
     * Discarded-X400-MTS-Extensions
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.63 RFC4021
     */
    public const DISCARDED_X400_MTS_EXTENSIONS = 'Discarded-X400-MTS-Extensions';

    /**
     * Disclose-Recipients
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.64 RFC4021
     */
    public const DISCLOSE_RECIPIENTS = 'Disclose-Recipients';

    /**
     * Disposition-Notification-Options
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.26 RFC4021
     */
    public const DISPOSITION_NOTIFICATION_OPTIONS = 'Disposition-Notification-Options';

    /**
     * Disposition-Notification-To
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.25 RFC4021
     */
    public const DISPOSITION_NOTIFICATION_TO = 'Disposition-Notification-To';

    /**
     * DKIM-Signature
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6376#section-3.5 RFC6376
     */
    public const DKIM_SIGNATURE = 'DKIM-Signature';

    /**
     * Downgraded-Bcc
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5504 RFC5504
     * @link https://datatracker.ietf.org/doc/html/rfc6857 RFC6857
     */
    public const DOWNGRADED_BCC = 'Downgraded-Bcc';

    /**
     * Downgraded-Cc
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5504 RFC5504
     * @link https://datatracker.ietf.org/doc/html/rfc6857 RFC6857
     */
    public const DOWNGRADED_CC = 'Downgraded-Cc';

    /**
     * Downgraded-Disposition-Notification-To
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5504 RFC5504
     * @link https://datatracker.ietf.org/doc/html/rfc6857 RFC6857
     */
    public const DOWNGRADED_DISPOSITION_NOTIFICATION_TO = 'Downgraded-Disposition-Notification-To';

    /**
     * Downgraded-Final-Recipient
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6857#section-3.1.10 RFC6857
     */
    public const DOWNGRADED_FINAL_RECIPIENT = 'Downgraded-Final-Recipient';

    /**
     * Downgraded-From
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5504 RFC5504
     * @link https://datatracker.ietf.org/doc/html/rfc6857#section-3.1.10 RFC6857
     */
    public const DOWNGRADED_FROM = 'Downgraded-From';

    /**
     * Downgraded-In-Reply-To
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.9 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc6857#section-3.1.10 RFC6857
     */
    public const DOWNGRADED_IN_REPLY_TO = 'Downgraded-In-Reply-To';

    /**
     * Downgraded-Mail-From
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5504 RFC5504
     * @link https://datatracker.ietf.org/doc/html/rfc6857#section-3.1.10 RFC6857
     */
    public const DOWNGRADED_MAIL_FROM = 'Downgraded-Mail-From';

    /**
     * Downgraded-Message-Id
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6857#section-3.1.10 RFC6857
     */
    public const DOWNGRADED_MESSAGE_ID = 'Downgraded-Message-Id';

    /**
     * Downgraded-Original-Recipient
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6857#section-3.1.10 RFC6857
     */
    public const DOWNGRADED_ORIGINAL_RECIPIENT = 'Downgraded-Original-Recipient';

    /**
     * Downgraded-Rcpt-To
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5504 RFC5504
     * @link https://datatracker.ietf.org/doc/html/rfc6857 RFC6857
     */
    public const DOWNGRADED_RCPT_TO = 'Downgraded-Rcpt-To';

    /**
     * Downgraded-References
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.10 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc6857#section-3.1.10 RFC6857
     */
    public const DOWNGRADED_REFERENCES = 'Downgraded-References';

    /**
     * Downgraded-Reply-To
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5504 RFC5504
     * @link https://datatracker.ietf.org/doc/html/rfc6857 RFC6857
     */
    public const DOWNGRADED_REPLY_TO = 'Downgraded-Reply-To';

    /**
     * Downgraded-Resent-Bcc
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5504 RFC5504
     * @link https://datatracker.ietf.org/doc/html/rfc6857 RFC6857
     */
    public const DOWNGRADED_RESENT_BCC = 'Downgraded-Resent-Bcc';

    /**
     * Downgraded-Resent-Cc
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5504 RFC5504
     * @link https://datatracker.ietf.org/doc/html/rfc6857 RFC6857
     */
    public const DOWNGRADED_RESENT_CC = 'Downgraded-Resent-Cc';

    /**
     * Downgraded-Resent-From
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5504 RFC5504
     * @link https://datatracker.ietf.org/doc/html/rfc6857 RFC6857
     */
    public const DOWNGRADED_RESENT_FROM = 'Downgraded-Resent-From';

    /**
     * Downgraded-Resent-Reply-To
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5504 RFC5504
     * @link https://datatracker.ietf.org/doc/html/rfc6857 RFC6857
     */
    public const DOWNGRADED_RESENT_REPLY_TO = 'Downgraded-Resent-Reply-To';

    /**
     * Downgraded-Resent-Sender
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5504 RFC5504
     * @link https://datatracker.ietf.org/doc/html/rfc6857 RFC6857
     */
    public const DOWNGRADED_RESENT_SENDER = 'Downgraded-Resent-Sender';

    /**
     * Downgraded-Resent-To
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5504 RFC5504
     * @link https://datatracker.ietf.org/doc/html/rfc6857 RFC6857
     */
    public const DOWNGRADED_RESENT_TO = 'Downgraded-Resent-To';

    /**
     * Downgraded-Return-Path
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5504 RFC5504
     * @link https://datatracker.ietf.org/doc/html/rfc6857 RFC6857
     */
    public const DOWNGRADED_RETURN_PATH = 'Downgraded-Return-Path';

    /**
     * Downgraded-Sender
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5504 RFC5504
     * @link https://datatracker.ietf.org/doc/html/rfc6857 RFC6857
     */
    public const DOWNGRADED_SENDER = 'Downgraded-Sender';

    /**
     * Downgraded-To
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5504 RFC5504
     * @link https://datatracker.ietf.org/doc/html/rfc6857 RFC6857
     */
    public const DOWNGRADED_TO = 'Downgraded-To';

    /**
     * Encoding
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.30 RFC4021
     */
    public const ENCODING = 'Encoding';

    /**
     * Encrypted
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.24 RFC4021
     */
    public const ENCRYPTED = 'Encrypted';

    /**
     * Expires
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.50 RFC4021
     */
    public const EXPIRES = 'Expires';

    /**
     * Expiry-Date
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.49 RFC4021
     */
    public const EXPIRY_DATE = 'Expiry-Date';

    /**
     * From
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.2 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.2 RFC5322
     * @link https://datatracker.ietf.org/doc/html/rfc6854 RFC6854
     */
    public const FROM = 'From';

    /**
     * Generate-Delivery-Report
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.43 RFC4021
     */
    public const GENERATE_DELIVERY_REPORT = 'Generate-Delivery-Report';

    /**
     * Importance
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.52 RFC4021
     */
    public const IMPORTANCE = 'Importance';

    /**
     * In-Reply-To
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.4 RFC5322
     */
    public const IN_REPLY_TO = 'In-Reply-To';

    /**
     * Incomplete-Copy
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.53 RFC4021
     */
    public const INCOMPLETE_COPY = 'Incomplete-Copy';

    /**
     * Keywords
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.13 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.5 RFC5322
     */
    public const KEYWORDS = 'Keywords';

    /**
     * Language
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.56 RFC4021
     */
    public const LANGUAGE = 'Language';

    /**
     * Latest-Delivery-Time
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.66 RFC4021
     */
    public const LATEST_DELIVERY_TIME = 'Latest-Delivery-Time';

    /**
     * List-Archive
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.31 RFC4021
     */
    public const LIST_ARCHIVE = 'List-Archive';

    /**
     * List-Help
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.32 RFC4021
     */
    public const LIST_HELP = 'List-Help';

    /**
     * List-ID
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.33 RFC4021
     */
    public const LIST_ID = 'List-ID';

    /**
     * List-Owner
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.34 RFC4021
     */
    public const LIST_OWNER = 'List-Owner';

    /**
     * List-Post
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.35 RFC4021
     */
    public const LIST_POST = 'List-Post';

    /**
     * List-Subscribe
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.36 RFC4021
     */
    public const LIST_SUBSCRIBE = 'List-Subscribe';

    /**
     * List-Unsubscribe
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.37 RFC4021
     */
    public const LIST_UNSUBSCRIBE = 'List-Unsubscribe';

    /**
     * List-Unsubscribe-Post
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8058#section-4 RFC8058
     */
    public const LIST_UNSUBSCRIBE_POST = 'List-Unsubscribe-Post';

    /**
     * Message-Context
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.38 RFC4021
     */
    public const MESSAGE_CONTEXT = 'Message-Context';

    /**
     * Message-ID
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.8 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.4 RFC5322
     */
    public const MESSAGE_ID = 'Message-ID';

    /**
     * Message-Type
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.59 RFC4021
     */
    public const MESSAGE_TYPE = 'Message-Type';

    /**
     * MMHS-Exempted-Address
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6477#section-3.1 RFC6477
     * @see ACP123 Appendix A1.1 and Appendix B.105
     */
    public const MMHS_EXEMPTED_ADDRESS = 'MMHS-Exempted-Address';

    /**
     * MMHS-Extended-Authorisation-Info
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6477#section-3.2 RFC6477
     * @see ACP123 Appendix A1.2 and Appendix B.106
     */
    public const MMHS_EXTENDED_AUTHORISATION_INFO = 'MMHS-Extended-Authorisation-Info';

    /**
     * MMHS-Subject-Indicator-Codes
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6477#section-3.3 RFC6477
     * @see ACP123 Appendix A1.3 and Appendix B.107
     */
    public const MMHS_SUBJECT_INDICATOR_CODES = 'MMHS-Subject-Indicator-Codes';

    /**
     * MMHS-Handling-Instructions
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6477#section-3.4 RFC6477
     * @see ACP123 Appendix A1.4 and Appendix B.108
     */
    public const MMHS_HANDLING_INSTRUCTIONS = 'MMHS-Handling-Instructions';

    /**
     * MMHS-Message-Instructions
     *
     * @link 9https://datatracker.ietf.org/doc/html/rfc6477#section-3.5 RFC6477
     * @see ACP123 Appendix A1.5 and Appendix B.109
     */
    public const MMHS_MESSAGE_INSTRUCTIONS = 'MMHS-Message-Instructions';

    /**
     * MMHS-Codress-Message-Indicator
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6477#section-3.6 RFC6477
     * @see ACP123 Appendix A1.6 and Appendix B.110
     */
    public const MMHS_CODRESS_MESSAGE_INDICATOR = 'MMHS-Codress-Message-Indicator';

    /**
     * MMHS-Originator-Reference
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6477#section-3.7 RFC6477
     * @see ACP123 Appendix A1.7 and Appendix B.111
     */
    public const MMHS_ORIGINATOR_REFERENCE = 'MMHS-Originator-Reference';

    /**
     * MMHS-Primary-Precedence
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6477#section-3.8 RFC6477
     * @see ACP123 Appendix A1.8 and Appendix B.101
     */
    public const MMHS_PRIMARY_PRECEDENCE = 'MMHS-Primary-Precedence';

    /**
     * MMHS-Copy-Precedence
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6477#section-3.9 RFC6477
     * @see ACP123 Appendix A1.9 and Appendix B.102
     */
    public const MMHS_COPY_PRECEDENCE = 'MMHS-Copy-Precedence';

    /**
     * MMHS-Message-Type
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6477#section-3.10 RFC6477
     * @see ACP123 Appendix A1.10 and Appendix B.103
     */
    public const MMHS_MESSAGE_TYPE = 'MMHS-Message-Type';

    /**
     * MMHS-Other-Recipients-Indicator-To
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6477#section-3.11 RFC6477
     * @see ACP123 Appendix A1.12 and Appendix B.113
     */
    public const MMHS_OTHER_RECIPIENTS_INDICATOR_TO = 'MMHS-Other-Recipients-Indicator-To';

    /**
     * MMHS-Other-Recipients-Indicator-CC
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6477#section-3.12 RFC6477
     * @see ACP123 Appendix A1.12 and Appendix B.113
     */
    public const MMHS_OTHER_RECIPIENTS_INDICATOR_CC = 'MMHS-Other-Recipients-Indicator-CC';

    /**
     * MMHS-Acp127-Message-Identifier
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6477#section-3.13 RFC6477
     * @see ACP123 Appendix A1.14 and Appendix B.116
     */
    public const MMHS_ACP127_MESSAGE_IDENTIFIER = 'MMHS-Acp127-Message-Identifier';

    /**
     * MMHS-Originator-PLAD
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6477#section-3.14 RFC6477
     * @see ACP123 Appendix A1.15 and Appendix B.117
     */
    public const MMHS_ORIGINATOR_PLAD = 'MMHS-Originator-PLAD';

    /**
     * MT-Priority
     *
     * @link https://datatracker.ietf.org/doc/html/rfc6758#section-4 RFC6758
     */
    public const MT_PRIORITY = 'MT-Priority';

    /**
     * Obsoletes
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.45 RFC4021
     */
    public const OBSOLETES = 'Obsoletes';

    /**
     * Organization
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7681#section-8.2 RFC7681
     */
    public const ORGANIZATION = 'Organization';

    /**
     * Original-Encoded-Information-Types
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.41 RFC4021
     */
    public const ORIGINAL_ENCODED_INFORMATION_TYPES = 'Original-Encoded-Information-Types';

    /**
     * Original-From
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5703#section-5 RFC5703
     */
    public const ORIGINAL_FROM = 'Original-From';

    /**
     * Original-Message-ID
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.28 RFC4021
     */
    public const ORIGINAL_MESSAGE_ID = 'Original-Message-ID';

    /**
     * Original-Recipient
     *
     * @link https://datatracker.ietf.org/doc/html/rfc3798#section-2.3 RFC3798
     * @link https://datatracker.ietf.org/doc/html/rfc5337 RFC5337
     */
    public const ORIGINAL_RECIPIENT = 'Original-Recipient';

    /**
     * Originator-Return-Address
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.67 RFC4021
     */
    public const ORIGINATOR_RETURN_ADDRESS = 'Originator-Return-Address';

    /**
     * Original-Subject
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5703#section-5 RFC5703
     */
    public const ORIGINAL_SUBJECT = 'Original-Subject';

    /**
     * PICS-Label
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.29 RFC4021
     */
    public const PICS_LABEL = 'PICS-Label';

    /**
     * Prevent-NonDelivery-Report
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.44 RFC4021
     */
    public const PREVENT_NONDELIVERY_REPORT = 'Prevent-NonDelivery-Report';

    /**
     * Priority
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.54 RFC4021
     */
    public const PRIORITY = 'Priority';

    /**
     * Received
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.23 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.7 RFC5322
     * @link https://datatracker.ietf.org/doc/html/rfc5321#section-3.7.2 RFC5321
     */
    public const RECEIVED = 'Received';

    /**
     * Received-SPF
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7208#section-9.1 RFC7208
     */
    public const RECEIVED_SPF = 'Received-SPF';

    /**
     * References
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.4 RFC5322
     */
    public const REFERENCES = 'References';

    /**
     * Reply-By
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.51 RFC4021
     */
    public const REPLY_BY = 'Reply-By';

    /**
     * Reply-To
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.4 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.2 RFC5322
     */
    public const REPLY_TO = 'Reply-To';

    /**
     * Require-Recipient-Valid-Since
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7293 RFC7293
     */
    public const REQUIRE_RECIPIENT_VALID_SINCE = 'Require-Recipient-Valid-Since';

    /**
     * Resent-Bcc
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.19 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.6 RFC5322
     */
    public const RESENT_BCC = 'Resent-Bcc';

    /**
     * Resent-Cc
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.18 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.6 RFC5322
     */
    public const RESENT_CC = 'Resent-Cc';

    /**
     * Resent-Date
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.14 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.6 RFC5322
     */
    public const RESENT_DATE = 'Resent-Date';

    /**
     * Resent-From
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.15 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.6 RFC5322
     * @link https://datatracker.ietf.org/doc/html/rfc6854#section-2.2 RFC6854
     */
    public const RESENT_FROM = 'Resent-From';

    /**
     * Resent-Message-ID
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.21 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.6 RFC5322
     */
    public const RESENT_MESSAGE_ID = 'Resent-Message-ID';

    /**
     * Resent-Reply-To
     *
     * @deprecated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.20 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-4.5.6 RFC5322
     */
    public const RESENT_REPLY_TO = 'Resent-Reply-To';

    /**
     * Resent-Sender
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.16 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.6 RFC5322
     * @link https://datatracker.ietf.org/doc/html/rfc6854#section-2.2 RFC6854
     */
    public const RESENT_SENDER = 'Resent-Sender';

    /**
     * Resent-To
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.17 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.6 RFC5322
     */
    public const RESENT_TO = 'Resent-To';

    /**
     * Return-Path
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.22 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.7 RFC5322
     */
    public const RETURN_PATH = 'Return-Path';

    /**
     * Sender
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.3 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.2 RFC5322
     * @link https://datatracker.ietf.org/doc/html/rfc6854#section-2.1 RFC6854
     */
    public const SENDER = 'Sender';

    /**
     * Sensitivity
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.55 RFC4021
     */
    public const SENSITIVITY = 'Sensitivity';

    /**
     * Solicitation
     *
     * @link https://datatracker.ietf.org/doc/html/rfc3865 RFC3865
     */
    public const SOLICITATION = 'Solicitation';

    /**
     * Subject
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.11 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-2.2.3 RFC5322
     */
    public const SUBJECT = 'Subject';

    /**
     * Supersedes
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.46 RFC4021
     */
    public const SUPERSEDES = 'Supersedes';

    /**
     * TLS-Report-Domain
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8460#section-5.3 RFC8460
     */
    public const TLS_REPORT_DOMAIN = 'TLS-Report-Domain';

    /**
     * TLS-Report-Submitter
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8460#section-5.3 RFC8460
     */
    public const TLS_REPORT_SUBMITTER = 'TLS-Report-Submitter';

    /**
     * TLS-Required
     *
     * @link https://datatracker.ietf.org/doc/html/rfc8689#section-3 RFC8689
     */
    public const TLS_REQUIRED = 'TLS-Required';

    /**
     * To
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.5 RFC4021
     * @link https://datatracker.ietf.org/doc/html/rfc5322#section-3.6.3 RFC5322
     */
    public const TO = 'To';

    /**
     * VBR-Info
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5518#section-4 RFC5518
     */
    public const VBR_INFO = 'VBR-Info';

    /**
     * X400-Content-Identifier
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.68 RFC4021
     */
    public const X400_CONTENT_IDENTIFIER = 'X400-Content-Identifier';

    /**
     * X400-Content-Return
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.69 RFC4021
     */
    public const X400_CONTENT_RETURN = 'X400-Content-Return';

    /**
     * X400-Content-Type
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.70 RFC4021
     */
    public const X400_CONTENT_TYPE = 'X400-Content-Type';

    /**
     * X400-MTS-Identifier
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.71 RFC4021
     */
    public const X400_MTS_IDENTIFIER = 'X400-MTS-Identifier';

    /**
     * X400-Originator
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.72 RFC4021
     */
    public const X400_ORIGINATOR = 'X400-Originator';

    /**
     * X400-Received
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.73 RFC4021
     */
    public const X400_RECEIVED = 'X400-Received';

    /**
     * X400-Recipients
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.74 RFC4021
     */
    public const X400_RECIPIENTS = 'X400-Recipients';

    /**
     * X400-Trace
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4021#section-2.1.75 RFC4021
     */
    public const X400_TRACE = 'X400-Trace';
}
