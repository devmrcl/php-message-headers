# Message Headers

PHP library containing all permanent and provisional message headers listed in
the [IANA registry](https://www.iana.org/assignments/message-headers/message-headers.xhtml).

## Installation

```
composer require mrcl/message-headers
```

## Usage

### HTTP Headers

The `HttpHeader` interface contains all permanent and provisional HTTP headers

```php
use Mrcl\Utils\InternetStandards\HttpHeader;

HttpHeader::CONTENT_ENCODING                 // 'Content-Encoding'
HttpHeader::ACCESS_CONTROL_ALLOW_CREDENTIALS // 'Access-Control-Allow-Credentials'
```

#### Permanent HTTP Headers

```php
use Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Permanent\PermanentHttpHeader;

PermanentHttpHeader::CONTENT_ENCODING
```

#### Provisional HTTP Headers

```php
use Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Provisional\ProvisionalHttpHeader;

ProvisionalHttpHeader::ACCESS_CONTROL_ALLOW_CREDENTIALS
```

### Mail Headers

The `MailHeader` interface contains all permanent and provisional mail headers

```php
use Mrcl\Utils\InternetStandards\MailHeader;

MailHeader::CC            // 'Cc'
MailHeader::APPARENTLY_TO // 'Apparently-To'
```

#### Permanent Mail Headers

```php
use Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Permanent\PermanentMailHeader;

PermanentMailHeader::CC
```

#### Provisional Mail Headers

```php
use Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Provisional\ProvisionalMailHeader;

ProvisionalMailHeader::APPARENTLY_TO
```

### MIME Headers

The `MimeHeader` interface contains all permanent MIME headers

```php
use Mrcl\Utils\InternetStandards\MimeHeader;

MimeHeader::CONTENT_TYPE // 'Content-Type'
```

#### Permanent MIME Headers

```php
use Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Permanent\PermanentMimeHeader;

PermanentMimeHeader::CONTENT_TYPE
```

### Netnews Headers

The `NetnewsHeader` interface contains all permanent and provisional Netnews headers

```php
use Mrcl\Utils\InternetStandards\NetnewsHeader;

NetnewsHeader::NEWSGROUPS // 'Newsgroups'
NetnewsHeader::X_PGP_SIG  // 'X-PGP-Sig'
```

#### Permanent Netnews Headers

```php
use Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Permanent\PermanentNetnewsHeader;

PermanentNetnewsHeader::NEWSGROUPS
```

#### Provisional Netnews Headers

```php
use Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Provisional\ProvisionalNetnewsHeader;

ProvisionalNetnewsHeader::X_PGP_SIG
```