<?php
declare(strict_types=1);

namespace Tqjt\Pingan\Serializer\PrivateKey;

use Tqjt\Pingan\Crypto\Key\PrivateKeyInterface;

interface PrivateKeySerializerInterface
{
    /**
     *
     * @param  PrivateKeyInterface $key
     * @return string
     */
    public function serialize(PrivateKeyInterface $key): string;

    /**
     *
     * @param  string $formattedKey
     * @return PrivateKeyInterface
     */
    public function parse(string $formattedKey): PrivateKeyInterface;
}
