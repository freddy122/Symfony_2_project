<?php
	
	namespace MyApp\FilmothequeBundle\Form;
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;

	class ActeurForm extends AbstractType
	{
		public function buildForm(FormBuilderInterface $builder, array $options)
		{        
			$builder
				->add('nom')
				->add('prenom','text',array('label'=>'Prénoms'))
				->add('dateNaissance', 'birthday')
				->add('sexe', 'choice', array('choices' => array('F'=>'Féminin','M'=>'Masculin','P'=>'PD')))
			;
		}
		
		public function getName()
		{
			return 'acteur';
		}    
	}