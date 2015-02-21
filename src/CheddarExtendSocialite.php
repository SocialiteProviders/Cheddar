<?php
namespace SocialiteProviders\Cheddar;

use SocialiteProviders\Manager\SocialiteWasCalled;

class CheddarExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('cheddar', __NAMESPACE__.'\Provider');
    }
}
