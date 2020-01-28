<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/c')) {
                if (0 === strpos($pathinfo, '/api/categorie')) {
                    // api_categorie_all
                    if ('/api/categorie' === $pathinfo) {
                        return array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllCategorieAction',  '_route' => 'api_categorie_all',);
                    }

                    // api_categorie_one
                    if (preg_match('#^/api/categorie/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_categorie_one']), array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneCategorieAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/api/co2')) {
                    // api_co2_all
                    if ('/api/co2' === $pathinfo) {
                        return array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllCo2Action',  '_route' => 'api_co2_all',);
                    }

                    // api_co2_one
                    if (preg_match('#^/api/co2/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_co2_one']), array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneCo2Action',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/api/covoiturage')) {
                    // api_covoiturage_all
                    if ('/api/covoiturage' === $pathinfo) {
                        return array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllCovoiturageAction',  '_route' => 'api_covoiturage_all',);
                    }

                    // api_covoiturage_one
                    if (preg_match('#^/api/covoiturage/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_covoiturage_one']), array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneCovoiturageAction',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/api/marque')) {
                // api_marque_all
                if ('/api/marque' === $pathinfo) {
                    return array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllMarqueAction',  '_route' => 'api_marque_all',);
                }

                // api_marque_one
                if (preg_match('#^/api/marque/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_marque_one']), array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneMarqueAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/api/type_')) {
                if (0 === strpos($pathinfo, '/api/type_covoit')) {
                    // api_typeCovoit_all
                    if ('/api/type_covoit' === $pathinfo) {
                        return array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllTypeCovoitAction',  '_route' => 'api_typeCovoit_all',);
                    }

                    // api_typeCovoit_one
                    if (preg_match('#^/api/type_covoit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_typeCovoit_one']), array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneTypeCovoitAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/api/type_trajet')) {
                    // api_typeTrajet_all
                    if ('/api/type_trajet' === $pathinfo) {
                        return array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllTypeTrajetAction',  '_route' => 'api_typeTrajet_all',);
                    }

                    // api_typeTrajet_one
                    if (preg_match('#^/api/type_trajet/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_typeTrajet_one']), array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneTypeTrajetAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/api/type_vehicule')) {
                    // api_typeVehicule_all
                    if ('/api/type_vehicule' === $pathinfo) {
                        return array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllTypeVehiculeAction',  '_route' => 'api_typeVehicule_all',);
                    }

                    // api_typeVehicule_one
                    if (preg_match('#^/api/type_vehicule/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_typeVehicule_one']), array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneTypeVehiculeAction',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/api/trajet')) {
                // api_trajet_all
                if ('/api/trajet' === $pathinfo) {
                    return array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllTrajetAction',  '_route' => 'api_trajet_all',);
                }

                // api_trajet_one
                if (preg_match('#^/api/trajet/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_trajet_one']), array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneTrajetAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/api/ville')) {
                // api_ville_all
                if ('/api/ville' === $pathinfo) {
                    return array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllVilleAction',  '_route' => 'api_ville_all',);
                }

                // api_ville_one
                if (preg_match('#^/api/ville/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_ville_one']), array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneVilleAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/api/voiture')) {
                // api_voiture_all
                if ('/api/voiture' === $pathinfo) {
                    return array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllVoitureAction',  '_route' => 'api_voiture_all',);
                }

                // api_voiture_one
                if (preg_match('#^/api/voiture/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_voiture_one']), array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneVoitureAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/api/utilisateur')) {
                // api_utilisateur_all
                if ('/api/utilisateur' === $pathinfo) {
                    return array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllUtilisateurAction',  '_route' => 'api_utilisateur_all',);
                }

                // api_utilisateur_one
                if (preg_match('#^/api/utilisateur/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_utilisateur_one']), array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOneUtilisateurAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/api/possede')) {
                // api_possede_all
                if ('/api/possede' === $pathinfo) {
                    return array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetAllPossedeAction',  '_route' => 'api_possede_all',);
                }

                // api_possede_one
                if (preg_match('#^/api/possede/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_possede_one']), array (  '_controller' => 'ApiBundle\\Controller\\GetApiController::GetOnePossedeAction',));
                }

            }

        }

        // back_office_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_office_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_back_office_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'back_office_homepage'));
            }

            return $ret;
        }
        not_back_office_homepage:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
