<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'workshop_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WorkshopBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/workshop/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'local_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LocalBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/local/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stock_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'StockBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ecommerce/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'social_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SocialBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/social/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'evenement_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EvenementBundle\\Controller\\EvenementController::AfficheEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evenement/evenement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EvenementBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evenement/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_AjoutEvent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EvenementBundle\\Controller\\EvenementController::AjoutEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evenement/AjoutEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_UpdateEvent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EvenementBundle\\Controller\\EvenementController::UpdateEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/evenement/UpdateEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_DeleteEvent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EvenementBundle\\Controller\\EvenementController::DeleteEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/evenement/DeleteEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_DetailsEvent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EvenementBundle\\Controller\\EvenementController::DetailsEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/evenement/DetailsEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_RechercheDQL' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EvenementBundle\\Controller\\EvenementController::RechercheDQLAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evenement/RechercheDQL',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_ParticiperEvent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EvenementBundle\\Controller\\EvenementController::participerEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/evenement/ParticiperEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_nParticiperEvent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EvenementBundle\\Controller\\EvenementController::nParticierEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/evenement/nParticiperEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_AfficheEvent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EvenementBundle\\Controller\\EvenementController::AfficheEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evenement/AfficheE',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_AfficheProfil' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EvenementBundle\\Controller\\EvenementController::AfficheProfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/evenement/ProfilEv',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_Rating' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EvenementBundle\\Controller\\EvenementController::ratingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/evenement/Ratingo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_Recherche' => array (  0 =>   array (    0 => 'nom',  ),  1 =>   array (    '_controller' => 'EvenementBundle\\Controller\\EvenementController::RechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nom',    ),    1 =>     array (      0 => 'text',      1 => '/evenement/Recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_RecentDql' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EvenementBundle\\Controller\\EvenementController::RecentDqlAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evenement/Recent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commande_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/commande/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fos/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fos/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fos/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fos/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fos/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fos/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fos/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/fos/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fos/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fos/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fos/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fos/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/fos/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fos/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_visitor_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fos/affichage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notification_list' => array (  0 =>   array (    0 => 'notifiable',  ),  1 =>   array (    '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'notifiable',    ),    1 =>     array (      0 => 'text',      1 => '/notifications',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notification_mark_as_seen' => array (  0 =>   array (    0 => 'notifiable',    1 => 'notification',  ),  1 =>   array (    '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsSeenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'notification',    ),    1 =>     array (      0 => 'text',      1 => '/mark_as_seen',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'notifiable',    ),    3 =>     array (      0 => 'text',      1 => '/notifications',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notification_mark_as_unseen' => array (  0 =>   array (    0 => 'notifiable',    1 => 'notification',  ),  1 =>   array (    '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsUnSeenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'notification',    ),    1 =>     array (      0 => 'text',      1 => '/mark_as_unseen',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'notifiable',    ),    3 =>     array (      0 => 'text',      1 => '/notifications',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notification_mark_all_as_seen' => array (  0 =>   array (    0 => 'notifiable',  ),  1 =>   array (    '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAllAsSeenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/markAllAsSeen',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'notifiable',    ),    2 =>     array (      0 => 'text',      1 => '/notifications',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
