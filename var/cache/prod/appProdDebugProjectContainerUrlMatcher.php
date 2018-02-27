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


        if (0 === strpos($pathinfo, '/workshop')) {
            // workshop_homepage
            if ('/workshop/workshop' === $pathinfo) {
                return array (  '_controller' => 'WorkshopBundle\\Controller\\DefaultController::indexAction',  '_route' => 'workshop_homepage',);
            }

            // _index
            if ('/workshop/index' === $pathinfo) {
                return array (  '_controller' => 'WorkshopBundle\\Controller\\DefaultController::indexAction',  '_route' => '_index',);
            }

            if (0 === strpos($pathinfo, '/workshop/A')) {
                // _AjoutWorkshop
                if ('/workshop/AjoutWorkshop' === $pathinfo) {
                    return array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::AjoutWorkshopAction',  '_route' => '_AjoutWorkshop',);
                }

                // _AfficheVisitWorkshop
                if ('/workshop/AfficheVisitWorkshop' === $pathinfo) {
                    return array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::AfficheVisitWorkshopAction',  '_route' => '_AfficheVisitWorkshop',);
                }

                // _AfficheWorkshop
                if ('/workshop/AfficheWorkshop' === $pathinfo) {
                    return array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::AfficheWorkshopAction',  '_route' => '_AfficheWorkshop',);
                }

            }

            // _DeleteWorkshop
            if (0 === strpos($pathinfo, '/workshop/DeleteWorkshop') && preg_match('#^/workshop/DeleteWorkshop/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_DeleteWorkshop')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::DeleteWorkshopAction',));
            }

            // _DetailsWorkshop
            if (0 === strpos($pathinfo, '/workshop/DetailsWorkshop') && preg_match('#^/workshop/DetailsWorkshop/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_DetailsWorkshop')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::DetailsWorkshopAction',));
            }

            // _UpdateWorkshop
            if (0 === strpos($pathinfo, '/workshop/UpdateWorkshop') && preg_match('#^/workshop/UpdateWorkshop/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_UpdateWorkshop')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::UpdateWorkshopAction',));
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

            // _Participer_work
            if (0 === strpos($pathinfo, '/workshop/Participer_work') && preg_match('#^/workshop/Participer_work/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_Participer_work')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::Participer_workAction',));
            }

            // _PasParticiper_work
            if (0 === strpos($pathinfo, '/workshop/PasParticiper_work') && preg_match('#^/workshop/PasParticiper_work/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_PasParticiper_work')), array (  '_controller' => 'WorkshopBundle\\Controller\\WorkshopController::PasParticiper_workAction',));
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

        }

        elseif (0 === strpos($pathinfo, '/lo')) {
            // local_homepage
            if ('/local' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'local_homepage');
                }

                return array (  '_controller' => 'LocalBundle\\Controller\\DefaultController::indexAction',  '_route' => 'local_homepage',);
            }

            if (0 === strpos($pathinfo, '/login')) {
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

        // stock_homepage
        if ('/ecommerce' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'stock_homepage');
            }

            return array (  '_controller' => 'StockBundle\\Controller\\DefaultController::indexAction',  '_route' => 'stock_homepage',);
        }

        // evenement_homepage
        if ('/evenement' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'evenement_homepage');
            }

            return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::indexAction',  '_route' => 'evenement_homepage',);
        }

        if (0 === strpos($pathinfo, '/social')) {
            // social_homepage
            if ('/social' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'social_homepage');
                }

                return array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::indexAction',  '_route' => 'social_homepage',);
            }

            // social_ajout_profile
            if ('/social/add' === $pathinfo) {
                return array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::addAction',  '_route' => 'social_ajout_profile',);
            }

            // social_modifier_profile
            if (0 === strpos($pathinfo, '/social/mod') && preg_match('#^/social/mod/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
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

                // social_message_pick
                if (0 === strpos($pathinfo, '/social/pick') && preg_match('#^/social/pick/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_message_pick')), array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::pickAction',));
                }

            }

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

            // fos_message_thread_new
            if ('/messages/new' === $pathinfo) {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::newThreadAction',  '_route' => 'fos_message_thread_new',);
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
