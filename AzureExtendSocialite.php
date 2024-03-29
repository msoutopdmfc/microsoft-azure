<?php

namespace Msoutopdmfc\Azure;

use Msoutopdmfc\Manager\SocialiteWasCalled;

class AzureExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'azure',
            __NAMESPACE__.'\Provider'
        );
    }
}
