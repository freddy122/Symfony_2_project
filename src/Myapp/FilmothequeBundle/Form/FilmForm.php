<?php
	
	namespace MyApp\FilmothequeBundle\Form;
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;

	class FilmForm extends AbstractType
	{
		public function buildForm(FormBuilderInterface $builder, array $options)
		{        
			$builder
				->add('titre')
				->add('description','text',array('label'=>'Prénoms'))
				->add('dateNaissance', 'birthday')
				->add('acteurs','entity',array('class'=>'Myapp\FilmothequeBundle\Entity\Acteur','property'=>'PrenomNom','expanded'=>true,'multiple'=>true,'required'=>false))
			;
		}
		
		public function getName()
		{
			return 'acteur';
		}    
	}