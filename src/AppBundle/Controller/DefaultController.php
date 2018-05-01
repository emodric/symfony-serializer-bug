<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Foo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $serializer = $this->get('serializer');

        return new JsonResponse(
            $serializer->serialize(new Foo('foo', 'bar'), 'json')
        );
    }
}
