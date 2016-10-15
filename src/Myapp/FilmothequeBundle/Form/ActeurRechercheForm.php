<?php
	
	namespace MyApp\FilmothequeBundle\Form;
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;

	class ActeurRechercheForm extends AbstractType
	{
		public function buildForm(FormBuilderInterface $builder, array $options)
		{        
			$builder
				->add('motcle','text',array('label'=>'Mot-clés'));
		}
		
		public function getName()
		{
			return 'acteurrecherche';
		}    
	}