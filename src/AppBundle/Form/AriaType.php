<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AriaType extends AbstractType 
{
	
	const ACTION = "action";
	
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->add('filename', TextType::class, array(
				'data'		=> null,
				'required'	=> true,
				'label'		=> 'app.common.filename',
				'translation_domain'	=> 'messages'
				//'attr' => array('class' => 'btn-sm btn btn-default')
			))
			->add('add', SubmitType::class, array(
					'label' => 'app.common.add',
					'translation_domain' => 'messages'
			
			))
			->setAction($options[static::ACTION])
			->setMethod("GET");
	}
	
	public function getName() {
		return 'app_aria_type';
	}
	
}