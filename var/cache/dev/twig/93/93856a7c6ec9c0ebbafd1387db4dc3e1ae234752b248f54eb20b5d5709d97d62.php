<?php

/* FOSMessageBundle:Message:threads_list.html.twig */
class __TwigTemplate_9baeeb063cd8abf2239bf8e87a2e2ecdde2df7f1e3aeac5e7ebb2dda2a214b01 extends Twig_Template
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
        $__internal_80039203b85c2bd73fb0f593991ae61f41c6e62a7290bc245477fd4bec41b28a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80039203b85c2bd73fb0f593991ae61f41c6e62a7290bc245477fd4bec41b28a->enter($__internal_80039203b85c2bd73fb0f593991ae61f41c6e62a7290bc245477fd4bec41b28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:threads_list.html.twig"));

        $__internal_9799bac8afded6e7dac757fbef3b04998f2ddcdd044688f76fd7483861bf525e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9799bac8afded6e7dac757fbef3b04998f2ddcdd044688f76fd7483861bf525e->enter($__internal_9799bac8afded6e7dac757fbef3b04998f2ddcdd044688f76fd7483861bf525e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:threads_list.html.twig"));

        // line 1
        echo "<div class=\"table-responsive\">
    <table class=\"table table-bordered table-striped\">
        <colgroup>
            <col class=\"col-xs-1\">
            <col class=\"col-xs-7\">
        </colgroup>
        <thead>
        <tr>
            <th>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Objet", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Starter", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Date de début", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Messages", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Dernier Message", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Actions", array(), "FOSMessageBundle");
        echo "</th>
        </tr>
        </thead>

        <tbody >

        ";
        // line 20
        if ((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads"))) {
            // line 21
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 22
                echo "                <tr>
                    <td>
                        <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\">
                            ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "subject", array()), "html", null, true);
                echo "
                        </a>

                        ";
                // line 28
                if ( !$this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->isRead($context["thread"])) {
                    // line 29
                    echo "                            (";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Nouveau", array(), "FOSMessageBundle");
                    echo ")
                        ";
                }
                // line 31
                echo "                    </td>
                    <td>
                        ";
                // line 33
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($context["thread"], "createdBy", array()))) {
                    // line 34
                    echo "                            Me
                        ";
                } else {
                    // line 36
                    echo "                            ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["thread"], "createdBy", array()), "firstname", array()) . " ") . $this->getAttribute($this->getAttribute($context["thread"], "createdBy", array()), "lastname", array())), "html", null, true);
                    echo "
                        ";
                }
                // line 38
                echo "                    </td>
                    <td>
                        <code>";
                // line 40
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["thread"], "createdAt", array())), "html", null, true);
                echo "</code>
                    </td>
                    <td>
                        ";
                // line 43
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["thread"], "messages", array())), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 46
                if ($this->getAttribute($context["thread"], "lastMessage", array())) {
                    // line 47
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                    echo "#message_";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "id", array()), "html", null, true);
                    echo "\"
                               title=\"";
                    // line 48
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("goto_last", array(), "FOSMessageBundle");
                    echo "\">
                                →
                            </a>
                            ";
                    // line 51
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("on", array("%date%" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "createdAt", array()))), "FOSMessageBundle");
                    // line 52
                    echo "                            <br/>
                            ";
                    // line 53
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("by", array("%sender%" => twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "sender", array()))), "FOSMessageBundle");
                    // line 54
                    echo "                        ";
                } else {
                    // line 55
                    echo "                            ----
                        ";
                }
                // line 57
                echo "                    </td>
                    <td>
                        ";
                // line 59
                if ($this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->canDeleteThread($context["thread"])) {
                    // line 60
                    echo "                            ";
                    if ($this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->isThreadDeletedByParticipant($context["thread"])) {
                        // line 61
                        echo "                                ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_undelete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 62
                        echo "                                ";
                        ob_start();
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("undelete", array(), "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 63
                        echo "                            ";
                    } else {
                        // line 64
                        echo "                                ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_delete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 65
                        echo "                                ";
                        ob_start();
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("delete", array(), "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 66
                        echo "                            ";
                    }
                    // line 67
                    echo "                            <form action=\"";
                    echo twig_escape_filter($this->env, (isset($context["formAction"]) ? $context["formAction"] : $this->getContext($context, "formAction")), "html", null, true);
                    echo "\" method=\"post\">
                                <input type=\"submit\" value=\"";
                    // line 68
                    echo twig_escape_filter($this->env, (isset($context["submitValue"]) ? $context["submitValue"] : $this->getContext($context, "submitValue")), "html", null, true);
                    echo "\"
                                       class=\"button button-3d button-black\"/>
                            </form>
                        ";
                }
                // line 72
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        ";
        } else {
            // line 76
            echo "            <tr>
                <td colspan=\"6\">
                    ";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("no_thread", array(), "FOSMessageBundle");
            echo ".
                </td>
            </tr>
        ";
        }
        // line 82
        echo "
        </tbody>

    </table>
</div>
";
        
        $__internal_80039203b85c2bd73fb0f593991ae61f41c6e62a7290bc245477fd4bec41b28a->leave($__internal_80039203b85c2bd73fb0f593991ae61f41c6e62a7290bc245477fd4bec41b28a_prof);

        
        $__internal_9799bac8afded6e7dac757fbef3b04998f2ddcdd044688f76fd7483861bf525e->leave($__internal_9799bac8afded6e7dac757fbef3b04998f2ddcdd044688f76fd7483861bf525e_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:threads_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 82,  216 => 78,  212 => 76,  209 => 75,  201 => 72,  194 => 68,  189 => 67,  186 => 66,  181 => 65,  176 => 64,  173 => 63,  168 => 62,  163 => 61,  160 => 60,  158 => 59,  154 => 57,  150 => 55,  147 => 54,  145 => 53,  142 => 52,  140 => 51,  134 => 48,  127 => 47,  125 => 46,  119 => 43,  113 => 40,  109 => 38,  103 => 36,  99 => 34,  97 => 33,  93 => 31,  87 => 29,  85 => 28,  79 => 25,  75 => 24,  71 => 22,  66 => 21,  64 => 20,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"table-responsive\">
    <table class=\"table table-bordered table-striped\">
        <colgroup>
            <col class=\"col-xs-1\">
            <col class=\"col-xs-7\">
        </colgroup>
        <thead>
        <tr>
            <th>{% trans from 'FOSMessageBundle' %}Objet{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}Starter{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}Date de début{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}Messages{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}Dernier Message{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}Actions{% endtrans %}</th>
        </tr>
        </thead>

        <tbody >

        {% if threads %}
            {% for thread in threads %}
                <tr>
                    <td>
                        <a href=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}\">
                            {{ thread.subject }}
                        </a>

                        {% if not fos_message_is_read(thread) %}
                            ({% trans from 'FOSMessageBundle' %}Nouveau{% endtrans %})
                        {% endif %}
                    </td>
                    <td>
                        {% if app.user.username == thread.createdBy %}
                            Me
                        {% else %}
                            {{ thread.createdBy.firstname ~' '~ thread.createdBy.lastname }}
                        {% endif %}
                    </td>
                    <td>
                        <code>{{ thread.createdAt|date }}</code>
                    </td>
                    <td>
                        {{ thread.messages|length }}
                    </td>
                    <td>
                        {% if thread.lastMessage %}
                            <a href=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}#message_{{ thread.lastMessage.id }}\"
                               title=\"{% trans from 'FOSMessageBundle' %}goto_last{% endtrans %}\">
                                →
                            </a>
                            {% trans with {'%date%': thread.lastMessage.createdAt|date} from 'FOSMessageBundle' %}on{% endtrans %}
                            <br/>
                            {% trans with {'%sender%': thread.lastMessage.sender|e } from 'FOSMessageBundle' %}by{% endtrans %}
                        {% else %}
                            ----
                        {% endif %}
                    </td>
                    <td>
                        {% if fos_message_can_delete_thread(thread) %}
                            {% if fos_message_deleted_by_participant(thread) %}
                                {% set formAction %}{{ url('fos_message_thread_undelete', {'threadId': thread.id}) }}{% endset %}
                                {% set submitValue %}{% trans from 'FOSMessageBundle' %}undelete{% endtrans %}{% endset %}
                            {% else %}
                                {% set formAction %}{{ url('fos_message_thread_delete', {'threadId': thread.id}) }}{% endset %}
                                {% set submitValue %}{% trans from 'FOSMessageBundle' %}delete{% endtrans %}{% endset %}
                            {% endif %}
                            <form action=\"{{ formAction }}\" method=\"post\">
                                <input type=\"submit\" value=\"{{ submitValue }}\"
                                       class=\"button button-3d button-black\"/>
                            </form>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
        {% else %}
            <tr>
                <td colspan=\"6\">
                    {% trans from 'FOSMessageBundle' %}no_thread{% endtrans %}.
                </td>
            </tr>
        {% endif %}

        </tbody>

    </table>
</div>
", "FOSMessageBundle:Message:threads_list.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/threads_list.html.twig");
    }
}
