<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_d18d0ca16d2d6505325cd0d131e0af234b0263f607263809fc9256ea1639d190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25a958f1a395a476685e693d04e8b1174247bb35f3df02a63b6933d5f37b1a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a958f1a395a476685e693d04e8b1174247bb35f3df02a63b6933d5f37b1a9f->enter($__internal_25a958f1a395a476685e693d04e8b1174247bb35f3df02a63b6933d5f37b1a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_1fdd4cf1e197aa235982efd4d0c219493d6a33d26bf2c86ca013f1810470fbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdd4cf1e197aa235982efd4d0c219493d6a33d26bf2c86ca013f1810470fbea->enter($__internal_1fdd4cf1e197aa235982efd4d0c219493d6a33d26bf2c86ca013f1810470fbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25a958f1a395a476685e693d04e8b1174247bb35f3df02a63b6933d5f37b1a9f->leave($__internal_25a958f1a395a476685e693d04e8b1174247bb35f3df02a63b6933d5f37b1a9f_prof);

        
        $__internal_1fdd4cf1e197aa235982efd4d0c219493d6a33d26bf2c86ca013f1810470fbea->leave($__internal_1fdd4cf1e197aa235982efd4d0c219493d6a33d26bf2c86ca013f1810470fbea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18b50a6bea1bb71244a2e4eec8da7f59e9d2057815efdcc75311f8638cb896ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b50a6bea1bb71244a2e4eec8da7f59e9d2057815efdcc75311f8638cb896ba->enter($__internal_18b50a6bea1bb71244a2e4eec8da7f59e9d2057815efdcc75311f8638cb896ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_80fc5c169802beaea26891ff0586bfdc9d35b80b6cc87bb2f8db8ec5a1914f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80fc5c169802beaea26891ff0586bfdc9d35b80b6cc87bb2f8db8ec5a1914f6f->enter($__internal_80fc5c169802beaea26891ff0586bfdc9d35b80b6cc87bb2f8db8ec5a1914f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_80fc5c169802beaea26891ff0586bfdc9d35b80b6cc87bb2f8db8ec5a1914f6f->leave($__internal_80fc5c169802beaea26891ff0586bfdc9d35b80b6cc87bb2f8db8ec5a1914f6f_prof);

        
        $__internal_18b50a6bea1bb71244a2e4eec8da7f59e9d2057815efdcc75311f8638cb896ba->leave($__internal_18b50a6bea1bb71244a2e4eec8da7f59e9d2057815efdcc75311f8638cb896ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
