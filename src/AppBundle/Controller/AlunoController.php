<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Aluno;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Aluno controller.
 *
 * @Route("aluno")
 */
class AlunoController extends Controller
{
    /**
     * Lists all aluno entities.
     *
     * @Route("/", name="aluno_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $alunos = $em->getRepository('AppBundle:Aluno')->findAll();

        return $this->render('aluno/index.html.twig', array(
            'alunos' => $alunos,
        ));
    }

    /**
     * Creates a new aluno entity.
     *
     * @Route("/new", name="aluno_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $aluno = new Aluno();
        $form = $this->createForm('AppBundle\Form\AlunoType', $aluno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($aluno);
            $em->flush($aluno);

            return $this->redirectToRoute('aluno_show', array('id' => $aluno->getId()));
        }

        return $this->render('aluno/new.html.twig', array(
            'aluno' => $aluno,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a aluno entity.
     *
     * @Route("/{id}", name="aluno_show")
     * @Method("GET")
     */
    public function showAction(Aluno $aluno)
    {
        $deleteForm = $this->createDeleteForm($aluno);

        return $this->render('aluno/show.html.twig', array(
            'aluno' => $aluno,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing aluno entity.
     *
     * @Route("/{id}/edit", name="aluno_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Aluno $aluno)
    {
        $deleteForm = $this->createDeleteForm($aluno);
        $editForm = $this->createForm('AppBundle\Form\AlunoType', $aluno);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('aluno_edit', array('id' => $aluno->getId()));
        }

        return $this->render('aluno/edit.html.twig', array(
            'aluno' => $aluno,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a aluno entity.
     *
     * @Route("/{id}", name="aluno_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Aluno $aluno)
    {
        $form = $this->createDeleteForm($aluno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($aluno);
            $em->flush($aluno);
        }

        return $this->redirectToRoute('aluno_index');
    }

    /**
     * Creates a form to delete a aluno entity.
     *
     * @param Aluno $aluno The aluno entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Aluno $aluno)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('aluno_delete', array('id' => $aluno->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
