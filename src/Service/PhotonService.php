<?php
namespace Bencagri\PhotonBundle\Service;

use Photon\Wrapper\Effects;
use Photon\Wrapper\Generate;

class PhotonService
{
    public function generate($imageUrl, Effects $effects)
    {
        return new Generate($imageUrl, $effects);
    }
}