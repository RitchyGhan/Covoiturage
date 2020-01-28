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

        // api_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ApiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'api_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_api_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_homepage'));
            }

            return $ret;
        }
        not_api_homepage:

        if (0 === strpos($pathinfo, '/marque')) {
            // marque_index
            if ('/marque' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\MarqueController::indexAction',  '_route' => 'marque_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_marque_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'marque_index'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_marque_index;
                }

                return $ret;
            }
            not_marque_index:

            // marque_show
            if (preg_match('#^/marque/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'marque_show']), array (  '_controller' => 'BackOfficeBundle\\Controller\\MarqueController::showAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_marque_show;
                }

                return $ret;
            }
            not_marque_show:

            // marque_new
            if ('/marque/new' === $pathinfo) {
                $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\MarqueController::newAction',  '_route' => 'marque_new',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_marque_new;
                }

                return $ret;
            }
            not_marque_new:

            // marque_edit
            if (preg_match('#^/marque/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'marque_edit']), array (  '_controller' => 'BackOfficeBundle\\Controller\\MarqueController::editAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_marque_edit;
                }

                return $ret;
            }
            not_marque_edit:

            // marque_delete
            if (preg_match('#^/marque/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'marque_delete']), array (  '_controller' => 'BackOfficeBundle\\Controller\\MarqueController::deleteAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_marque_delete;
                }

                return $ret;
            }
            not_marque_delete:

        }

        elseif (0 === strpos($pathinfo, '/type')) {
            if (0 === strpos($pathinfo, '/typevehicule')) {
                // typevehicule_index
                if ('/typevehicule' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeVehiculeController::indexAction',  '_route' => 'typevehicule_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_typevehicule_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'typevehicule_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_typevehicule_index;
                    }

                    return $ret;
                }
                not_typevehicule_index:

                // typevehicule_show
                if (preg_match('#^/typevehicule/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'typevehicule_show']), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeVehiculeController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_typevehicule_show;
                    }

                    return $ret;
                }
                not_typevehicule_show:

                // typevehicule_new
                if ('/typevehicule/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeVehiculeController::newAction',  '_route' => 'typevehicule_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_typevehicule_new;
                    }

                    return $ret;
                }
                not_typevehicule_new:

                // typevehicule_edit
                if (preg_match('#^/typevehicule/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'typevehicule_edit']), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeVehiculeController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_typevehicule_edit;
                    }

                    return $ret;
                }
                not_typevehicule_edit:

                // typevehicule_delete
                if (preg_match('#^/typevehicule/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'typevehicule_delete']), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeVehiculeController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_typevehicule_delete;
                    }

                    return $ret;
                }
                not_typevehicule_delete:

            }

            elseif (0 === strpos($pathinfo, '/typecovoit')) {
                // typecovoit_index
                if ('/typecovoit' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeCovoitController::indexAction',  '_route' => 'typecovoit_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_typecovoit_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'typecovoit_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_typecovoit_index;
                    }

                    return $ret;
                }
                not_typecovoit_index:

                // typecovoit_show
                if (preg_match('#^/typecovoit/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'typecovoit_show']), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeCovoitController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_typecovoit_show;
                    }

                    return $ret;
                }
                not_typecovoit_show:

                // typecovoit_new
                if ('/typecovoit/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeCovoitController::newAction',  '_route' => 'typecovoit_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_typecovoit_new;
                    }

                    return $ret;
                }
                not_typecovoit_new:

                // typecovoit_edit
                if (preg_match('#^/typecovoit/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'typecovoit_edit']), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeCovoitController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_typecovoit_edit;
                    }

                    return $ret;
                }
                not_typecovoit_edit:

                // typecovoit_delete
                if (preg_match('#^/typecovoit/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'typecovoit_delete']), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeCovoitController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_typecovoit_delete;
                    }

                    return $ret;
                }
                not_typecovoit_delete:

            }

            elseif (0 === strpos($pathinfo, '/typetrajet')) {
                // typetrajet_index
                if ('/typetrajet' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeTrajetController::indexAction',  '_route' => 'typetrajet_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_typetrajet_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'typetrajet_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_typetrajet_index;
                    }

                    return $ret;
                }
                not_typetrajet_index:

                // typetrajet_show
                if (preg_match('#^/typetrajet/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'typetrajet_show']), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeTrajetController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_typetrajet_show;
                    }

                    return $ret;
                }
                not_typetrajet_show:

                // typetrajet_new
                if ('/typetrajet/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeTrajetController::newAction',  '_route' => 'typetrajet_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_typetrajet_new;
                    }

                    return $ret;
                }
                not_typetrajet_new:

                // typetrajet_edit
                if (preg_match('#^/typetrajet/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'typetrajet_edit']), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeTrajetController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_typetrajet_edit;
                    }

                    return $ret;
                }
                not_typetrajet_edit:

                // typetrajet_delete
                if (preg_match('#^/typetrajet/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'typetrajet_delete']), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeTrajetController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_typetrajet_delete;
                    }

                    return $ret;
                }
                not_typetrajet_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/trajet')) {
            // trajet_index
            if ('/trajet' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\TrajetController::indexAction',  '_route' => 'trajet_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_trajet_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'trajet_index'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_trajet_index;
                }

                return $ret;
            }
            not_trajet_index:

            // trajet_show
            if (preg_match('#^/trajet/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'trajet_show']), array (  '_controller' => 'BackOfficeBundle\\Controller\\TrajetController::showAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_trajet_show;
                }

                return $ret;
            }
            not_trajet_show:

            // trajet_new
            if ('/trajet/new' === $pathinfo) {
                $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\TrajetController::newAction',  '_route' => 'trajet_new',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_trajet_new;
                }

                return $ret;
            }
            not_trajet_new:

            // trajet_edit
            if (preg_match('#^/trajet/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'trajet_edit']), array (  '_controller' => 'BackOfficeBundle\\Controller\\TrajetController::editAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_trajet_edit;
                }

                return $ret;
            }
            not_trajet_edit:

            // trajet_delete
            if (preg_match('#^/trajet/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'trajet_delete']), array (  '_controller' => 'BackOfficeBundle\\Controller\\TrajetController::deleteAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_trajet_delete;
                }

                return $ret;
            }
            not_trajet_delete:

        }

        elseif (0 === strpos($pathinfo, '/voiture')) {
            // voiture_index
            if ('/voiture' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\VoitureController::indexAction',  '_route' => 'voiture_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_voiture_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'voiture_index'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_voiture_index;
                }

                return $ret;
            }
            not_voiture_index:

            // voiture_show
            if (preg_match('#^/voiture/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'voiture_show']), array (  '_controller' => 'BackOfficeBundle\\Controller\\VoitureController::showAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_voiture_show;
                }

                return $ret;
            }
            not_voiture_show:

            // voiture_new
            if ('/voiture/new' === $pathinfo) {
                $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\VoitureController::newAction',  '_route' => 'voiture_new',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_voiture_new;
                }

                return $ret;
            }
            not_voiture_new:

            // voiture_edit
            if (preg_match('#^/voiture/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'voiture_edit']), array (  '_controller' => 'BackOfficeBundle\\Controller\\VoitureController::editAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_voiture_edit;
                }

                return $ret;
            }
            not_voiture_edit:

            // voiture_delete
            if (preg_match('#^/voiture/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'voiture_delete']), array (  '_controller' => 'BackOfficeBundle\\Controller\\VoitureController::deleteAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_voiture_delete;
                }

                return $ret;
            }
            not_voiture_delete:

        }

        elseif (0 === strpos($pathinfo, '/ville')) {
            // ville_index
            if ('/ville' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\VilleController::indexAction',  '_route' => 'ville_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_ville_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ville_index'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_ville_index;
                }

                return $ret;
            }
            not_ville_index:

            // ville_show
            if (preg_match('#^/ville/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'ville_show']), array (  '_controller' => 'BackOfficeBundle\\Controller\\VilleController::showAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_ville_show;
                }

                return $ret;
            }
            not_ville_show:

            // ville_new
            if ('/ville/new' === $pathinfo) {
                $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\VilleController::newAction',  '_route' => 'ville_new',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_ville_new;
                }

                return $ret;
            }
            not_ville_new:

            // ville_edit
            if (preg_match('#^/ville/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'ville_edit']), array (  '_controller' => 'BackOfficeBundle\\Controller\\VilleController::editAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_ville_edit;
                }

                return $ret;
            }
            not_ville_edit:

            // ville_delete
            if (preg_match('#^/ville/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'ville_delete']), array (  '_controller' => 'BackOfficeBundle\\Controller\\VilleController::deleteAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_ville_delete;
                }

                return $ret;
            }
            not_ville_delete:

        }

        elseif (0 === strpos($pathinfo, '/possede')) {
            // possede_index
            if ('/possede' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\PossedeController::indexAction',  '_route' => 'possede_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_possede_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'possede_index'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_possede_index;
                }

                return $ret;
            }
            not_possede_index:

            // possede_show
            if (preg_match('#^/possede/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'possede_show']), array (  '_controller' => 'BackOfficeBundle\\Controller\\PossedeController::showAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_possede_show;
                }

                return $ret;
            }
            not_possede_show:

            // possede_new
            if ('/possede/new' === $pathinfo) {
                $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\PossedeController::newAction',  '_route' => 'possede_new',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_possede_new;
                }

                return $ret;
            }
            not_possede_new:

            // possede_edit
            if (preg_match('#^/possede/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'possede_edit']), array (  '_controller' => 'BackOfficeBundle\\Controller\\PossedeController::editAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_possede_edit;
                }

                return $ret;
            }
            not_possede_edit:

            // possede_delete
            if (preg_match('#^/possede/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'possede_delete']), array (  '_controller' => 'BackOfficeBundle\\Controller\\PossedeController::deleteAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_possede_delete;
                }

                return $ret;
            }
            not_possede_delete:

        }

        elseif (0 === strpos($pathinfo, '/utilisateur')) {
            // utilisateur_index
            if ('/utilisateur' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\UtilisateurController::indexAction',  '_route' => 'utilisateur_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_utilisateur_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'utilisateur_index'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_utilisateur_index;
                }

                return $ret;
            }
            not_utilisateur_index:

            // utilisateur_show
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'utilisateur_show']), array (  '_controller' => 'BackOfficeBundle\\Controller\\UtilisateurController::showAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_utilisateur_show;
                }

                return $ret;
            }
            not_utilisateur_show:

            // utilisateur_new
            if ('/utilisateur/new' === $pathinfo) {
                $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\UtilisateurController::newAction',  '_route' => 'utilisateur_new',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_utilisateur_new;
                }

                return $ret;
            }
            not_utilisateur_new:

            // utilisateur_edit
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'utilisateur_edit']), array (  '_controller' => 'BackOfficeBundle\\Controller\\UtilisateurController::editAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_utilisateur_edit;
                }

                return $ret;
            }
            not_utilisateur_edit:

            // utilisateur_delete
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'utilisateur_delete']), array (  '_controller' => 'BackOfficeBundle\\Controller\\UtilisateurController::deleteAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_utilisateur_delete;
                }

                return $ret;
            }
            not_utilisateur_delete:

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/categorie')) {
                // categorie_index
                if ('/categorie' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_categorie_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'categorie_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_categorie_index;
                    }

                    return $ret;
                }
                not_categorie_index:

                // categorie_show
                if (preg_match('#^/categorie/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'categorie_show']), array (  '_controller' => 'BackOfficeBundle\\Controller\\CategorieController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_categorie_show;
                    }

                    return $ret;
                }
                not_categorie_show:

                // categorie_new
                if ('/categorie/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_categorie_new;
                    }

                    return $ret;
                }
                not_categorie_new:

                // categorie_edit
                if (preg_match('#^/categorie/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'categorie_edit']), array (  '_controller' => 'BackOfficeBundle\\Controller\\CategorieController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_categorie_edit;
                    }

                    return $ret;
                }
                not_categorie_edit:

                // categorie_delete
                if (preg_match('#^/categorie/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'categorie_delete']), array (  '_controller' => 'BackOfficeBundle\\Controller\\CategorieController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_categorie_delete;
                    }

                    return $ret;
                }
                not_categorie_delete:

            }

            elseif (0 === strpos($pathinfo, '/covoiturage')) {
                // covoiturage_index
                if ('/covoiturage' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\CovoiturageController::indexAction',  '_route' => 'covoiturage_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_covoiturage_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'covoiturage_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_covoiturage_index;
                    }

                    return $ret;
                }
                not_covoiturage_index:

                // covoiturage_show
                if (preg_match('#^/covoiturage/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'covoiturage_show']), array (  '_controller' => 'BackOfficeBundle\\Controller\\CovoiturageController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_covoiturage_show;
                    }

                    return $ret;
                }
                not_covoiturage_show:

                // covoiturage_new
                if ('/covoiturage/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\CovoiturageController::newAction',  '_route' => 'covoiturage_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_covoiturage_new;
                    }

                    return $ret;
                }
                not_covoiturage_new:

                // covoiturage_edit
                if (preg_match('#^/covoiturage/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'covoiturage_edit']), array (  '_controller' => 'BackOfficeBundle\\Controller\\CovoiturageController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_covoiturage_edit;
                    }

                    return $ret;
                }
                not_covoiturage_edit:

                // covoiturage_delete
                if (preg_match('#^/covoiturage/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'covoiturage_delete']), array (  '_controller' => 'BackOfficeBundle\\Controller\\CovoiturageController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_covoiturage_delete;
                    }

                    return $ret;
                }
                not_covoiturage_delete:

            }

            elseif (0 === strpos($pathinfo, '/co2')) {
                // co2_index
                if ('/co2' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\Co2Controller::indexAction',  '_route' => 'co2_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_co2_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'co2_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_co2_index;
                    }

                    return $ret;
                }
                not_co2_index:

                // co2_show
                if (preg_match('#^/co2/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'co2_show']), array (  '_controller' => 'BackOfficeBundle\\Controller\\Co2Controller::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_co2_show;
                    }

                    return $ret;
                }
                not_co2_show:

                // co2_new
                if ('/co2/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\Co2Controller::newAction',  '_route' => 'co2_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_co2_new;
                    }

                    return $ret;
                }
                not_co2_new:

                // co2_edit
                if (preg_match('#^/co2/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'co2_edit']), array (  '_controller' => 'BackOfficeBundle\\Controller\\Co2Controller::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_co2_edit;
                    }

                    return $ret;
                }
                not_co2_edit:

                // co2_delete
                if (preg_match('#^/co2/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'co2_delete']), array (  '_controller' => 'BackOfficeBundle\\Controller\\Co2Controller::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_co2_delete;
                    }

                    return $ret;
                }
                not_co2_delete:

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
