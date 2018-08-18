<?php
/**
 * Created by PhpStorm.
 * User: rindra
 * Date: 12/08/18
 * Time: 18:08
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route({
     *     "fr": "/nombre-chancheux",
     *     "en": "/lucky-number"
     * }, name="lucky_number")
     *
     * @return Response
     */
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}