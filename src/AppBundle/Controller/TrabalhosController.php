<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Trabalhos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Trabalho controller.
 *
 * @Route("trabalhos")
 */
class TrabalhosController extends Controller
{
    /**
     * Lists all trabalho entities.
     *
     * @Route("/", name="trabalhos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trabalhos = $em->getRepository('AppBundle:Trabalhos')->findAll();

        return $this->render('trabalhos/index.html.twig', array(
            'trabalhos' => $trabalhos,
        ));
    }

    /**
     * Creates a new trabalho entity.
     *
     * @Route("/new", name="trabalhos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $trabalho = new Trabalho();
        $form = $this->createForm('AppBundle\Form\TrabalhosType', $trabalho);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trabalho);
            $em->flush($trabalho);

            return $this->redirectToRoute('trabalhos_show', array('id' => $trabalho->getId()));
        }

        return $this->render('trabalhos/new.html.twig', array(
            'trabalho' => $trabalho,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trabalho entity.
     *
     * @Route("/{id}", name="trabalhos_show")
     * @Method("GET")
     */
    public function showAction(Trabalhos $trabalho)
    {
        $deleteForm = $this->createDeleteForm($trabalho);

        return $this->render('trabalhos/show.html.twig', array(
            'trabalho' => $trabalho,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing trabalho entity.
     *
     * @Route("/{id}/edit", name="trabalhos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Trabalhos $trabalho)
    {
        $deleteForm = $this->createDeleteForm($trabalho);
        $editForm = $this->createForm('AppBundle\Form\TrabalhosType', $trabalho);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('trabalhos_edit', array('id' => $trabalho->getId()));
        }

        return $this->render('trabalhos/edit.html.twig', array(
            'trabalho' => $trabalho,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a trabalho entity.
     *
     * @Route("/{id}", name="trabalhos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Trabalhos $trabalho)
    {
        $form = $this->createDeleteForm($trabalho);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trabalho);
            $em->flush($trabalho);
        }

        return $this->redirectToRoute('trabalhos_index');
    }

    /**
     * Creates a form to delete a trabalho entity.
     *
     * @param Trabalhos $trabalho The trabalho entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Trabalhos $trabalho)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trabalhos_delete', array('id' => $trabalho->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
