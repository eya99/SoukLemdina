<?php

/* EasyAdminBundle:data_collector:easyadmin.html.twig */
class __TwigTemplate_f010ebba5dee7d2c20a8681889bc2dd864dcb5c34506f9a8e01c4a5034c413fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "EasyAdminBundle:data_collector:easyadmin.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92ad799f05eba0e9e5626366b7816d57f9270fa6f9b3a7dae4df209f15f23632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ad799f05eba0e9e5626366b7816d57f9270fa6f9b3a7dae4df209f15f23632->enter($__internal_92ad799f05eba0e9e5626366b7816d57f9270fa6f9b3a7dae4df209f15f23632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:data_collector:easyadmin.html.twig"));

        $__internal_eadcb46f81ddc970c0ea9c5538c63a03e1c63345618e5356780f88994e27be46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eadcb46f81ddc970c0ea9c5538c63a03e1c63345618e5356780f88994e27be46->enter($__internal_eadcb46f81ddc970c0ea9c5538c63a03e1c63345618e5356780f88994e27be46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:data_collector:easyadmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92ad799f05eba0e9e5626366b7816d57f9270fa6f9b3a7dae4df209f15f23632->leave($__internal_92ad799f05eba0e9e5626366b7816d57f9270fa6f9b3a7dae4df209f15f23632_prof);

        
        $__internal_eadcb46f81ddc970c0ea9c5538c63a03e1c63345618e5356780f88994e27be46->leave($__internal_eadcb46f81ddc970c0ea9c5538c63a03e1c63345618e5356780f88994e27be46_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e5802b06bf5f39bb173d8b4fdb9eef5ca3d51a2a04a752f410e2e145a06c7bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5802b06bf5f39bb173d8b4fdb9eef5ca3d51a2a04a752f410e2e145a06c7bca->enter($__internal_e5802b06bf5f39bb173d8b4fdb9eef5ca3d51a2a04a752f410e2e145a06c7bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_61b4b39baf605cb8936537823118ed27e3361ed74349253d646458599730d3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b4b39baf605cb8936537823118ed27e3361ed74349253d646458599730d3bc->enter($__internal_61b4b39baf605cb8936537823118ed27e3361ed74349253d646458599730d3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "isEasyAdminAction", array())) {
            // line 5
            echo "        ";
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
            // line 6
            echo "
        ";
            // line 7
            ob_start();
            // line 8
            echo "            ";
            $context["icon_fill_color"] = ((((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) ? ("#222") : ("#AAA"));
            // line 9
            echo "            ";
            $context["icon_height"] = ((((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) ? ("28") : ("24"));
            // line 10
            echo "            <span class=\"icon\">";
            echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("fill_color" => (isset($context["icon_fill_color"]) ? $context["icon_fill_color"] : $this->getContext($context, "icon_fill_color")), "height" => (isset($context["icon_height"]) ? $context["icon_height"] : $this->getContext($context, "icon_height"))));
            echo "</span>
            <span class=\"sf-toolbar-value sf-toolbar-status\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "numEntities", array()), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>EasyAdmin version</b>
            <span class=\"sf-toolbar-status\">";
            // line 17
            echo twig_escape_filter($this->env, twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Managed entities</b>
            <span class=\"sf-toolbar-status\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "numEntities", array()), "html", null, true);
            echo "</span>
        </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 24
            echo "
        ";
            // line 25
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
            echo "
    ";
        }
        
        $__internal_61b4b39baf605cb8936537823118ed27e3361ed74349253d646458599730d3bc->leave($__internal_61b4b39baf605cb8936537823118ed27e3361ed74349253d646458599730d3bc_prof);

        
        $__internal_e5802b06bf5f39bb173d8b4fdb9eef5ca3d51a2a04a752f410e2e145a06c7bca->leave($__internal_e5802b06bf5f39bb173d8b4fdb9eef5ca3d51a2a04a752f410e2e145a06c7bca_prof);

    }

    // line 29
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3128e2e4ff9006b7943593d01669fcd8c25319a744ce03956dee08975cce4eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3128e2e4ff9006b7943593d01669fcd8c25319a744ce03956dee08975cce4eb9->enter($__internal_3128e2e4ff9006b7943593d01669fcd8c25319a744ce03956dee08975cce4eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b693e2e7e5a4d40d1c597d57a81e14964712df017ff381c84a832869354c04f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b693e2e7e5a4d40d1c597d57a81e14964712df017ff381c84a832869354c04f1->enter($__internal_b693e2e7e5a4d40d1c597d57a81e14964712df017ff381c84a832869354c04f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 30
        echo "    <span class=\"label ";
        echo (( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "isEasyAdminAction", array())) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 31
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("height" => 32));
        echo "</span>
        <strong>EasyAdmin</strong>
    </span>
";
        
        $__internal_b693e2e7e5a4d40d1c597d57a81e14964712df017ff381c84a832869354c04f1->leave($__internal_b693e2e7e5a4d40d1c597d57a81e14964712df017ff381c84a832869354c04f1_prof);

        
        $__internal_3128e2e4ff9006b7943593d01669fcd8c25319a744ce03956dee08975cce4eb9->leave($__internal_3128e2e4ff9006b7943593d01669fcd8c25319a744ce03956dee08975cce4eb9_prof);

    }

    // line 36
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03da4d164ca057a136ded4c81c3b63772a1e6859d2e348a3ea7e46560ecf5165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03da4d164ca057a136ded4c81c3b63772a1e6859d2e348a3ea7e46560ecf5165->enter($__internal_03da4d164ca057a136ded4c81c3b63772a1e6859d2e348a3ea7e46560ecf5165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_43000d6856e17b372486d9450f541fcb9c6ad0d7b29530e7d5b8d475b974f642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43000d6856e17b372486d9450f541fcb9c6ad0d7b29530e7d5b8d475b974f642->enter($__internal_43000d6856e17b372486d9450f541fcb9c6ad0d7b29530e7d5b8d475b974f642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 37
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 38
        echo "
    <h2>EasyAdmin <small>(";
        // line 39
        echo twig_escape_filter($this->env, twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        echo ")</small></h2>

    ";
        // line 41
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "isEasyAdminAction", array())) {
            // line 42
            echo "
        <div class=\"empty\">
            <p>No information available because this route is not related to EasyAdmin.</p>
        </div>

    ";
        } else {
            // line 48
            echo "
        ";
            // line 49
            if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
                // line 50
                echo "
            <h3>Request Parameters</h3>
            ";
                // line 52
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array())));
                echo "

        ";
            } else {
                // line 55
                echo "
            ";
                // line 56
                if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array())) {
                    // line 57
                    echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 59
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array(), "any", false, true), "action", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array(), "any", false, true), "action", array()), "-")) : ("-")), "html", null, true);
                    echo "</span>
                    <span class=\"label\">Action</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 64
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array(), "any", false, true), "entity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array(), "any", false, true), "entity", array()), "-")) : ("-")), "html", null, true);
                    echo "</span>
                    <span class=\"label\">Entity Name</span>
                </div>

                ";
                    // line 68
                    if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array()), "id", array())) {
                        // line 69
                        echo "                    <div class=\"metric\">
                        <span class=\"value\">";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array()), "id", array()), "html", null, true);
                        echo "</span>
                        <span class=\"label\">ID</span>
                    </div>
                ";
                    } elseif ($this->getAttribute($this->getAttribute(                    // line 73
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array()), "sort_field", array())) {
                        // line 74
                        echo "                    <div class=\"metric\">
                        <span class=\"value\">";
                        // line 75
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array()), "sort_field", array()), "html", null, true);
                        echo " <span class=\"unit\">(";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array()), "sort_direction", array()), "html", null, true);
                        echo ")</span></span>
                        <span class=\"label\">Sorting</span>
                    </div>
                ";
                    }
                    // line 79
                    echo "            </div>
            ";
                }
                // line 81
                echo "
        ";
            }
            // line 83
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Current Entity Configuration</h3>
                <div class=\"tab-content\">
                    ";
            // line 88
            echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "currentEntityConfig", array())), "method");
            echo "
                </div>

                <br>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Full Backend Configuration</h3>
                <div class=\"tab-content\">

                    <h4>Basic Configuration</h4>
                    ";
            // line 99
            echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => array("site_name" => $this->getAttribute($this->getAttribute(            // line 100
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "site_name", array(), "array"), "formats" => $this->getAttribute($this->getAttribute(            // line 101
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "formats", array(), "array"))), "method");
            // line 102
            echo "

                    <h4>Design Configuration</h4>
                    ";
            // line 105
            echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => array("design" => $this->getAttribute($this->getAttribute(            // line 106
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "design", array(), "array"))), "method");
            // line 107
            echo "

                    <h4>Actions Configuration</h4>
                    ";
            // line 110
            echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => array("disabled_actions" => $this->getAttribute($this->getAttribute(            // line 111
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "disabled_actions", array(), "array"), "list" => $this->getAttribute($this->getAttribute(            // line 112
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "list", array(), "array"), "edit" => $this->getAttribute($this->getAttribute(            // line 113
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "edit", array(), "array"), "new" => $this->getAttribute($this->getAttribute(            // line 114
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "new", array(), "array"), "show" => $this->getAttribute($this->getAttribute(            // line 115
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "show", array(), "array"))), "method");
            // line 116
            echo "

                    <h4>Entities Configuration</h4>
                    ";
            // line 119
            echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => array("entities" => $this->getAttribute($this->getAttribute(            // line 120
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "entities", array(), "array"))), "method");
            // line 121
            echo "

                    <h4>Full Backend Configuration</h4>
                    ";
            // line 124
            echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => array("easy_admin" => $this->getAttribute(            // line 125
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()))), "method");
            // line 126
            echo "
                </div>
            </div>
        </div>

    ";
        }
        // line 132
        echo "
    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle#documentation\">Read documentation</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle\">Project homepage</a></li>
    </ul>

";
        
        $__internal_43000d6856e17b372486d9450f541fcb9c6ad0d7b29530e7d5b8d475b974f642->leave($__internal_43000d6856e17b372486d9450f541fcb9c6ad0d7b29530e7d5b8d475b974f642_prof);

        
        $__internal_03da4d164ca057a136ded4c81c3b63772a1e6859d2e348a3ea7e46560ecf5165->leave($__internal_03da4d164ca057a136ded4c81c3b63772a1e6859d2e348a3ea7e46560ecf5165_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:data_collector:easyadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 132,  307 => 126,  305 => 125,  304 => 124,  299 => 121,  297 => 120,  296 => 119,  291 => 116,  289 => 115,  288 => 114,  287 => 113,  286 => 112,  285 => 111,  284 => 110,  279 => 107,  277 => 106,  276 => 105,  271 => 102,  269 => 101,  268 => 100,  267 => 99,  253 => 88,  246 => 83,  242 => 81,  238 => 79,  229 => 75,  226 => 74,  224 => 73,  218 => 70,  215 => 69,  213 => 68,  206 => 64,  198 => 59,  194 => 57,  192 => 56,  189 => 55,  183 => 52,  179 => 50,  177 => 49,  174 => 48,  166 => 42,  164 => 41,  159 => 39,  156 => 38,  153 => 37,  144 => 36,  130 => 31,  125 => 30,  116 => 29,  103 => 25,  100 => 24,  94 => 21,  87 => 17,  83 => 15,  81 => 14,  78 => 13,  73 => 11,  68 => 10,  65 => 9,  62 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.isEasyAdminAction %}
        {% set profiler_markup_version = profiler_markup_version|default(1) %}

        {% set icon %}
            {% set icon_fill_color = profiler_markup_version == 1 ? '#222' : '#AAA' %}
            {% set icon_height = profiler_markup_version == 1 ? '28' : '24' %}
            <span class=\"icon\">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { fill_color: icon_fill_color, height: icon_height }) }}</span>
            <span class=\"sf-toolbar-value sf-toolbar-status\">{{ collector.numEntities }}</span>
        {% endset %}

        {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>EasyAdmin version</b>
            <span class=\"sf-toolbar-status\">{{ constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Managed entities</b>
            <span class=\"sf-toolbar-status\">{{ collector.numEntities }}</span>
        </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.isEasyAdminAction ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { height: 32 }) }}</span>
        <strong>EasyAdmin</strong>
    </span>
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <h2>EasyAdmin <small>({{ constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }})</small></h2>

    {% if not collector.isEasyAdminAction %}

        <div class=\"empty\">
            <p>No information available because this route is not related to EasyAdmin.</p>
        </div>

    {% else %}

        {% if profiler_markup_version == 1 %}

            <h3>Request Parameters</h3>
            {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.requestParameters }) }}

        {% else %}

            {% if collector.requestParameters %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.requestParameters.action|default('-') }}</span>
                    <span class=\"label\">Action</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ collector.requestParameters.entity|default('-') }}</span>
                    <span class=\"label\">Entity Name</span>
                </div>

                {% if collector.requestParameters.id %}
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.requestParameters.id }}</span>
                        <span class=\"label\">ID</span>
                    </div>
                {% elseif collector.requestParameters.sort_field %}
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.requestParameters.sort_field }} <span class=\"unit\">({{ collector.requestParameters.sort_direction }})</span></span>
                        <span class=\"label\">Sorting</span>
                    </div>
                {% endif %}
            </div>
            {% endif %}

        {% endif %}

        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Current Entity Configuration</h3>
                <div class=\"tab-content\">
                    {{ collector.dump(collector.currentEntityConfig)|raw }}
                </div>

                <br>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Full Backend Configuration</h3>
                <div class=\"tab-content\">

                    <h4>Basic Configuration</h4>
                    {{ collector.dump({
                        'site_name': collector.backendConfig['site_name'],
                        'formats': collector.backendConfig['formats']
                    })|raw }}

                    <h4>Design Configuration</h4>
                    {{ collector.dump({
                        'design': collector.backendConfig['design']
                    })|raw }}

                    <h4>Actions Configuration</h4>
                    {{ collector.dump({
                        'disabled_actions': collector.backendConfig['disabled_actions'],
                        'list': collector.backendConfig['list'],
                        'edit': collector.backendConfig['edit'],
                        'new': collector.backendConfig['new'],
                        'show': collector.backendConfig['show'],
                    })|raw }}

                    <h4>Entities Configuration</h4>
                    {{ collector.dump({
                        'entities': collector.backendConfig['entities']
                    })|raw }}

                    <h4>Full Backend Configuration</h4>
                    {{ collector.dump({
                        'easy_admin': collector.backendConfig
                    })|raw }}
                </div>
            </div>
        </div>

    {% endif %}

    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle#documentation\">Read documentation</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle\">Project homepage</a></li>
    </ul>

{% endblock %}
", "EasyAdminBundle:data_collector:easyadmin.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/data_collector/easyadmin.html.twig");
    }
}
