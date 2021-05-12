<?php

namespace Mrcl\Utils\InternetStandards;

use Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Permanent\PermanentHttpHeader;
use Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Provisional\ProvisionalHttpHeader;

interface HttpHeader extends PermanentHttpHeader, ProvisionalHttpHeader
{
}
