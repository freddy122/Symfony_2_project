<?php


namespace MyApp\FilmothequeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
//use MyApp\FilmothequeBundle\Entity\Categorie;

class DefaultController extends Controller
{
    public function indexAction()
    {
		/*$em = $this->container->get('doctrine')->getManager();

		$categorie1 = new Categorie();
		$categorie1->setNom('Comédie');
		$em->persist($categorie1);

		$categorie2 = new Categorie();
		$categorie2->setNom('Science-fiction');
		$em->persist($categorie2);

		$em->flush();*/
		$em = $this->container->get('doctrine')->getManager();
		//$categories = $em->getRepository('MyappFilmothequeBundle:Categorie')->findAll();

		return $this->container->get('templating')->renderResponse('MyappFilmothequeBundle:Default:index.html.twig'/*, array('categories' => $categories)*/);
		
		       
    }
	
	public function choisirLangueAction($langue=null)
	{
		if($langue != null)
		{
			$this->container->get('session')->setLocale($langue);
		}
		$url = $this->container->get('request')->headers->get('referer');
		if(empty($url)){
			$url = $this->container->get('router')->generate('myapp_accueil');
		}
		return new RedirectResponse($url);
	}
}
