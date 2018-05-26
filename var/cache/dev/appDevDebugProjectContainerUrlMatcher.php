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
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/workshop')) {
            // workshop_homepage
            if ('/workshop/workshop' === $pathinfo) {
                return array (  '_controller' => 'WorkshopBundle\\Controller\\DefaultController::indexAction',  '_route' => 'workshop_homepage',);
            }

            if (0 === strpos($pathinfo, '/workshop/AjoutWorkshop')) {
                // _AjoutWorkshop
                if ('/workshop/AjoutWorkshop' === $pathinfo) {
                    return array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::AjoutWorkshopAction',  '_route' => '_AjoutWorkshop',);
                }

                // _AjoutWorkshopWS
                if (0 === strpos($pathinfo, '/workshop/AjoutWorkshopWS') && preg_match('#^/workshop/AjoutWorkshopWS/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_AjoutWorkshopWS')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::AjoutWorkshopWSAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/workshop/Affiche')) {
                // _AfficheVisitWorkshop
                if ('/workshop/AfficheVisitWorkshop' === $pathinfo) {
                    return array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::AfficheVisitWorkshopAction',  '_route' => '_AfficheVisitWorkshop',);
                }

                if (0 === strpos($pathinfo, '/workshop/AfficheWorkshop')) {
                    // _AfficheWorkshopWS
                    if ('/workshop/AfficheWorkshopWS' === $pathinfo) {
                        return array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::AfficheWorkshopWSAction',  '_route' => '_AfficheWorkshopWS',);
                    }

                    // _AfficheWorkshop
                    if ('/workshop/AfficheWorkshop' === $pathinfo) {
                        return array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::AfficheWorkshopAction',  '_route' => '_AfficheWorkshop',);
                    }

                }

                // _AfficheProfile
                if (0 === strpos($pathinfo, '/workshop/AffichePr') && preg_match('#^/workshop/AffichePr/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_AfficheProfile')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::AfficheProfileAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/workshop/UpdateWorkshop')) {
                // _UpdateWorkshopWS
                if (0 === strpos($pathinfo, '/workshop/UpdateWorkshopWS') && preg_match('#^/workshop/UpdateWorkshopWS/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_UpdateWorkshopWS')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::UpdateWorkshopWSAction',));
                }

                // _UpdateWorkshop
                if (preg_match('#^/workshop/UpdateWorkshop/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_UpdateWorkshop')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::UpdateWorkshopAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/workshop/Pa')) {
                // _ParticiperWS
                if (0 === strpos($pathinfo, '/workshop/ParticiperWS') && preg_match('#^/workshop/ParticiperWS/(?P<id>[^/]++)/(?P<idU>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_ParticiperWS')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::ParticiperWSAction',));
                }

                // _Participer_work
                if (0 === strpos($pathinfo, '/workshop/Participer_work') && preg_match('#^/workshop/Participer_work/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_Participer_work')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::Participer_workAction',));
                }

                // _PasParticiperWS
                if (0 === strpos($pathinfo, '/workshop/PasParticiperWS') && preg_match('#^/workshop/PasParticiperWS/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_PasParticiperWS')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::PasParticiperWSAction',));
                }

                // _PasParticiper_work
                if (0 === strpos($pathinfo, '/workshop/PasParticiper_work') && preg_match('#^/workshop/PasParticiper_work/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_PasParticiper_work')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::PasParticiper_workAction',));
                }

            }

            // _SwitchWS
            if (0 === strpos($pathinfo, '/workshop/SwitchWS') && preg_match('#^/workshop/SwitchWS/(?P<idW>[^/]++)/(?P<idU>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_SwitchWS')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::SwitchWSAction',));
            }

            // _SwitchBTN
            if (0 === strpos($pathinfo, '/workshop/SwitchBTn') && preg_match('#^/workshop/SwitchBTn/(?P<idW>[^/]++)/(?P<idU>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_SwitchBTN')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::SwitchBTnAction',));
            }

            // _DetailsWorkshop
            if (0 === strpos($pathinfo, '/workshop/DetailsWorkshop') && preg_match('#^/workshop/DetailsWorkshop/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_DetailsWorkshop')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::DetailsWorkshopAction',));
            }

            if (0 === strpos($pathinfo, '/workshop/Re')) {
                // _Redirect
                if (0 === strpos($pathinfo, '/workshop/Redirect') && preg_match('#^/workshop/Redirect/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_Redirect')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::RedirectAction',));
                }

                // _RechercheWorkshop
                if ('/workshop/RechercheWorkshop' === $pathinfo) {
                    return array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::RechercheWorkshopAction',  '_route' => '_RechercheWorkshop',);
                }

                // RechercheDynamiq
                if (0 === strpos($pathinfo, '/workshop/RechercheDynamiq') && preg_match('#^/workshop/RechercheDynamiq/(?P<var>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'RechercheDynamiq')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::RechercheDynamiqAction',));
                }

            }

            // _ListeParticipant
            if (0 === strpos($pathinfo, '/workshop/ListeParticipant') && preg_match('#^/workshop/ListeParticipant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_ListeParticipant')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::ListeParticipantAction',));
            }

            // graphePie
            if ('/workshop/pie' === $pathinfo) {
                return array (  '_controller' => 'WorkshopBundle\\Controller\\DefaultController::indexAction',  '_route' => 'graphePie',);
            }

            // FiltreDQL
            if ('/workshop/FiltreDQL' === $pathinfo) {
                return array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::FiltreDQLAction',  '_route' => 'FiltreDQL',);
            }

            // FiltrePrix
            if ('/workshop/FiltrePrix' === $pathinfo) {
                return array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::FiltrePrixAction',  '_route' => 'FiltrePrix',);
            }

            // nbParticipantsW
            if (0 === strpos($pathinfo, '/workshop/nbParticipantsW') && preg_match('#^/workshop/nbParticipantsW/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nbParticipantsW')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::nbParticipantsWAction',));
            }

            // _getUniqWS
            if ('/workshop/getUniqWS' === $pathinfo) {
                return array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::getUniqWSAction',  '_route' => '_getUniqWS',);
            }

        }

        elseif (0 === strpos($pathinfo, '/lo')) {
            if (0 === strpos($pathinfo, '/local')) {
                // local_homepage
                if ('/local/local' === $pathinfo) {
                    return array (  '_controller' => 'LocalBundle\\Controller\\DefaultController::indexAction',  '_route' => 'local_homepage',);
                }

                // _louerMobile
                if ('/local/louerMobile{id,dateDeb,dateFin,idUser}' === $pathinfo) {
                    return array (  '_controller' => 'LocalBundle\\Controller\\LocalController::LouerMobileAction',  '_route' => '_louerMobile',);
                }

                if (0 === strpos($pathinfo, '/local/A')) {
                    if (0 === strpos($pathinfo, '/local/Affiche')) {
                        // _affiche
                        if ('/local/Affiche' === $pathinfo) {
                            return array (  '_controller' => 'LocalBundle\\Controller\\LocalController::AfficheAction',  '_route' => '_affiche',);
                        }

                        if (0 === strpos($pathinfo, '/local/AfficheUser')) {
                            // _afficheUser
                            if ('/local/AfficheUser' === $pathinfo) {
                                return array (  '_controller' => 'LocalBundle\\Controller\\LocalController::AfficheUserAction',  '_route' => '_afficheUser',);
                            }

                            // _afficheUserMobile
                            if (0 === strpos($pathinfo, '/local/AfficheUserMobile') && preg_match('#^/local/AfficheUserMobile(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => '_afficheUserMobile')), array (  '_controller' => 'LocalBundle\\Controller\\LocalController::AfficheUserMobileAction',));
                            }

                        }

                        // _afficheDetail
                        if (0 === strpos($pathinfo, '/local/AfficheDetail') && preg_match('#^/local/AfficheDetail(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => '_afficheDetail')), array (  '_controller' => 'LocalBundle\\Controller\\LocalController::AfficheDetailAction',));
                        }

                        // _afficheLocMobile
                        if (0 === strpos($pathinfo, '/local/AfficheLocMobile') && preg_match('#^/local/AfficheLocMobile(?P<idLoc>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => '_afficheLocMobile')), array (  '_controller' => 'LocalBundle\\Controller\\LocalController::AfficheLocMobileAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/local/Ajout')) {
                        // _ajout
                        if ('/local/Ajout' === $pathinfo) {
                            return array (  '_controller' => 'LocalBundle\\Controller\\LocalController::AjoutAction',  '_route' => '_ajout',);
                        }

                        // _ajoutLocation
                        if (0 === strpos($pathinfo, '/local/AjoutLocation') && preg_match('#^/local/AjoutLocation(?P<id>[^/]++)/(?P<dateDeb>[^/]++)/(?P<dateFin>[^/]++)/(?P<idUser>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => '_ajoutLocation')), array (  '_controller' => 'LocalBundle\\Controller\\LocalController::AjoutLocationAction',));
                        }

                    }

                    // _aimer
                    if (0 === strpos($pathinfo, '/local/Aimer') && preg_match('#^/local/Aimer(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_aimer')), array (  '_controller' => 'LocalBundle\\Controller\\LocalController::LikeAction',));
                    }

                }

                // _supprime
                if (0 === strpos($pathinfo, '/local/Supprime') && preg_match('#^/local/Supprime(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_supprime')), array (  '_controller' => 'LocalBundle\\Controller\\LocalController::SupprimeAction',));
                }

                // _signaler
                if (0 === strpos($pathinfo, '/local/Signaler') && preg_match('#^/local/Signaler(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_signaler')), array (  '_controller' => 'LocalBundle\\Controller\\LocalController::SignalerAction',));
                }

                // _modifie
                if (0 === strpos($pathinfo, '/local/Modifie') && preg_match('#^/local/Modifie(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_modifie')), array (  '_controller' => 'LocalBundle\\Controller\\LocalController::ModifieAction',));
                }

                if (0 === strpos($pathinfo, '/local/Recherche')) {
                    // _recherche
                    if ('/local/Recherche' === $pathinfo) {
                        return array (  '_controller' => 'LocalBundle\\Controller\\LocalController::RechercheAction',  '_route' => '_recherche',);
                    }

                    // _recherchePrix
                    if ('/local/RecherchePrix' === $pathinfo) {
                        return array (  '_controller' => 'LocalBundle\\Controller\\LocalController::RecherchePrixAction',  '_route' => '_recherchePrix',);
                    }

                    // _rechercheSuperficie
                    if ('/local/RechercheSuperficie' === $pathinfo) {
                        return array (  '_controller' => 'LocalBundle\\Controller\\LocalController::RechercheSuperficieAction',  '_route' => '_rechercheSuperficie',);
                    }

                    // _rechercheAdresse
                    if ('/local/RechercheAdresse' === $pathinfo) {
                        return array (  '_controller' => 'LocalBundle\\Controller\\LocalController::RechercheAdresseAction',  '_route' => '_rechercheAdresse',);
                    }

                }

                // _louer
                if (0 === strpos($pathinfo, '/local/Louer') && preg_match('#^/local/Louer(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_louer')), array (  '_controller' => 'LocalBundle\\Controller\\LocalController::LouerAction',));
                }

                // _pasaimer
                if (0 === strpos($pathinfo, '/local/PasAimer') && preg_match('#^/local/PasAimer(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_pasaimer')), array (  '_controller' => 'LocalBundle\\Controller\\LocalController::DislikeAction',));
                }

                // _deleteCommentaire
                if (0 === strpos($pathinfo, '/local/DeleteCommentaire') && preg_match('#^/local/DeleteCommentaire(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_deleteCommentaire')), array (  '_controller' => 'LocalBundle\\Controller\\LocalController::DeleteCommentaireAction',));
                }

                // _afficheMobile
                if ('/local/afficheMobile' === $pathinfo) {
                    return array (  '_controller' => 'LocalBundle\\Controller\\LocalController::AfficheMobileAction',  '_route' => '_afficheMobile',);
                }

                // _ajoutMobile
                if (0 === strpos($pathinfo, '/local/ajoutMobile') && preg_match('#^/local/ajoutMobile(?P<id>[^/]++)/(?P<adr>[^/]++)/(?P<tel>[^/]++)/(?P<type>[^/]++)/(?P<prix>[^/]++)/(?P<image>[^/]++)/(?P<superficie>[^/]++)/(?P<desc>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_ajoutMobile')), array (  '_controller' => 'LocalBundle\\Controller\\LocalController::AjoutMobileAction',));
                }

                // _supprimeMobile
                if (0 === strpos($pathinfo, '/local/supprimeMobile') && preg_match('#^/local/supprimeMobile(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_supprimeMobile')), array (  '_controller' => 'LocalBundle\\Controller\\LocalController::SupprimeMobileAction',));
                }

                // _modifierMobile
                if (0 === strpos($pathinfo, '/local/modifierMobile') && preg_match('#^/local/modifierMobile(?P<id>[^/]++)/(?P<adr>[^/]++)/(?P<tel>[^/]++)/(?P<type>[^/]++)/(?P<prix>[^/]++)/(?P<desc>[^/]++)/(?P<sup>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_modifierMobile')), array (  '_controller' => 'LocalBundle\\Controller\\LocalController::ModifierMobileAction',));
                }

                // _uniqMobile
                if ('/local/getUniq' === $pathinfo) {
                    return array (  '_controller' => 'LocalBundle\\Controller\\LocalController::getUniqAction',  '_route' => '_uniqMobile',);
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

                // fos_user_security_loginWS
                if (0 === strpos($pathinfo, '/loginWS') && preg_match('#^/loginWS/(?P<username>[^/]++)/(?P<password>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_loginWS;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_loginWS')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginWSAction',));
                }
                not_fos_user_security_loginWS:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        elseif (0 === strpos($pathinfo, '/ecommerce')) {
            // stock_homepage
            if ('/ecommerce' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'stock_homepage');
                }

                return array (  '_controller' => 'StockBundle\\Controller\\DefaultController::indexAction',  '_route' => 'stock_homepage',);
            }

            if (0 === strpos($pathinfo, '/ecommerce/a')) {
                if (0 === strpos($pathinfo, '/ecommerce/ajout')) {
                    if (0 === strpos($pathinfo, '/ecommerce/ajout-produit')) {
                        // ajout_produit
                        if ('/ecommerce/ajout-produit' === $pathinfo) {
                            return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::ajoutAction',  '_route' => 'ajout_produit',);
                        }

                        // ajout_produitWS
                        if (0 === strpos($pathinfo, '/ecommerce/ajout-produitWS') && preg_match('#^/ecommerce/ajout\\-produitWS/(?P<id>[^/]++)/(?P<libelle>[^/]++)/(?P<description>[^/]++)/(?P<image>[^/]++)/(?P<prix>[^/]++)/(?P<quqntite>[^/]++)/(?P<promotion>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajout_produitWS')), array (  '_controller' => 'StockBundle\\Controller\\ProduitController::ajoutWSAction',));
                        }

                    }

                    // ajout_wishlist
                    if (0 === strpos($pathinfo, '/ecommerce/ajout-wishlist') && preg_match('#^/ecommerce/ajout\\-wishlist/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajout_wishlist')), array (  '_controller' => 'StockBundle\\Controller\\WishlistController::ajoutAction',));
                    }

                    // ajout_Ligne_Wishlist_Json
                    if (0 === strpos($pathinfo, '/ecommerce/ajouterLWJson') && preg_match('#^/ecommerce/ajouterLWJson/(?P<id>[^/]++)/(?P<idP>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajout_Ligne_Wishlist_Json')), array (  '_controller' => 'StockBundle\\Controller\\WishlistController::ajoutLWishlistJsonAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/ecommerce/affiche')) {
                    if (0 === strpos($pathinfo, '/ecommerce/affiche-produits')) {
                        // affiche_produits
                        if ('/ecommerce/affiche-produits' === $pathinfo) {
                            return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::afficheAction',  '_route' => 'affiche_produits',);
                        }

                        // modif_produits
                        if (0 === strpos($pathinfo, '/ecommerce/affiche-produits/modif') && preg_match('#^/ecommerce/affiche\\-produits/modif/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modif_produits')), array (  '_controller' => 'StockBundle\\Controller\\ProduitController::modifierAction',));
                        }

                        // supp_produits
                        if (0 === strpos($pathinfo, '/ecommerce/affiche-produits/supp') && preg_match('#^/ecommerce/affiche\\-produits/supp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp_produits')), array (  '_controller' => 'StockBundle\\Controller\\ProduitController::supprimerAction',));
                        }

                        // affiche_produitsWS
                        if ('/ecommerce/affiche-produitsWS' === $pathinfo) {
                            return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::afficheWSAction',  '_route' => 'affiche_produitsWS',);
                        }

                    }

                    // affiche_wishlist
                    if ('/ecommerce/affiche-wishlist' === $pathinfo) {
                        return array (  '_controller' => 'StockBundle\\Controller\\WishlistController::afficheAction',  '_route' => 'affiche_wishlist',);
                    }

                    // afficher_Ligne_Wishlist_Json
                    if (0 === strpos($pathinfo, '/ecommerce/afficherLWJson') && preg_match('#^/ecommerce/afficherLWJson/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficher_Ligne_Wishlist_Json')), array (  '_controller' => 'StockBundle\\Controller\\WishlistController::afficheLWishlistJsonAction',));
                    }

                }

                // art_produits
                if ('/ecommerce/art-produits' === $pathinfo) {
                    return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::artAction',  '_route' => 'art_produits',);
                }

            }

            // recherche_produits
            if ('/ecommerce/recherche-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::rechercheAction',  '_route' => 'recherche_produits',);
            }

            // view_produit
            if (0 === strpos($pathinfo, '/ecommerce/view-produit') && preg_match('#^/ecommerce/view\\-produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_produit')), array (  '_controller' => 'StockBundle\\Controller\\ProduitController::produitAction',));
            }

            // habillement_produits
            if ('/ecommerce/habillement-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::habillementAction',  '_route' => 'habillement_produits',);
            }

            // bijoux_produits
            if ('/ecommerce/bijoux-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::bijouxAction',  '_route' => 'bijoux_produits',);
            }

            // territoire_produits
            if ('/ecommerce/terrtoire-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::territoireAction',  '_route' => 'territoire_produits',);
            }

            // maroquinerie_produits
            if ('/ecommerce/maroquinerie-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::maroquinerieAction',  '_route' => 'maroquinerie_produits',);
            }

            // decoration_produits
            if ('/ecommerce/decoration-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::decorationAction',  '_route' => 'decoration_produits',);
            }

            // libsort_produits
            if ('/ecommerce/libsort-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::libsortAction',  '_route' => 'libsort_produits',);
            }

            // prixasc_produits
            if ('/ecommerce/prixasc-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::prixascAction',  '_route' => 'prixasc_produits',);
            }

            // prixdesc_produits
            if ('/ecommerce/prixdesc-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::prixdescAction',  '_route' => 'prixdesc_produits',);
            }

            // supprimer_wishlist
            if (0 === strpos($pathinfo, '/ecommerce/supprimer-wishlist') && preg_match('#^/ecommerce/supprimer\\-wishlist/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_wishlist')), array (  '_controller' => 'StockBundle\\Controller\\WishlistController::supprimerAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/evenement')) {
            // evenement_homepage
            if ('/evenement/evenement' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::AfficheEventAction',  '_route' => 'evenement_homepage',);
            }

            // _index
            if ('/evenement/index' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::indexAction',  '_route' => '_index',);
            }

            // _AjoutEvent
            if ('/evenement/AjoutEvent' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::AjoutEventAction',  '_route' => '_AjoutEvent',);
            }

            // _AfficheEvent
            if ('/evenement/AfficheE' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::AfficheEventAction',  '_route' => '_AfficheEvent',);
            }

            // _UpdateEvent
            if (0 === strpos($pathinfo, '/evenement/UpdateEvent') && preg_match('#^/evenement/UpdateEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_UpdateEvent')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::UpdateEventAction',));
            }

            if (0 === strpos($pathinfo, '/evenement/De')) {
                // _DeleteEvent
                if (0 === strpos($pathinfo, '/evenement/DeleteEvent') && preg_match('#^/evenement/DeleteEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_DeleteEvent')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::DeleteEventAction',));
                }

                // _DeleteMob
                if (0 === strpos($pathinfo, '/evenement/DeleteMob') && preg_match('#^/evenement/DeleteMob/(?P<id>[^/]++)/(?P<idE>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_DeleteMob')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::DeleteMobAction',));
                }

                // _DetailsEvent
                if (0 === strpos($pathinfo, '/evenement/DetailsEvent') && preg_match('#^/evenement/DetailsEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_DetailsEvent')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::DetailsEventAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/evenement/R')) {
                if (0 === strpos($pathinfo, '/evenement/Recherche')) {
                    // _RechercheDQL
                    if ('/evenement/RechercheDQL' === $pathinfo) {
                        return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::RechercheDQLAction',  '_route' => '_RechercheDQL',);
                    }

                    // _Recherche
                    if (preg_match('#^/evenement/Recherche/(?P<nom>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_Recherche')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::RechercheAction',));
                    }

                }

                // _RecentDql
                if ('/evenement/Recent' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::RecentDqlAction',  '_route' => '_RecentDql',);
                }

                // _Rating
                if (0 === strpos($pathinfo, '/evenement/Ratingo') && preg_match('#^/evenement/Ratingo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_Rating')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::ratingAction',));
                }

            }

            // _ParticiperEvent
            if (0 === strpos($pathinfo, '/evenement/ParticiperEvent') && preg_match('#^/evenement/ParticiperEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_ParticiperEvent')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::participerEventAction',));
            }

            // _AfficheProfil
            if (0 === strpos($pathinfo, '/evenement/ProfilEv') && preg_match('#^/evenement/ProfilEv/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_AfficheProfil')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::AfficheProfilAction',));
            }

            // _nParticiperEvent
            if (0 === strpos($pathinfo, '/evenement/nParticiperEvent') && preg_match('#^/evenement/nParticiperEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_nParticiperEvent')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::nParticierEventAction',));
            }

            // _nParticiperEM
            if (0 === strpos($pathinfo, '/evenement/nParticiperEM') && preg_match('#^/evenement/nParticiperEM/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_nParticiperEM')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::nParticierEMAction',));
            }

            // _all
            if ('/evenement/all' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::allAction',  '_route' => '_all',);
            }

            // _addM
            if (0 === strpos($pathinfo, '/evenement/addM') && preg_match('#^/evenement/addM/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_addM')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::addMAction',));
            }

            // _modM
            if (0 === strpos($pathinfo, '/evenement/modM') && preg_match('#^/evenement/modM/(?P<id>[^/]++)/(?P<rat>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_modM')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::modMAction',));
            }

            // _find
            if (0 === strpos($pathinfo, '/evenement/find') && preg_match('#^/evenement/find/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_find')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::findAction',));
            }

            // _getUniqEP
            if ('/evenement/getUniqEP' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::getUniqEPAction',  '_route' => '_getUniqEP',);
            }

            // _participerEM
            if (0 === strpos($pathinfo, '/evenement/participerEM') && preg_match('#^/evenement/participerEM/(?P<idU>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_participerEM')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::participerEMAction',));
            }

            // _SwitchEV
            if (0 === strpos($pathinfo, '/evenement/SwitchEV') && preg_match('#^/evenement/SwitchEV/(?P<idE>[^/]++)/(?P<idU>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_SwitchEV')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::SwitchEVAction',));
            }

            // _SwitchBTn
            if (0 === strpos($pathinfo, '/evenement/SwitchBTn') && preg_match('#^/evenement/SwitchBTn/(?P<idE>[^/]++)/(?P<idU>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_SwitchBTn')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::SwitchBTnAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/social')) {
            // social_homepage
            if ('/social' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'social_homepage');
                }

                return array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::indexAction',  '_route' => 'social_homepage',);
            }

            if (0 === strpos($pathinfo, '/social/add')) {
                // social_ajout_profile
                if ('/social/add' === $pathinfo) {
                    return array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::addAction',  '_route' => 'social_ajout_profile',);
                }

                // social_addWS
                if (0 === strpos($pathinfo, '/social/addPostWS') && preg_match('#^/social/addPostWS/(?P<id>[^/]++)/(?P<titre>[^/]++)/(?P<texte>[^/]++)/(?P<image>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_addWS')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::addPostHomeWSAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/social/mod')) {
                // social_modifier_profile
                if (preg_match('#^/social/mod/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_modifier_profile')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::modifierAction',));
                }

                if (0 === strpos($pathinfo, '/social/modp')) {
                    // social_modifier_post
                    if (preg_match('#^/social/modp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_modifier_post')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::modPostAction',));
                    }

                    // social_modifier_post_fromWelcome
                    if (preg_match('#^/social/modp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_modifier_post_fromWelcome')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::modPostAction',));
                    }

                }

                // social_modWS
                if (0 === strpos($pathinfo, '/social/modPostWS') && preg_match('#^/social/modPostWS/(?P<id>[^/]++)/(?P<titre>[^/]++)/(?P<texte>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_modWS')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::modPostHomeWSAction',));
                }

            }

            // social_recherche_profile
            if ('/social/rech' === $pathinfo) {
                return array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::searchAction',  '_route' => 'social_recherche_profile',);
            }

            // social_check_profile
            if (0 === strpos($pathinfo, '/social/check') && preg_match('#^/social/check/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_check_profile')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::checkAction',));
            }

            if (0 === strpos($pathinfo, '/social/del')) {
                // social_delete_profile
                if (preg_match('#^/social/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_delete_profile')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::deleteAction',));
                }

                // social_delete_image
                if (0 === strpos($pathinfo, '/social/delim') && preg_match('#^/social/delim/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_delete_image')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::delImageAction',));
                }

                if (0 === strpos($pathinfo, '/social/delp')) {
                    // social_delete_post
                    if (preg_match('#^/social/delp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_delete_post')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::delPostAction',));
                    }

                    // social_delete_post_fromWelcome
                    if (preg_match('#^/social/delp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_delete_post_fromWelcome')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::delPostAction',));
                    }

                }

                // social_deleteWS
                if (0 === strpos($pathinfo, '/social/delPostWS') && preg_match('#^/social/delPostWS/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_deleteWS')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::deleteHomeWSAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/social/suiv')) {
                // social_suivre_user
                if (preg_match('#^/social/suiv/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_suivre_user')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::followAction',));
                }

                // social_suivreAX_user
                if (0 === strpos($pathinfo, '/social/suivAX') && preg_match('#^/social/suivAX/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_suivreAX_user')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::followAXAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/social/p')) {
                if (0 === strpos($pathinfo, '/social/pasuiv')) {
                    // social_pasuivre_user
                    if (preg_match('#^/social/pasuiv/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_pasuivre_user')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::unfollowAction',));
                    }

                    // social_pasuivreAX_user
                    if (0 === strpos($pathinfo, '/social/pasuivAX') && preg_match('#^/social/pasuivAX/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_pasuivreAX_user')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::unfollowAXAction',));
                    }

                }

                // social_postsAX_home
                if (0 === strpos($pathinfo, '/social/postsAX') && preg_match('#^/social/postsAX/(?P<deb>[^/]++)/(?P<fin>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_postsAX_home')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::postsAXAction',));
                }

                // social_postsWS
                if (0 === strpos($pathinfo, '/social/postsHomeWS') && preg_match('#^/social/postsHomeWS/(?P<userid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_postsWS')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::postsHomeWSAction',));
                }

            }

            // social_followWS
            if (0 === strpos($pathinfo, '/social/followSwitchWS') && preg_match('#^/social/followSwitchWS/(?P<idProfileFollower>[^/]++)/(?P<idProfileFollowed>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_followWS')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::followHomeSwitchWSAction',));
            }

            // social_findProfileWS
            if (0 === strpos($pathinfo, '/social/findProfWS') && preg_match('#^/social/findProfWS/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_findProfileWS')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::findProfileWSAction',));
            }

            // social_uniqWS
            if ('/social/uniqWS' === $pathinfo) {
                return array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::getUniqWSAction',  '_route' => 'social_uniqWS',);
            }

        }

        elseif (0 === strpos($pathinfo, '/commande')) {
            // commande_homepage
            if ('/commande' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'commande_homepage');
                }

                return array (  '_controller' => 'CommandeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'commande_homepage',);
            }

            if (0 === strpos($pathinfo, '/commande/a')) {
                if (0 === strpos($pathinfo, '/commande/afflc')) {
                    // ligne_commande_aff
                    if (preg_match('#^/commande/afflc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ligne_commande_aff')), array (  '_controller' => 'CommandeBundle\\Controller\\LigneDeCommandeController::AfficherLigneDeCommandeAction',));
                    }

                    // ligne_commande_aff_json
                    if (0 === strpos($pathinfo, '/commande/afflcJson') && preg_match('#^/commande/afflcJson/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ligne_commande_aff_json')), array (  '_controller' => 'CommandeBundle\\Controller\\LigneDeCommandeController::AfficherLigneDeCommandeJsonAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/commande/afficherCommande')) {
                    // afficher_commande
                    if ('/commande/afficherCommande' === $pathinfo) {
                        return array (  '_controller' => 'CommandeBundle\\Controller\\LigneDeCommandeController::afficherCommandeAction',  '_route' => 'afficher_commande',);
                    }

                    // afficher_commande_json
                    if (0 === strpos($pathinfo, '/commande/afficherCommandeJson') && preg_match('#^/commande/afficherCommandeJson/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficher_commande_json')), array (  '_controller' => 'CommandeBundle\\Controller\\LigneDeCommandeController::afficherCommandeJsonAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/commande/ajout')) {
                    // ajout_ligne_commande
                    if ('/commande/ajoutbd' === $pathinfo) {
                        return array (  '_controller' => 'CommandeBundle\\Controller\\LigneDeCommandeController::AjoutLigneDeCommandeAction',  '_route' => 'ajout_ligne_commande',);
                    }

                    // ajouter
                    if (0 === strpos($pathinfo, '/commande/ajouter') && preg_match('#^/commande/ajouter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter')), array (  '_controller' => 'CommandeBundle\\Controller\\LigneDePanierController::ajouterAction',));
                    }

                    // ajouter_commande_json
                    if (0 === strpos($pathinfo, '/commande/ajoutCommandeJson') && preg_match('#^/commande/ajoutCommandeJson/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter_commande_json')), array (  '_controller' => 'CommandeBundle\\Controller\\LigneDeCommandeController::AjoutCommandeJsonAction',));
                    }

                    // ajouter_ligne_de_commande_json
                    if (0 === strpos($pathinfo, '/commande/ajoutLigneCommandeJson') && preg_match('#^/commande/ajoutLigneCommandeJson/(?P<id>[^/]++)/(?P<idP>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter_ligne_de_commande_json')), array (  '_controller' => 'CommandeBundle\\Controller\\LigneDeCommandeController::AjoutLigneDeCommandeJsonAction',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/commande/modifierlc')) {
                // ligne_commande_modifier
                if (preg_match('#^/commande/modifierlc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ligne_commande_modifier')), array (  '_controller' => 'CommandeBundle\\Controller\\LigneDeCommandeController::ModifierLigneDeCommandeAction',));
                }

                // ligne_commande_modifier_json
                if (0 === strpos($pathinfo, '/commande/modifierlcJson') && preg_match('#^/commande/modifierlcJson/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ligne_commande_modifier_json')), array (  '_controller' => 'CommandeBundle\\Controller\\LigneDeCommandeController::ModifierLigneDeCommandeJsonAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/commande/supprimer')) {
                // ligne_commande_supprimer
                if (0 === strpos($pathinfo, '/commande/supprimerlc') && preg_match('#^/commande/supprimerlc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ligne_commande_supprimer')), array (  '_controller' => 'CommandeBundle\\Controller\\LigneDeCommandeController::SupprimerLigneDeCommandeAction',));
                }

                // supprimer
                if (preg_match('#^/commande/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer')), array (  '_controller' => 'CommandeBundle\\Controller\\LigneDePanierController::supprimerAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/commande/p')) {
                // panier
                if ('/commande/panier' === $pathinfo) {
                    return array (  '_controller' => 'CommandeBundle\\Controller\\LigneDePanierController::panierAction',  '_route' => 'panier',);
                }

                // commander_produit
                if (0 === strpos($pathinfo, '/commande/putinsession') && preg_match('#^/commande/putinsession/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commander_produit')), array (  '_controller' => 'CommandeBundle\\Controller\\LigneDeCommandeController::PutInSessionAction',));
                }

                // pdf
                if (0 === strpos($pathinfo, '/commande/pdf') && preg_match('#^/commande/pdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pdf')), array (  '_controller' => 'PdfBundle\\Controller\\PdfController::pdfAction',));
                }

            }

        }

        // back_office_homepage
        if ('/back' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'back_office_homepage');
            }

            return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_office_homepage',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_profile_findWS
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_findWS;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_findWS');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::findWSAction',  '_route' => 'fos_user_profile_findWS',);
            }
            not_fos_user_profile_findWS:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        // fos_visitor_home
        if ('' === $trimmedPathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_visitor_home;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'fos_visitor_home');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::indexAction',  '_route' => 'fos_visitor_home',);
        }
        not_fos_visitor_home:

        if (0 === strpos($pathinfo, '/messages')) {
            // fos_message_inbox
            if ('/messages' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_message_inbox');
                }

                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::inboxAction',  '_route' => 'fos_message_inbox',);
            }

            // fos_message_sent
            if ('/messages/sent' === $pathinfo) {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::sentAction',  '_route' => 'fos_message_sent',);
            }

            // fos_message_search
            if ('/messages/search' === $pathinfo) {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::searchAction',  '_route' => 'fos_message_search',);
            }

            // fos_message_deleted
            if ('/messages/deleted' === $pathinfo) {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deletedAction',  '_route' => 'fos_message_deleted',);
            }

            if (0 === strpos($pathinfo, '/messages/new')) {
                // fos_message_thread_new
                if ('/messages/new' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::newThreadAction',  '_route' => 'fos_message_thread_new',);
                }

                // fos_message_thread_new2
                if (preg_match('#^/messages/new/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_new2')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::newThread2Action',));
                }

            }

            // fos_message_thread_delete
            if (preg_match('#^/messages/(?P<threadId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($requestMethod, array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_fos_message_thread_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_delete')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deleteAction',));
            }
            not_fos_message_thread_delete:

            // fos_message_thread_undelete
            if (preg_match('#^/messages/(?P<threadId>[^/]++)/undelete$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_message_thread_undelete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_undelete')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::undeleteAction',));
            }
            not_fos_message_thread_undelete:

            // fos_message_thread_view
            if (preg_match('#^/messages/(?P<threadId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_view')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::threadAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // easyadmin
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'easyadmin');
                }

                return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
            }

            // admin
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
