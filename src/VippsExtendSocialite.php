<?php

namespace Happyonlinegr\SocialiteProviderVipps;

use SocialiteProviders\Manager\SocialiteWasCalled;

class VippsExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('vipps', Provider::class);
    }
}