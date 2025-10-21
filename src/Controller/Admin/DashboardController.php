<?php

namespace App\Controller\Admin;

use App\Entity\Barrio;
use App\Entity\Grupo;
use App\Entity\Localidad;
use App\Entity\Persona;
use App\Entity\Provincia;
use App\Entity\Responsabilidad;
use App\Entity\TipoDocumento;
use App\Entity\Usuario;
use EasyCorp\Bundle\EasyAdminBundle\Attribute\AdminDashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Comunidad;


#[AdminDashboard(routePath: '/admin', routeName: 'admin')]
//#[IsGranted('ROLE_ADMIN')]
class DashboardController extends AbstractDashboardController
{
    public function index(): Response
    {
        //return parent::index();

        return $this->render('admin/index.html.twig');

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // 1.1) If you have enabled the "pretty URLs" feature:
        // return $this->redirectToRoute('admin_user_index');
        //
        // 1.2) Same example but using the "ugly URLs" that were used in previous EasyAdmin versions:
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirectToRoute('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Comunidades');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Comunidades', 'fa fa-globe', Comunidad::class);
        yield MenuItem::linkToCrud('Usuarios', 'fa fa-user', Usuario::class);
        yield MenuItem::linkToCrud('Provincias', 'fa fa-map-o', Provincia::class);
        yield MenuItem::linkToCrud('Localidades', 'fa fa-map', Localidad::class);
        yield MenuItem::linkToCrud('Barrios', 'fa fa-home', Barrio::class);
        yield MenuItem::linkToCrud('Grupos', 'fa fa-users', Grupo::class);
        yield MenuItem::linkToCrud('Personas', 'fa fa-person', Persona::class);
        yield MenuItem::linkToCrud('Responsabilidades', 'fa fa-balance-scale', Responsabilidad::class);
        yield MenuItem::linkToCrud('Tipos de Documento', 'fa fa-id-card', TipoDocumento::class);
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
