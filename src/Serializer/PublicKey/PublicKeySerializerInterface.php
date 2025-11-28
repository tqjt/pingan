<?php
declare(strict_types=1);

namespace Tqjt\Pingan\Serializer\PublicKey;

use Tqjt\Pingan\Crypto\Key\PublicKeyInterface;

interface PublicKeySerializerInterface
{
    /**
     * @param  PublicKeyInterface $key
     * @return string
     */
    public function serialize(PublicKeyInterface $key): string;

    /**
     * @param  string $formattedKey
     * @return PublicKeyInterface
     */
    public function parse(string $formattedKey): PublicKeyInterface;
}
