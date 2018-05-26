<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_6d9bcbfef46592816b5de43fbc3237c9298648ed4eb05b5ff07982474520deae extends Twig_Template
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
        $__internal_2e923a1e41d233572a6753b76ef63950af6927d26d89b37b1fbc8e32b0cf2a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e923a1e41d233572a6753b76ef63950af6927d26d89b37b1fbc8e32b0cf2a68->enter($__internal_2e923a1e41d233572a6753b76ef63950af6927d26d89b37b1fbc8e32b0cf2a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

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
        
        $__internal_2e923a1e41d233572a6753b76ef63950af6927d26d89b37b1fbc8e32b0cf2a68->leave($__internal_2e923a1e41d233572a6753b76ef63950af6927d26d89b37b1fbc8e32b0cf2a68_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 27,  57 => 24,  51 => 21,  46 => 19,  42 => 18,  29 => 7,  22 => 1,);
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
</div>", "@FOSUser/Profile/edit_content.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Profile/edit_content.html.twig");
    }
}
