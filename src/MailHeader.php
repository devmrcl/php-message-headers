<?php

namespace Mrcl\Utils\InternetStandards;

use Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Permanent\PermanentMailHeader;
use Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Provisional\ProvisionalMailHeader;

interface MailHeader extends PermanentMailHeader, ProvisionalMailHeader
{
}
