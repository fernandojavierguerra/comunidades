<?php

namespace App\Controller\Admin;

use App\Entity\Barrio;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class BarrioCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Barrio::class;
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
        yield TextField::new('barrio');
        yield AssociationField::new('comunidad')
            ->hideOnIndex();
    }

}
