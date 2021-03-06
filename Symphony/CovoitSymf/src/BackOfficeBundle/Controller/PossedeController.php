<?php
/**
  * CRUD de la table possede
  *
  * @author: Huguen Clément
  * @author: Marius Bethelot
  * @version: 1.0
  */

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\Possede;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Possede controller.
 *
 */
class PossedeController extends Controller
{
    /**
     * Lists all possede entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $possedes = $em->getRepository('BackOfficeBundle:Possede')->findAll();

        return $this->render('possede/index.html.twig', array(
            'possedes' => $possedes,
        ));
    }

    /**
     * Creates a new possede entity.
     *
     */
    public function newAction(Request $request)
    {
        $possede = new Possede();
        $form = $this->createForm('BackOfficeBundle\Form\PossedeType', $possede);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($possede);
            $em->flush();

            return $this->redirectToRoute('possede_show', array('id' => $possede->getId()));
        }

        return $this->render('possede/new.html.twig', array(
            'possede' => $possede,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a possede entity.
     *
     */
    public function showAction(Possede $possede)
    {
        $deleteForm = $this->createDeleteForm($possede);

        return $this->render('possede/show.html.twig', array(
            'possede' => $possede,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing possede entity.
     *
     */
    public function editAction(Request $request, Possede $possede)
    {
        $deleteForm = $this->createDeleteForm($possede);
        $editForm = $this->createForm('BackOfficeBundle\Form\PossedeType', $possede);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('possede_edit', array('id' => $possede->getId()));
        }

        return $this->render('possede/edit.html.twig', array(
            'possede' => $possede,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a possede entity.
     *
     */
    public function deleteAction(Request $request, Possede $possede)
    {
        $form = $this->createDeleteForm($possede);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($possede);
            $em->flush();
        }

        return $this->redirectToRoute('possede_index');
    }

    /**
     * Creates a form to delete a possede entity.
     *
     * @param Possede $possede The possede entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Possede $possede)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('possede_delete', array('id' => $possede->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
