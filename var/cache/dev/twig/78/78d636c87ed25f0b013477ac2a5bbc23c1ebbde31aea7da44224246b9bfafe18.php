<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_7cfef15c8f1224afd07ef915ee97b44b3ce2ad35846285553cd3600443d94008 extends Twig_Template
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
        $__internal_3495686812e8c59c6d076567071eb8c07381902e4139e7df02a03e1ffdef9ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3495686812e8c59c6d076567071eb8c07381902e4139e7df02a03e1ffdef9ef8->enter($__internal_3495686812e8c59c6d076567071eb8c07381902e4139e7df02a03e1ffdef9ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        $__internal_3556f5d7832c71820a962121997759d06640bf486f589b2b600fd8aae8000c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3556f5d7832c71820a962121997759d06640bf486f589b2b600fd8aae8000c27->enter($__internal_3556f5d7832c71820a962121997759d06640bf486f589b2b600fd8aae8000c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_3495686812e8c59c6d076567071eb8c07381902e4139e7df02a03e1ffdef9ef8->leave($__internal_3495686812e8c59c6d076567071eb8c07381902e4139e7df02a03e1ffdef9ef8_prof);

        
        $__internal_3556f5d7832c71820a962121997759d06640bf486f589b2b600fd8aae8000c27->leave($__internal_3556f5d7832c71820a962121997759d06640bf486f589b2b600fd8aae8000c27_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:field_object.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_object.html.twig");
    }
}
