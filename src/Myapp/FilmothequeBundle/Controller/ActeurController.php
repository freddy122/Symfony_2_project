<?php

namespace MyApp\FilmothequeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use MyApp\FilmothequeBundle\Entity\Acteur;
use MyApp\FilmothequeBundle\Form\ActeurForm;
use MyApp\FilmothequeBundle\Form\ActeurRechercheForm;

class ActeurController extends Controller
{
    public function listerAction()
    {
		$em = $this->getDoctrine()->getManager();
		$acteurs = $em->getRepository('MyappFilmothequeBundle:acteur')->findAll();
		$form = $this->container->get('form.factory')->create(new ActeurRechercheForm());
		
		return $this->container->get('templating')->renderResponse('MyappFilmothequeBundle:Acteur:lister.html.twig',array('acteurs'=>$acteurs,'form'=>$form->createView()));
    }
    
	public function voirAction($id = null)
	{
		
		/*$em        = $this->getDoctrine()->getManager()->getRepository('MyappFilmothequeBundle:Acteur');
		$acteurss  = $em->find($id);*/
		
		$em = $this->container->get('doctrine')->getManager();
		$qb = $em->createQueryBuilder();
		$qb->select('a')
			->from('MyappFilmothequeBundle:Acteur', 'a')
			->where('a.id = :id')
			->setParameter('id',$id);

		$query   = $qb->getQuery();		
		$acteurss = $query->getResult();
		
		
		
		return $this->render('MyappFilmothequeBundle:Acteur:voir.html.twig',array('acteurss'=>$acteurss));
	}
	
    public function ajouterAction()
    {
		$message = '';
		$acteur  = new Acteur();
        $form    = $this->container->get('form.factory')->create(new ActeurForm(), $acteur);
		$request = $this->container->get('request');
		
		if($request->getMethod() == 'POST')
		{
			$form->bindRequest($request);
			
			if($form->isValid())
			{
				$em = $this->container->get('doctrine')->getManager();
				$em->persist($acteur);
				$em->flush();
				$message = 'Ajout effectué avec succès';
				return $this->redirect( $this->generateUrl('myapp_acteur_lister'));
			}
		}
		
		return $this->container->get('templating')->renderResponse('MyappFilmothequeBundle:Acteur:ajouter.html.twig',  array('form' => $form->createView(),'message' => $message));
		
    }
	
	public function modifierAction($id = null)
    {
		$message = '';
		$em = $this->getDoctrine()->getManager();
		
		if(isset($id))
		{
			$acteur = $em->find('MyappFilmothequeBundle:Acteur',$id);
			if(!$acteur)
			{
				$message = 'Aucun acteur trouvé';
			}
		}
		else
		{
			$acteur = new Acteur();
		}
		$form = $this->container->get('form.factory')->create(new ActeurForm(), $acteur);
		
		$request = $this->container->get('request');
		
		if($request->getMethod() == 'POST')
		{
			$form->bindRequest($request);
			if($form->isValid())
			{
				$em->persist($acteur);
				$em->flush();
				if(isset($id))
				{
					$message = 'Acteur modifié avec succès!';
					return $this->redirect( $this->generateUrl('myapp_acteur_lister'));
				}
				else
				{
					$message = 'Acteur ajouté avec succès!';
					return $this->redirect( $this->generateUrl('myapp_acteur_lister'));
				}
			}
		}
		
		return $this->container->get('templating')->renderResponse('MyappFilmothequeBundle:Acteur:modifier.html.twig',array('form' => $form->createView(),'message' => $message));
    }
	
	
	public function supprimerAction($id)
    {
			$em = $this->container->get('doctrine')->getManager();
			$acteur = $em->find('MyappFilmothequeBundle:Acteur', $id);
				
			if (!$acteur) 
			{
				throw new NotFoundHttpException("Acteur non trouvé");
			}
				
			$em->remove($acteur);
			$em->flush();
			
			return $this->redirect( $this->generateUrl('myapp_acteur_lister'));
			
		/*return $this->container->get('templating')->renderResponse('MyappFilmothequeBundle:Acteur:supprimer.html.twig');*/
    
	
	}
	
	public function topAction($max = 5)
	{
		$em = $this->container->get('doctrine')->getManager();

		$qb = $em->createQueryBuilder();
		$qb->select('a')
			->from('MyappFilmothequeBundle:Acteur', 'a')
			->orderBy('a.dateNaissance', 'asc')
		    ->setMaxResults($max);

		$query   = $qb->getQuery();
		
		$acteurs = $query->getResult();

		return $this->container->get('templating')->renderResponse('MyappFilmothequeBundle:Acteur:liste.html.twig', array('acteurs' => $acteurs,'query'=>$query));
	}
	
	

}