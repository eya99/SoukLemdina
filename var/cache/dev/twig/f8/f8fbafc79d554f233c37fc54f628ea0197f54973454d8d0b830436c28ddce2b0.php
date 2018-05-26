<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_4fa86ec65713678a48f613e27c62d8b7266a93d1e586f841e2d0235616bab777 extends Twig_Template
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
        $__internal_46f04ae2b1af3bc9d242ada83453bca6fe8f42fa640623edb1b7aa87d5e80f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f04ae2b1af3bc9d242ada83453bca6fe8f42fa640623edb1b7aa87d5e80f85->enter($__internal_46f04ae2b1af3bc9d242ada83453bca6fe8f42fa640623edb1b7aa87d5e80f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_c149808010e9e6de30419fc75c43fc56ba75578c4e9f8320ee9dda6db44b46a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c149808010e9e6de30419fc75c43fc56ba75578c4e9f8320ee9dda6db44b46a0->enter($__internal_c149808010e9e6de30419fc75c43fc56ba75578c4e9f8320ee9dda6db44b46a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 1
        echo "<div class=\"content-wrap\">

    <div class=\"container clearfix\">

        <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
            ";
        // line 7
        echo "            <div class=\"tab-container\">
                <div class=\"tab-content clearfix\" id=\"tab-register\">
                    <div class=\"panel panel-default nobottommargin\">
                        <div class=\"panel-body\" style=\"padding: 40px;\">
                            <h3>Register for an Account</h3>

                            <form id=\"register-form\" name=\"register-form\" class=\"nobottommargin\" action=\"#\"
                                  method=\"post\">


                                <div class=\"col_full\">
                                    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
                                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                    <div>
                                        <input type=\"submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"
                                               class=\"button button-3d button-black\"/>
                                    </div>
                                    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                </div>
                            </form>
                            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_delete_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\" onclick=\"return confirm('Voulez-vous vraiment' +
                                     'supprimer votre compte ?')\"> <input type=\"submit\" value=\"Supprimer Inscription\"
                                                                               class=\"button button-3d button-black nomargin\"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_46f04ae2b1af3bc9d242ada83453bca6fe8f42fa640623edb1b7aa87d5e80f85->leave($__internal_46f04ae2b1af3bc9d242ada83453bca6fe8f42fa640623edb1b7aa87d5e80f85_prof);

        
        $__internal_c149808010e9e6de30419fc75c43fc56ba75578c4e9f8320ee9dda6db44b46a0->leave($__internal_c149808010e9e6de30419fc75c43fc56ba75578c4e9f8320ee9dda6db44b46a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 27,  60 => 24,  54 => 21,  49 => 19,  45 => 18,  32 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content-wrap\">

    <div class=\"container clearfix\">

        <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
            {% trans_default_domain 'FOSUserBundle' %}
            <div class=\"tab-container\">
                <div class=\"tab-content clearfix\" id=\"tab-register\">
                    <div class=\"panel panel-default nobottommargin\">
                        <div class=\"panel-body\" style=\"padding: 40px;\">
                            <h3>Register for an Account</h3>

                            <form id=\"register-form\" name=\"register-form\" class=\"nobottommargin\" action=\"#\"
                                  method=\"post\">


                                <div class=\"col_full\">
                                    {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
                                    {{ form_widget(form) }}
                                    <div>
                                        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\"
                                               class=\"button button-3d button-black\"/>
                                    </div>
                                    {{ form_end(form) }}
                                </div>
                            </form>
                            <a href=\"{{ path('social_delete_profile',{'id':app.user.id}) }}\" onclick=\"return confirm('Voulez-vous vraiment' +
                                     'supprimer votre compte ?')\"> <input type=\"submit\" value=\"Supprimer Inscription\"
                                                                               class=\"button button-3d button-black nomargin\"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "FOSUserBundle:Profile:edit_content.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Profile/edit_content.html.twig");
    }
}
