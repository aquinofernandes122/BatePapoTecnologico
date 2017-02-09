<?php

namespace AppBundle\Controller;

use AppBundle\Entity\MiniCurso;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Minicurso controller.
 *
 * @Route("minicurso")
 */
class MiniCursoController extends Controller
{
    /**
     * Lists all miniCurso entities.
     *
     * @Route("/", name="minicurso_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $miniCursos = $em->getRepository('AppBundle:MiniCurso')->findAll();

        return $this->render('minicurso/index.html.twig', array(
            'miniCursos' => $miniCursos,
        ));
    }

    /**
     * Creates a new miniCurso entity.
     *
     * @Route("/new", name="minicurso_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $miniCurso = new Minicurso();
        $form = $this->createForm('AppBundle\Form\MiniCursoType', $miniCurso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($miniCurso);
            $em->flush($miniCurso);

            return $this->redirectToRoute('minicurso_show', array('id' => $miniCurso->getId()));
        }

        return $this->render('minicurso/new.html.twig', array(
            'miniCurso' => $miniCurso,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a miniCurso entity.
     *
     * @Route("/{id}", name="minicurso_show")
     * @Method("GET")
     */
    public function showAction(MiniCurso $miniCurso)
    {
        $deleteForm = $this->createDeleteForm($miniCurso);

        return $this->render('minicurso/show.html.twig', array(
            'miniCurso' => $miniCurso,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing miniCurso entity.
     *
     * @Route("/{id}/edit", name="minicurso_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, MiniCurso $miniCurso)
    {
        $deleteForm = $this->createDeleteForm($miniCurso);
        $editForm = $this->createForm('AppBundle\Form\MiniCursoType', $miniCurso);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('minicurso_edit', array('id' => $miniCurso->getId()));
        }

        return $this->render('minicurso/edit.html.twig', array(
            'miniCurso' => $miniCurso,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a miniCurso entity.
     *
     * @Route("/{id}", name="minicurso_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, MiniCurso $miniCurso)
    {
        $form = $this->createDeleteForm($miniCurso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($miniCurso);
            $em->flush($miniCurso);
        }

        return $this->redirectToRoute('minicurso_index');
    }

    /**
     * Creates a form to delete a miniCurso entity.
     *
     * @param MiniCurso $miniCurso The miniCurso entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(MiniCurso $miniCurso)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('minicurso_delete', array('id' => $miniCurso->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
