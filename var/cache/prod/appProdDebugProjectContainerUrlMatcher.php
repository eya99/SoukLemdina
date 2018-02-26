<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        // workshop_homepage
        if ('/workshop' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'workshop_homepage');
            }

            return array (  '_controller' => 'WorkshopBundle\\Controller\\DefaultController::indexAction',  '_route' => 'workshop_homepage',);
        }

        // local_homepage
        if ('/local' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'local_homepage');
            }

            return array (  '_controller' => 'LocalBundle\\Controller\\DefaultController::indexAction',  '_route' => 'local_homepage',);
        }

        // stock_homepage
        if ('/ecommerce' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'stock_homepage');
            }

            return array (  '_controller' => 'StockBundle\\Controller\\DefaultController::indexAction',  '_route' => 'stock_homepage',);
        }

        if (0 === strpos($pathinfo, '/evenement')) {
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

            // _DeleteEvent
            if (0 === strpos($pathinfo, '/evenement/DeleteEvent') && preg_match('#^/evenement/DeleteEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_DeleteEvent')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::DeleteEventAction',));
            }

            // _DetailsEvent
            if (0 === strpos($pathinfo, '/evenement/DetailsEvent') && preg_match('#^/evenement/DetailsEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_DetailsEvent')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::DetailsEventAction',));
            }

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

            // _Rating
            if (0 === strpos($pathinfo, '/evenement/Ratingo') && preg_match('#^/evenement/Ratingo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_Rating')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::ratingAction',));
            }

            // _ParticiperEvent
            if (0 === strpos($pathinfo, '/evenement/ParticiperEvent') && preg_match('#^/evenement/ParticiperEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_ParticiperEvent')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::participerEventAction',));
            }

            // _nParticiperEvent
            if (0 === strpos($pathinfo, '/evenement/nParticiperEvent') && preg_match('#^/evenement/nParticiperEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_nParticiperEvent')), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::nParticierEventAction',));
            }

            // _sendNotification
            if ('/evenement/sendNotification' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::AfficheEventAction',  '_route' => '_sendNotification',);
            }

        }

        // social_homepage
        if ('/social' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'social_homepage');
            }

            return array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::indexAction',  '_route' => 'social_homepage',);
        }

        // commande_homepage
        if ('/commande' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'commande_homepage');
            }

            return array (  '_controller' => 'CommandeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'commande_homepage',);
        }

        // back_office_homepage
        if ('/back' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'back_office_homepage');
            }

            return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_office_homepage',);
        }

        if (0 === strpos($pathinfo, '/fos')) {
            if (0 === strpos($pathinfo, '/fos/login')) {
                // fos_user_security_login
                if ('/fos/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/fos/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/fos/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

            if (0 === strpos($pathinfo, '/fos/profile')) {
                // fos_user_profile_show
                if ('/fos/profile' === $trimmedPathinfo) {
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
                if ('/fos/profile/edit' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/fos/profile/change-password' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_change_password;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
                }
                not_fos_user_change_password:

            }

            elseif (0 === strpos($pathinfo, '/fos/register')) {
                // fos_user_registration_register
                if ('/fos/register' === $trimmedPathinfo) {
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
                if ('/fos/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/fos/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/fos/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/fos/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/fos/resetting')) {
                // fos_user_resetting_request
                if ('/fos/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/fos/resetting/reset') && preg_match('#^/fos/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/fos/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/fos/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

            // fos_visitor_home
            if ('/fos/affichage' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_visitor_home;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::indexAction',  '_route' => 'fos_visitor_home',);
            }
            not_fos_visitor_home:

        }

        elseif (0 === strpos($pathinfo, '/notifications')) {
            // notification_list
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_notification_list;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_list')), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::listAction',));
            }
            not_notification_list:

            // notification_mark_as_seen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/mark_as_seen/(?P<notification>[^/]++)$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_notification_mark_as_seen;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_mark_as_seen')), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsSeenAction',));
            }
            not_notification_mark_as_seen:

            // notification_mark_as_unseen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/mark_as_unseen/(?P<notification>[^/]++)$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_notification_mark_as_unseen;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_mark_as_unseen')), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsUnSeenAction',));
            }
            not_notification_mark_as_unseen:

            // notification_mark_all_as_seen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/markAllAsSeen$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_notification_mark_all_as_seen;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_mark_all_as_seen')), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAllAsSeenAction',));
            }
            not_notification_mark_all_as_seen:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
