<?php

namespace VKR\SymfonyLaravelBCryptBridge;

use Symfony\Component\PasswordHasher\Hasher\NativePasswordHasher;

class SymfonyEncoderWrapper
{
    /**
     * @param OptionsBag $optionsBag
     * @return NativePasswordHasher
     */
    public function getEncoder(OptionsBag $optionsBag): NativePasswordHasher
    {
        $encoder = new NativePasswordHasher($optionsBag->getRounds(), null, $optionsBag->getCost());
        return $encoder;
    }
}
