<?php
// src/Blogger/BlogBundle/Controller/BlogController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Blog controller.
 */
class BlogController extends Controller
{
    /**
     * Show a blog entry
     */
    public function showAction($id, $slug)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

        // Return entities where 'author' matches 'dsyph3r'
        //$em->getRepository('BloggerBlogBundle:Blog')->findBy(array('author' => 'dsyph3r'));

        // Return one entity where 'slug' matches 'symblog-tutorial'
        //$em->getRepository('BloggerBlogBundle:Blog')->findOneBySlug('symblog-tutorial');


        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        $comments = $em->getRepository('BloggerBlogBundle:Comment')
                   ->getCommentsForBlog($blog->getId());

                   

        return $this->render('BloggerBlogBundle:Blog:show.html.twig', array(
        'blog'      => $blog,
        'comments'  => $comments
        ));
    }
}