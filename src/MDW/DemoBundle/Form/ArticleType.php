<?php

namespace MDW\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface ;

/**
 * Description of ArticleType
 *
 * @author damir
 */
class ArticleType extends AbstractType {

       
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('title')
                ->add('author')
                ->add('created');
    }

    //put your code here
    public function getName() {
        return 'arcticle_form';
    }

}

?>
