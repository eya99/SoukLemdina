<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_5943b0e3f2e8d288a4473d91a757feffa5dd00c2dcc7a4ee1d029339382ddfa9 extends Twig_Template
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
        $__internal_84eee6bd2f6eff0ece47724a92e21c77cb71713122d770b5c9b76d8652dbd22c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84eee6bd2f6eff0ece47724a92e21c77cb71713122d770b5c9b76d8652dbd22c->enter($__internal_84eee6bd2f6eff0ece47724a92e21c77cb71713122d770b5c9b76d8652dbd22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_b5732659a9bf812f652ba5e9b4c833e98e670f8b30709f9384ef56271bee269f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5732659a9bf812f652ba5e9b4c833e98e670f8b30709f9384ef56271bee269f->enter($__internal_b5732659a9bf812f652ba5e9b4c833e98e670f8b30709f9384ef56271bee269f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_84eee6bd2f6eff0ece47724a92e21c77cb71713122d770b5c9b76d8652dbd22c->leave($__internal_84eee6bd2f6eff0ece47724a92e21c77cb71713122d770b5c9b76d8652dbd22c_prof);

        
        $__internal_b5732659a9bf812f652ba5e9b4c833e98e670f8b30709f9384ef56271bee269f->leave($__internal_b5732659a9bf812f652ba5e9b4c833e98e670f8b30709f9384ef56271bee269f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
", "EasyAdminBundle:default:label_null.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
