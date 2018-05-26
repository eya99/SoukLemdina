<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_6911324f8f436c6ce78300d89994264552a0f9df2e59b9f9adf342ea9aa36d5b extends Twig_Template
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
        $__internal_5377242b34de9afc20fd2800bc8fefec9b89a3f32fba7ccec3db427b6187878f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5377242b34de9afc20fd2800bc8fefec9b89a3f32fba7ccec3db427b6187878f->enter($__internal_5377242b34de9afc20fd2800bc8fefec9b89a3f32fba7ccec3db427b6187878f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_3fc672dd4a332f8c4232f7d87b8793f5787e0306633d8ba1af53a59b2f86c76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc672dd4a332f8c4232f7d87b8793f5787e0306633d8ba1af53a59b2f86c76b->enter($__internal_3fc672dd4a332f8c4232f7d87b8793f5787e0306633d8ba1af53a59b2f86c76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_5377242b34de9afc20fd2800bc8fefec9b89a3f32fba7ccec3db427b6187878f->leave($__internal_5377242b34de9afc20fd2800bc8fefec9b89a3f32fba7ccec3db427b6187878f_prof);

        
        $__internal_3fc672dd4a332f8c4232f7d87b8793f5787e0306633d8ba1af53a59b2f86c76b->leave($__internal_3fc672dd4a332f8c4232f7d87b8793f5787e0306633d8ba1af53a59b2f86c76b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Group/new_content.html.twig");
    }
}
