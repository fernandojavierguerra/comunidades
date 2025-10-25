<?php

namespace App\Controller\Admin;

use App\Entity\Localidad;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LocalidadCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Localidad::class;
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
        yield TextField::new('localidad');
        yield AssociationField::new('comunidad')
            ->hideOnIndex();
        //yield AssociationField::new('provincia');

    }

}
