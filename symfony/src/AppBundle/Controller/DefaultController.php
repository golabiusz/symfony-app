<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // Redis - session test
        $this->get('session')->set('test', 'TEST');
        $ses = $this->get('session')->get('test');
        dump($ses);
        // Redis - replication test
        $this->get('snc_redis.cache')->incr('foo:bar');
        $foo = $this->get('snc_redis.cache')->get('foo:bar');
        dump($foo);
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
}
