<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_c0a8aac31ddb699138914f87109ac21ac0a61f9fc5eca531a2fb619bad6d8320 extends Twig_Template
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
        $__internal_3cf4d15c11561fa63ab3b619619c69f89dce58065783b1a9be9d45e57538bf96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf4d15c11561fa63ab3b619619c69f89dce58065783b1a9be9d45e57538bf96->enter($__internal_3cf4d15c11561fa63ab3b619619c69f89dce58065783b1a9be9d45e57538bf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_b5daa8cda0e54d3325d334a6cebcde65d553af5a82cca93109b6e98cf5c9b079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5daa8cda0e54d3325d334a6cebcde65d553af5a82cca93109b6e98cf5c9b079->enter($__internal_b5daa8cda0e54d3325d334a6cebcde65d553af5a82cca93109b6e98cf5c9b079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<div class=\"content-wrap\">

    <div class=\"container clearfix\">

        <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
            <div>
                ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "                &nbsp;&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "
                |
                <a href=\"";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
                ";
        } else {
            // line 14
            echo "

            </div>
            <div>

                ";
            // line 19
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
                // line 20
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 21
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 22
                        echo "                            <div class=\"flash-";
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "\">
                                ";
                        // line 23
                        echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                        echo "
                            </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                ";
            }
            // line 28
            echo "            </div>
            ";
            // line 30
            echo "

            <div class=\"tab-container\">
                <div class=\"tab-content clearfix\" id=\"tab-register\">
                    <div class=\"panel panel-default nobottommargin\">
                        <div class=\"panel-body\" style=\"padding: 40px;\">
                            <h3>Register for an Account</h3>

                            <form id=\"register-form\" name=\"register-form\" class=\"nobottommargin\" action=\"#\"
                                  method=\"post\">


                                <div class=\"col_full\">
                                    ";
            // line 43
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
            echo "
                                    ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
                                    <br>
                                    <input type=\"submit\" class=\"button button-3d button-black nomargin\"
                                           value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "\"/>
                                </div>
                                ";
            // line 49
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 56
        echo "        </div>
    </div>
</div>";
        
        $__internal_3cf4d15c11561fa63ab3b619619c69f89dce58065783b1a9be9d45e57538bf96->leave($__internal_3cf4d15c11561fa63ab3b619619c69f89dce58065783b1a9be9d45e57538bf96_prof);

        
        $__internal_b5daa8cda0e54d3325d334a6cebcde65d553af5a82cca93109b6e98cf5c9b079->leave($__internal_b5daa8cda0e54d3325d334a6cebcde65d553af5a82cca93109b6e98cf5c9b079_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 56,  126 => 49,  121 => 47,  115 => 44,  111 => 43,  96 => 30,  93 => 28,  90 => 27,  84 => 26,  75 => 23,  70 => 22,  65 => 21,  60 => 20,  58 => 19,  51 => 14,  45 => 11,  41 => 10,  35 => 8,  33 => 7,  25 => 1,);
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
            <div>
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                &nbsp;&nbsp;&nbsp;{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}
                |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
                {% else %}


            </div>
            <div>

                {% if app.request.hasPreviousSession %}
                    {% for type, messages in app.session.flashbag.all() %}
                        {% for message in messages %}
                            <div class=\"flash-{{ type }}\">
                                {{ message }}
                            </div>
                        {% endfor %}
                    {% endfor %}
                {% endif %}
            </div>
            {% trans_default_domain 'FOSUserBundle' %}


            <div class=\"tab-container\">
                <div class=\"tab-content clearfix\" id=\"tab-register\">
                    <div class=\"panel panel-default nobottommargin\">
                        <div class=\"panel-body\" style=\"padding: 40px;\">
                            <h3>Register for an Account</h3>

                            <form id=\"register-form\" name=\"register-form\" class=\"nobottommargin\" action=\"#\"
                                  method=\"post\">


                                <div class=\"col_full\">
                                    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
                                    {{ form_widget(form) }}
                                    <br>
                                    <input type=\"submit\" class=\"button button-3d button-black nomargin\"
                                           value=\"{{ 'registration.submit'|trans }}\"/>
                                </div>
                                {{ form_end(form) }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {% endif %}
        </div>
    </div>
</div>", "FOSUserBundle:Registration:register_content.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Registration/register_content.html.twig");
    }
}
