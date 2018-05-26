<?php

/* MgiletNotificationBundle::notification_list.html.twig */
class __TwigTemplate_21f4d7c3a183950c2db6a091bebe6fad2fe2ce2d9e8030f2154161cda0ebe75e extends Twig_Template
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
        $__internal_5d922d3537850dadf6d40e4948235f72c66e60307564bda7b766654a3fe856fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d922d3537850dadf6d40e4948235f72c66e60307564bda7b766654a3fe856fc->enter($__internal_5d922d3537850dadf6d40e4948235f72c66e60307564bda7b766654a3fe856fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MgiletNotificationBundle::notification_list.html.twig"));

        $__internal_61c6d31dd20535179fc27366277754b373d003942ac37f19a534b2ade739f0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c6d31dd20535179fc27366277754b373d003942ac37f19a534b2ade739f0bf->enter($__internal_61c6d31dd20535179fc27366277754b373d003942ac37f19a534b2ade739f0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MgiletNotificationBundle::notification_list.html.twig"));

        // line 1
        echo "Notifications :
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notificationList"]) ? $context["notificationList"] : $this->getContext($context, "notificationList")));
        foreach ($context['_seq'] as $context["_key"] => $context["notificationItem"]) {
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["notificationItem"], 0, array(), "array"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificationItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5d922d3537850dadf6d40e4948235f72c66e60307564bda7b766654a3fe856fc->leave($__internal_5d922d3537850dadf6d40e4948235f72c66e60307564bda7b766654a3fe856fc_prof);

        
        $__internal_61c6d31dd20535179fc27366277754b373d003942ac37f19a534b2ade739f0bf->leave($__internal_61c6d31dd20535179fc27366277754b373d003942ac37f19a534b2ade739f0bf_prof);

    }

    public function getTemplateName()
    {
        return "MgiletNotificationBundle::notification_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  25 => 1,);
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
{% for notificationItem in notificationList %}
    {{ notificationItem[0] }}
{% endfor %}
", "MgiletNotificationBundle::notification_list.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/mgilet/notification-bundle/Resources/views/notification_list.html.twig");
    }
}
