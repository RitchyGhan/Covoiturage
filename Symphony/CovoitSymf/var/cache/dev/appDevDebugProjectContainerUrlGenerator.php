<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_categorie_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllCategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_categorie_one' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneCategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_co2_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllCo2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/co2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_co2_one' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneCo2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/co2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_marque_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllMarqueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/marque',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_marque_one' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneMarqueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/marque',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_typeCovoit_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllTypeCovoitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/type_covoit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_typeCovoit_one' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneTypeCovoitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/type_covoit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_typeTrajet_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllTypeTrajetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/type_trajet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_typeTrajet_one' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneTypeTrajetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/type_trajet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_typeVehicule_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllTypeVehiculeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/type_vehicule',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_typeVehicule_one' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneTypeVehiculeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/type_vehicule',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_ville_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllVilleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/ville',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_ville_one' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneVilleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/ville',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_voiture_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllVoitureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/voiture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_voiture_one' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneVoitureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/voiture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_utilisateur_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllUtilisateurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_utilisateur_one' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneUtilisateurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_possede_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllPossedeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/possede',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_possede_one' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOnePossedeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/possede',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_trajet_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllTrajetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/trajet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_trajet_one' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneTrajetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/trajet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_covoiturage_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllCovoiturageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/covoiturage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_covoiturage_one' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneCovoiturageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/covoiturage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
