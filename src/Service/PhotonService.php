<?php
namespace Bencagri\PhotonBundle\Service;

use Photon\Wrapper\Effects;
use Photon\Wrapper\Generate;

class PhotonService
{
    public function generate($imageUrl, Effects $effects)
    {
        $generator = new Generate($imageUrl, $effects);
        $generator->process();
    }
}