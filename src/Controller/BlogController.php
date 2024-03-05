<?php
declare(strict_types=1);

namespace App\Controller;

use Random\RandomException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController
{
    /**
     * @throws RandomException
     */
    #[Route('/blog', name: 'blog_list')]
    public function list(): Response
    {
        $max    = 100;
        $number = random_int(0, $max);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}