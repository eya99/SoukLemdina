<?php

/* SUserBundle:Security:login_content.html.twig */
class __TwigTemplate_8f912630204ae5f0524f9f2984c9ba66fe0a4eadeefa3c9a42409f0593312c97 extends Twig_Template
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
        $__internal_614f9c5f446cab160442a26a8f7423993b4244bd4b909cd7eb38d3aa004c1a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614f9c5f446cab160442a26a8f7423993b4244bd4b909cd7eb38d3aa004c1a8b->enter($__internal_614f9c5f446cab160442a26a8f7423993b4244bd4b909cd7eb38d3aa004c1a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUserBundle:Security:login_content.html.twig"));

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
            ";
            // line 31
            if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
                // line 32
                echo "                <div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
                echo "</div>
            ";
            }
            // line 34
            echo "
            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-register\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\" style=\"padding: 40px;\">
                                <h3>Login to your Account</h3>
                                <form action=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
            echo "\" method=\"post\">

                                    ";
            // line 43
            if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
                // line 44
                echo "                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
                echo "\"/>
                                    ";
            }
            // line 46
            echo "
                                    <div class=\"col_full\">
                                        <label for=\"username\">";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\"
                                               value=\"";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\" required=\"required\"/>
                                    </div>

                                    <div class=\"col_full\">
                                        <label for=\"password\">";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\"
                                               required=\"required\"/>
                                    </div>

                                    <div class=\"col_full nobottommargin\">
                                        <input class=\"button button-3d button-black nomargin\" type=\"submit\" id=\"_submit\"
                                               name=\"_submit\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "\"/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input class=\"checkbox-style\" type=\"checkbox\" id=\"remember_me\"
                                               name=\"_remember_me\"
                                               value=\"on\"/>
                                        <label class=\"checkbox-style-2-label\"
                                               for=\"remember_me\">";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 78
        echo "    </div>
</div>

";
        
        $__internal_614f9c5f446cab160442a26a8f7423993b4244bd4b909cd7eb38d3aa004c1a8b->leave($__internal_614f9c5f446cab160442a26a8f7423993b4244bd4b909cd7eb38d3aa004c1a8b_prof);

    }

    public function getTemplateName()
    {
        return "SUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 78,  161 => 67,  152 => 61,  142 => 54,  135 => 50,  130 => 48,  126 => 46,  120 => 44,  118 => 43,  113 => 41,  104 => 34,  98 => 32,  96 => 31,  93 => 30,  90 => 28,  87 => 27,  81 => 26,  72 => 23,  67 => 22,  62 => 21,  57 => 20,  55 => 19,  48 => 14,  42 => 11,  38 => 10,  32 => 8,  30 => 7,  22 => 1,);
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

            {% if error %}
                <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}

            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-register\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\" style=\"padding: 40px;\">
                                <h3>Login to your Account</h3>
                                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">

                                    {% if csrf_token %}
                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
                                    {% endif %}

                                    <div class=\"col_full\">
                                        <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\"
                                               value=\"{{ last_username }}\" required=\"required\"/>
                                    </div>

                                    <div class=\"col_full\">
                                        <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\"
                                               required=\"required\"/>
                                    </div>

                                    <div class=\"col_full nobottommargin\">
                                        <input class=\"button button-3d button-black nomargin\" type=\"submit\" id=\"_submit\"
                                               name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\"/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input class=\"checkbox-style\" type=\"checkbox\" id=\"remember_me\"
                                               name=\"_remember_me\"
                                               value=\"on\"/>
                                        <label class=\"checkbox-style-2-label\"
                                               for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endif %}
    </div>
</div>

", "SUserBundle:Security:login_content.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Security/login_content.html.twig");
    }
}
