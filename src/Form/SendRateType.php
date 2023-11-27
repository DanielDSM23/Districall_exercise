<?php

namespace App\Form;

use App\Entity\Rating;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SendRateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('rate', ChoiceType::class, [
                'label' => 'Mettez une note',
                'choices' => $this->getBulletPointChoices(),
                'required' => true,
            ])
            ->add('Envoyer', SubmitType::class)


        ;
    }

    private function getBulletPointChoices(): array
    {
        $choices = [];
        for ($i = 0; $i <= 10; $i++) {
            $choices[$i] = $i;
        }

        return $choices;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Rating::class,
        ]);
    }
}
