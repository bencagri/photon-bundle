## Photon for Symfony

Photon is an image acceleration and modification service for Jetpack-connected WordPress sites.

To use in symfony, PhotonBundle uses [Photon Wrapper](https://github.com/bencagri/photon-wrapper)
> compatibility Symfony 3.x, 4.x

### Installation

```php
composer require bencagri/photon-bundle
```

Then register the bundle in `app/AppKernel.php`

```php
<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            ....
            //Photon Bundle
            new \Bencagri\PhotonBundle\PhotonBundle(),
        ];
```

Thats it.

### Usage

There is a service that you can use in Symfony.

in your `controller`;
```php
use Photon\Wrapper\Effect\Filter;
use Photon\Wrapper\Effect\Width;
use Photon\Wrapper\Effects;

...

public function indexAction(Request $request)
{
    //get the service
    $generator = $this->get('bencagri.photon.service');

    //register the effects that you want to use
    $effects = new Effects(
        new Width(700),
        new Filter('emboss')
    );

    $imageUrl = 'https://images.com/my.jpg';
    
    //generate the picture
    $generator->generate($imageUrl,$effects);
}
```

> See all effects that you can use on Photon Wrapper [examples](https://github.com/bencagri/photon-wrapper/blob/master/examples/readme.md).

### Licence
* The [Photon Bundle](LICENCE) is open-sourced software licensed under the MIT license.
* The [Photon Wrapper](https://github.com/bencagri/photon-wrapper/blob/master/LICENCE) is open-sourced software licensed under the MIT license.
* The [Photon](https://code.trac.wordpress.org/browser/photon/LICENSE) is open-sourced software licenced under GNU GENERaL PUBLIC LICENCE
