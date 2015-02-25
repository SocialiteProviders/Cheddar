<?php
namespace SocialiteProviders\Cheddar;

use SocialiteProviders\Manager\SocialiteWasCalled;

class CheddarExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'cheddar', __NAMESPACE__.'\Provider'
        );
    }
}
