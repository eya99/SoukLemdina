<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_17acae959441bca91d6ad37eec57307728b4d1d4a85ed171b94f626035f77875 extends Twig_Template
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
        $__internal_ff0533c984d89ec6afcdcefc6d2666d9b2bdf8497b0d1acecc33a59d87ccc694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff0533c984d89ec6afcdcefc6d2666d9b2bdf8497b0d1acecc33a59d87ccc694->enter($__internal_ff0533c984d89ec6afcdcefc6d2666d9b2bdf8497b0d1acecc33a59d87ccc694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        $__internal_50d03997a22732929a4def520bc7e23ddb3e1517ed710d9e54b08df73362999d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d03997a22732929a4def520bc7e23ddb3e1517ed710d9e54b08df73362999d->enter($__internal_50d03997a22732929a4def520bc7e23ddb3e1517ed710d9e54b08df73362999d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_ff0533c984d89ec6afcdcefc6d2666d9b2bdf8497b0d1acecc33a59d87ccc694->leave($__internal_ff0533c984d89ec6afcdcefc6d2666d9b2bdf8497b0d1acecc33a59d87ccc694_prof);

        
        $__internal_50d03997a22732929a4def520bc7e23ddb3e1517ed710d9e54b08df73362999d->leave($__internal_50d03997a22732929a4def520bc7e23ddb3e1517ed710d9e54b08df73362999d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "EasyAdminBundle:default:label_inaccessible.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/label_inaccessible.html.twig");
    }
}
