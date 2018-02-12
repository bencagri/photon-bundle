<?php
namespace Bencagri\PhotonBundle\Service;

use Photon\Wrapper\Effects;
use Photon\Wrapper\Generate;

class PhotonService
{

    /**
     * @var
     */
    protected $imageUrl;


    /**
     * @var
     */
    protected $effects;


    public function generate()
    {
        if ( !$this->getImageUrl()) {
            throw new \InvalidArgumentException('Invalid ImageUrl');
        }

        if ( !$this->getEffects()) {
            throw new \InvalidArgumentException('Please provide at least one effect');
        }

        $generator = new Generate($this->getImageUrl(), $this->getEffects());

        $generator->process();
    }

    /**
     * @return mixed
     */
    public function getEffects()
    {
        return $this->effects;
    }

    /**
     * @param mixed $effects
     */
    public function setEffects(Effects $effects)
    {
        $this->effects = $effects;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param mixed $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }
}