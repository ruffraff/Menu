<?php

namespace App\Form;

use App\Entity\PersonalData;
use App\Entity\BodyType;
use App\Entity\AgeGroup;
use App\Entity\GenderType;
use App\Entity\SportType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
 
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
       
            $builder
                ->add('username', TextType::class)
                ->add('password', RepeatedType::class, [
                    'type' => PasswordType::class,
                    'first_options' => ['label' => 'Password'],
                    'second_options' => ['label' => 'Conferma password'],
                ])
                ->add('name', TextType::class)
                ->add('surname', TextType::class)
                ->add('weight', IntegerType::class)
                ->add('height', IntegerType::class)
                ->add('bodyType', EntityType::class, [
                    'class' => BodyType::class,
                    'choice_label' => 'bodyTypeName',
                ])
                ->add('age', IntegerType::class)
                ->add('insertDate', DateTimeType::class)
                ->add('confirmed', CheckboxType::class)
                ->add('ageGroup', EntityType::class, [
                    'class' => AgeGroup::class,
                    'choice_label' => 'age',
                ])
                ->add('gender', EntityType::class, [
                    'class' => GenderType::class,
                    'choice_label' => 'genderName',
                ])
                ->add('sportType', EntityType::class, [
                    'class' => SportType::class,
                    'choice_label' => 'sportName',
                ])
                ->add('workoutsPerWeek', IntegerType::class)
                ->add('workoutDuration', IntegerType::class)
            ;
         
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PersonalData::class,
        ]);
    }
}
