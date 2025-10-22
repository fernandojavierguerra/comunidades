<?php

namespace App\Controller\Admin;

use App\Entity\TipoDocumento;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TipoDocumentoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TipoDocumento::class;
    }

    public function configureFields(string $pageName): iterable
    {
        /*
        return [
            IdField::new('id'),
            TextField::new('tipoDocumento'),
            AssociationField::new('comunidad'),
        ];
        */

        yield IdField::new('id')
            ->hideOnForm();
        yield TextField::new('tipoDocumento');
        yield AssociationField::new('comunidad')
            ->hideOnIndex();
    }

}
