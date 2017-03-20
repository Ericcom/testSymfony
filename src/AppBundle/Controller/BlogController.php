<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\User;

class BlogController extends Controller
{
    /**
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog_list")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:User')
            ->findAllOrderedByName();

        $products[0]->setUsername('2502sdfdsf');
        $em->flush();

        return new Response($products[0]->getUsername());

        $product = new User();
        $product->setUsername('Keyboard');
        $product->setEmail('sdfsdf');
        $product->setPassword('Ergonomic and stylish!');
        $product->setNickname('Ergonomic and stylish!');


        var_dump($product);

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        // 告诉Doctrine你希望（最终）存储Product对象（还没有语句执行）
//        $em->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        // 真正执行语句（如，INSERT 查询）
        $em->flush();

        return new Response('Saved new product with id '.$product->getId());










        $name = 'yl';
        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setFrom('yinliang@xiaozhu.com')
            ->setTo('496647974@qq.com')
            ->setBody('sdfsfdsf');
            /*
             * If you also want to include a plaintext version of the message
             * 如果你同时希望包容一个“纯文本”版本的信息
            ->addPart(
                $this->renderView(
                    'Emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */
        ;
        $result = $this->get('mailer')->send($message);
        var_dump($result);

//        return $this->render(...);
        $number = mt_rand(0, 100);
//

        return new Response(
            '<html><body>Luckys number: '.$number.'</body></html>'
        );
    }

    /**
     * Matches /blog/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function showAction($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...
    }
}