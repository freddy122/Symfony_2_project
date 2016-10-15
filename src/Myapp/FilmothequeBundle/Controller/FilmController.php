<?php
namespace MyApp\FilmothequeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use MyApp\FilmothequeBundle\Entity\Film;
use MyApp\FilmothequeBundle\Form\FilmForm;

class FilmController extends Controller
{
	public function listerAction($max = 6)
    {
		$em = $this->container->get('doctrine')->getManager();
		$qb = $em->createQueryBuilder();
		$qb->select('a')
			->from('MyappFilmothequeBundle:Film', 'a')
			->orderBy('a.description', 'asc')
		    ->setMaxResults($max);

		$query   = $qb->getQuery();
		
		$films = $query->getResult();

		return $this->container->get('templating')->renderResponse('MyappFilmothequeBundle:Film:lister.html.twig', array('films' => $films,'query'=>$query));
    }
	
	public function voirAction($id = null)
	{
		$em = $this->container->get('doctrine')->getManager();
		$qb = $em->createQueryBuilder();
		$qb->select('a')
			->from('MyappFilmothequeBundle:Film', 'a')
			->where('a.id = :id')
			->setParameter('id',$id);

		$query   = $qb->getQuery();		
		$film = $query->getResult();
		
		
		
		return $this->render('MyappFilmothequeBundle:Film:voir.html.twig',array('film'=>$film));
	}
}
?>