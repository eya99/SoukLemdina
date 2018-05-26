<?php

/* StockBundle::notifications.html.twig */
class __TwigTemplate_d5df35a40e4286e2cefc6ec767316b30b56c36a07209e780c06841635c90dc72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfbc0b669f4c632475e3168431f5bf5d2d987cdc03b2117b2af185e71b81edb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbc0b669f4c632475e3168431f5bf5d2d987cdc03b2117b2af185e71b81edb2->enter($__internal_dfbc0b669f4c632475e3168431f5bf5d2d987cdc03b2117b2af185e71b81edb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::notifications.html.twig"));

        $__internal_23a805d5484d291069e9203ee959e17941910da4e3aeb62cbfba9d8b1d264fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a805d5484d291069e9203ee959e17941910da4e3aeb62cbfba9d8b1d264fa1->enter($__internal_23a805d5484d291069e9203ee959e17941910da4e3aeb62cbfba9d8b1d264fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::notifications.html.twig"));

        // line 1
        echo "Notifications :

<form action=\"";
        // line 3
        echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->generatePath("notification_mark_all_as_seen", $this->getAttribute(twig_first($this->env, (isset($context["notifiableNotifications"]) ? $context["notifiableNotifications"] : $this->getContext($context, "notifiableNotifications"))), "notifiableEntity", array()));
        echo "\"
      method=\"post\">
    <button type=\"submit\">Mark all as seen</button>
</form>
<ul>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifiableNotifications"]) ? $context["notifiableNotifications"] : $this->getContext($context, "notifiableNotifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["notifiableNotification"]) {
            // line 9
            echo "        <li>
            <b>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["notifiableNotification"], "notification", array()), "html", null, true);
            echo "</b>
            <br>
            seen : ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["notifiableNotification"], "seen", array()), "html", null, true);
            echo "
            <form action=\"";
            // line 13
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->generatePath("notification_mark_as_seen", $this->getAttribute($context["notifiableNotification"], "notifiableEntity", array()), $this->getAttribute($context["notifiableNotification"], "notification", array()));
            echo "\"
                  method=\"post\">
                <button type=\"submit\">Mark as seen</button>
            </form>
            <form action=\"";
            // line 17
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->generatePath("notification_mark_as_unseen", $this->getAttribute($context["notifiableNotification"], "notifiableEntity", array()), $this->getAttribute($context["notifiableNotification"], "notification", array()));
            echo "\"
                  method=\"post\">
                <button type=\"submit\">Mark as unseen</button>
            </form>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notifiableNotification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ul>
";
        
        $__internal_dfbc0b669f4c632475e3168431f5bf5d2d987cdc03b2117b2af185e71b81edb2->leave($__internal_dfbc0b669f4c632475e3168431f5bf5d2d987cdc03b2117b2af185e71b81edb2_prof);

        
        $__internal_23a805d5484d291069e9203ee959e17941910da4e3aeb62cbfba9d8b1d264fa1->leave($__internal_23a805d5484d291069e9203ee959e17941910da4e3aeb62cbfba9d8b1d264fa1_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle::notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  60 => 17,  53 => 13,  49 => 12,  44 => 10,  41 => 9,  37 => 8,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Notifications :

<form action=\"{{ mgilet_notification_generate_path('notification_mark_all_as_seen', notifiableNotifications|first.notifiableEntity) }}\"
      method=\"post\">
    <button type=\"submit\">Mark all as seen</button>
</form>
<ul>
    {% for notifiableNotification in notifiableNotifications %}
        <li>
            <b>{{ notifiableNotification.notification }}</b>
            <br>
            seen : {{ notifiableNotification.seen }}
            <form action=\"{{ mgilet_notification_generate_path('notification_mark_as_seen', notifiableNotification.notifiableEntity, notifiableNotification.notification) }}\"
                  method=\"post\">
                <button type=\"submit\">Mark as seen</button>
            </form>
            <form action=\"{{ mgilet_notification_generate_path('notification_mark_as_unseen', notifiableNotification.notifiableEntity, notifiableNotification.notification) }}\"
                  method=\"post\">
                <button type=\"submit\">Mark as unseen</button>
            </form>
        </li>
    {% endfor %}
</ul>
", "StockBundle::notifications.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/StockBundle/Resources/views/notifications.html.twig");
    }
}
