<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_7925d76b15d28ad0a6d997847bc81d2ca276c017ecebf1deb6836a8e5c6fa06e extends Twig_Template
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
        $__internal_3b4b041deead49d95ba56050f29113f89e99e2e8b2ef857a06b7bd81179f22b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4b041deead49d95ba56050f29113f89e99e2e8b2ef857a06b7bd81179f22b4->enter($__internal_3b4b041deead49d95ba56050f29113f89e99e2e8b2ef857a06b7bd81179f22b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_3b4b041deead49d95ba56050f29113f89e99e2e8b2ef857a06b7bd81179f22b4->leave($__internal_3b4b041deead49d95ba56050f29113f89e99e2e8b2ef857a06b7bd81179f22b4_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_null.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
