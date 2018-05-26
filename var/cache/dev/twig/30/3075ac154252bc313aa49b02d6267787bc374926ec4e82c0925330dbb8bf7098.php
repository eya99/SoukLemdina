<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_d13572364668f7cafcd3e1c26b13df30b179f9d0edb7d37cf3b3f724e05ea88b extends Twig_Template
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
        $__internal_e931b252d96275af658403caf1d6890262f69943d637d052f3925144b4a2c2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e931b252d96275af658403caf1d6890262f69943d637d052f3925144b4a2c2f2->enter($__internal_e931b252d96275af658403caf1d6890262f69943d637d052f3925144b4a2c2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_dc73add8c5237683ebffaa1f14b747d116a511fd12ce4bdb9d755e7206a52075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc73add8c5237683ebffaa1f14b747d116a511fd12ce4bdb9d755e7206a52075->enter($__internal_dc73add8c5237683ebffaa1f14b747d116a511fd12ce4bdb9d755e7206a52075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_e931b252d96275af658403caf1d6890262f69943d637d052f3925144b4a2c2f2->leave($__internal_e931b252d96275af658403caf1d6890262f69943d637d052f3925144b4a2c2f2_prof);

        
        $__internal_dc73add8c5237683ebffaa1f14b747d116a511fd12ce4bdb9d755e7206a52075->leave($__internal_dc73add8c5237683ebffaa1f14b747d116a511fd12ce4bdb9d755e7206a52075_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_empty.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/label_empty.html.twig");
    }
}
