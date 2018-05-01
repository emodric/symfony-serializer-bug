<?php

declare(strict_types=1);

namespace AppBundle\Normalizer;

use AppBundle\Entity\Foo;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

final class FooNormalizer implements NormalizerInterface
{
    public function normalize($object, $format = null, array $context = array())
    {
        return [
            'foo_bar' => $object->fooBar,
            'foo_baz' => $object->fooBaz,
        ];
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof Foo && $data->fooBar === 'foo';
    }
}
