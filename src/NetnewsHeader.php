<?php

namespace Mrcl\Utils\InternetStandards;

use Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Permanent\PermanentNetnewsHeader;
use Mrcl\Utils\InternetStandards\MessageHeaderFieldNames\Provisional\ProvisionalNetnewsHeader;

interface NetnewsHeader extends PermanentNetnewsHeader, ProvisionalNetnewsHeader
{
}
