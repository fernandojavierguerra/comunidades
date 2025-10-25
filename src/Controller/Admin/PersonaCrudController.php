<?php

namespace App\Controller\Admin;

use App\Entity\Persona;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PersonaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Persona::class;
    }


    public function configureFields(string $pageName): iterable
    {
        /*return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];*/

        yield IdField::new('id')
            ->hideOnForm();
        yield TextField::new('nombres');
        yield TextField::new('apellido');
        yield TextField::new('nroDocumento');
        //yield AssociationField::new('tipoDocumento')
        //    ->hideOnIndex();
        yield DateField::new('fechaNacimiento');
        yield TextField::new('direccion');
        yield DateField::new('fechaIngreso');
        //yield AssociationField::new('barrio')
        //    ->hideOnIndex();
        yield AssociationField::new('comunidad')
            ->hideOnIndex();
    }

}
