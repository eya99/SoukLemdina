<?php

/* EasyAdminBundle:default:menu.html.twig */
class __TwigTemplate_5a447b3546d5611b7280535bcd86bcf1e72c44b4b7c744b1a5b572117604d3d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_menu_before' => array($this, 'block_main_menu_before'),
            'main_menu' => array($this, 'block_main_menu'),
            'menu_item' => array($this, 'block_menu_item'),
            'menu_subitem' => array($this, 'block_menu_subitem'),
            'main_menu_after' => array($this, 'block_main_menu_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_894f62bb0d15347c88203ed02c366b19374f88f389c5f5b09dba92705d292b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894f62bb0d15347c88203ed02c366b19374f88f389c5f5b09dba92705d292b94->enter($__internal_894f62bb0d15347c88203ed02c366b19374f88f389c5f5b09dba92705d292b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        $__internal_14e5e759404df5a18cf635fc275afea1f5fb6460695928c0cdeed77888c1238b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e5e759404df5a18cf635fc275afea1f5fb6460695928c0cdeed77888c1238b->enter($__internal_14e5e759404df5a18cf635fc275afea1f5fb6460695928c0cdeed77888c1238b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        // line 28
        echo "
";
        // line 29
        $context["helper"] = $this;
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 32
        echo "
<ul class=\"sidebar-menu\">
    ";
        // line 34
        $context["_menu_items"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.menu");
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('main_menu', $context, $blocks);
        // line 57
        echo "</ul>

";
        // line 59
        $this->displayBlock('main_menu_after', $context, $blocks);
        
        $__internal_894f62bb0d15347c88203ed02c366b19374f88f389c5f5b09dba92705d292b94->leave($__internal_894f62bb0d15347c88203ed02c366b19374f88f389c5f5b09dba92705d292b94_prof);

        
        $__internal_14e5e759404df5a18cf635fc275afea1f5fb6460695928c0cdeed77888c1238b->leave($__internal_14e5e759404df5a18cf635fc275afea1f5fb6460695928c0cdeed77888c1238b_prof);

    }

    // line 31
    public function block_main_menu_before($context, array $blocks = array())
    {
        $__internal_b10a3bdf0b691aefbc36147270dcfa99c9b4c1b0e467314c9448b59ac6e1b642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b10a3bdf0b691aefbc36147270dcfa99c9b4c1b0e467314c9448b59ac6e1b642->enter($__internal_b10a3bdf0b691aefbc36147270dcfa99c9b4c1b0e467314c9448b59ac6e1b642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        $__internal_03a3c32f71a91ec1565c48be31fc0d1faec639824d66d4316801172c3004fd49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a3c32f71a91ec1565c48be31fc0d1faec639824d66d4316801172c3004fd49->enter($__internal_03a3c32f71a91ec1565c48be31fc0d1faec639824d66d4316801172c3004fd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_03a3c32f71a91ec1565c48be31fc0d1faec639824d66d4316801172c3004fd49->leave($__internal_03a3c32f71a91ec1565c48be31fc0d1faec639824d66d4316801172c3004fd49_prof);

        
        $__internal_b10a3bdf0b691aefbc36147270dcfa99c9b4c1b0e467314c9448b59ac6e1b642->leave($__internal_b10a3bdf0b691aefbc36147270dcfa99c9b4c1b0e467314c9448b59ac6e1b642_prof);

    }

    // line 36
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_a520be64acc597821e0c2a1d7281f4545f6e330b33396e956924e98a22df02f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a520be64acc597821e0c2a1d7281f4545f6e330b33396e956924e98a22df02f7->enter($__internal_a520be64acc597821e0c2a1d7281f4545f6e330b33396e956924e98a22df02f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        $__internal_933d3f8263c6d555176f554df8c81fc0d17f5834a0a87bf84da58d61583617f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933d3f8263c6d555176f554df8c81fc0d17f5834a0a87bf84da58d61583617f3->enter($__internal_933d3f8263c6d555176f554df8c81fc0d17f5834a0a87bf84da58d61583617f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 37
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["_menu_items"]) ? $context["_menu_items"] : $this->getContext($context, "_menu_items")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            echo "            ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 55
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    ";
        
        $__internal_933d3f8263c6d555176f554df8c81fc0d17f5834a0a87bf84da58d61583617f3->leave($__internal_933d3f8263c6d555176f554df8c81fc0d17f5834a0a87bf84da58d61583617f3_prof);

        
        $__internal_a520be64acc597821e0c2a1d7281f4545f6e330b33396e956924e98a22df02f7->leave($__internal_a520be64acc597821e0c2a1d7281f4545f6e330b33396e956924e98a22df02f7_prof);

    }

    // line 38
    public function block_menu_item($context, array $blocks = array())
    {
        $__internal_0d39381927af0817094fed6d6de91b355648ea3eb9c4b8a8a9775c8ce74c699a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d39381927af0817094fed6d6de91b355648ea3eb9c4b8a8a9775c8ce74c699a->enter($__internal_0d39381927af0817094fed6d6de91b355648ea3eb9c4b8a8a9775c8ce74c699a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_item"));

        $__internal_46f820ec259d7fb8b96c19ac50d901906a911a8a7c5c58f179d96a6ed245f9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f820ec259d7fb8b96c19ac50d901906a911a8a7c5c58f179d96a6ed245f9d3->enter($__internal_46f820ec259d7fb8b96c19ac50d901906a911a8a7c5c58f179d96a6ed245f9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_item"));

        // line 39
        echo "                <li class=\"";
        echo ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "divider")) ? ("header") : (""));
        echo " ";
        echo (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "children", array()))) ? ("treeview") : (""));
        echo " ";
        echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0", array()))) ? ("active") : (""));
        echo " ";
        echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
        echo "\">
                    ";
        // line 40
        echo $context["helper"]->getrender_menu_item((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), (($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", array()), "messages")) : ("messages")));
        echo "

                    ";
        // line 42
        if ( !twig_test_empty((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array()), array())) : (array())))) {
            // line 43
            echo "                        <ul class=\"treeview-menu\">
                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                // line 45
                echo "                                ";
                $this->displayBlock('menu_subitem', $context, $blocks);
                // line 50
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                        </ul>
                    ";
        }
        // line 53
        echo "                </li>
            ";
        
        $__internal_46f820ec259d7fb8b96c19ac50d901906a911a8a7c5c58f179d96a6ed245f9d3->leave($__internal_46f820ec259d7fb8b96c19ac50d901906a911a8a7c5c58f179d96a6ed245f9d3_prof);

        
        $__internal_0d39381927af0817094fed6d6de91b355648ea3eb9c4b8a8a9775c8ce74c699a->leave($__internal_0d39381927af0817094fed6d6de91b355648ea3eb9c4b8a8a9775c8ce74c699a_prof);

    }

    // line 45
    public function block_menu_subitem($context, array $blocks = array())
    {
        $__internal_c9fdebffaf167e93d54cc47747e176a8a5f2db5c3650fa07cf0d669ab1a29eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9fdebffaf167e93d54cc47747e176a8a5f2db5c3650fa07cf0d669ab1a29eb8->enter($__internal_c9fdebffaf167e93d54cc47747e176a8a5f2db5c3650fa07cf0d669ab1a29eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_subitem"));

        $__internal_71cadd21cef58225e1a552d903e405f938f0329ff0d85782f4f96a6f56eeac48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71cadd21cef58225e1a552d903e405f938f0329ff0d85782f4f96a6f56eeac48->enter($__internal_71cadd21cef58225e1a552d903e405f938f0329ff0d85782f4f96a6f56eeac48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_subitem"));

        // line 46
        echo "                                    <li class=\"";
        echo ((($this->getAttribute((isset($context["subitem"]) ? $context["subitem"] : $this->getContext($context, "subitem")), "type", array()) == "divider")) ? ("header") : (""));
        echo " ";
        echo (((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "parent", array()), "loop", array()), "index0", array())) && ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0", array())))) ? ("active") : (""));
        echo "\">
                                        ";
        // line 47
        echo $context["helper"]->getrender_menu_item((isset($context["subitem"]) ? $context["subitem"] : $this->getContext($context, "subitem")), (($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", array()), "messages")) : ("messages")));
        echo "
                                    </li>
                                ";
        
        $__internal_71cadd21cef58225e1a552d903e405f938f0329ff0d85782f4f96a6f56eeac48->leave($__internal_71cadd21cef58225e1a552d903e405f938f0329ff0d85782f4f96a6f56eeac48_prof);

        
        $__internal_c9fdebffaf167e93d54cc47747e176a8a5f2db5c3650fa07cf0d669ab1a29eb8->leave($__internal_c9fdebffaf167e93d54cc47747e176a8a5f2db5c3650fa07cf0d669ab1a29eb8_prof);

    }

    // line 59
    public function block_main_menu_after($context, array $blocks = array())
    {
        $__internal_61db08f4628926ea8962689ad45e32ef36644c5322f81589621badae0071b426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61db08f4628926ea8962689ad45e32ef36644c5322f81589621badae0071b426->enter($__internal_61db08f4628926ea8962689ad45e32ef36644c5322f81589621badae0071b426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        $__internal_2966b2620aa4bbb6d954b2ebb97b2a951a3ccd0ad04e075863a19293bbde2531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2966b2620aa4bbb6d954b2ebb97b2a951a3ccd0ad04e075863a19293bbde2531->enter($__internal_2966b2620aa4bbb6d954b2ebb97b2a951a3ccd0ad04e075863a19293bbde2531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_2966b2620aa4bbb6d954b2ebb97b2a951a3ccd0ad04e075863a19293bbde2531->leave($__internal_2966b2620aa4bbb6d954b2ebb97b2a951a3ccd0ad04e075863a19293bbde2531_prof);

        
        $__internal_61db08f4628926ea8962689ad45e32ef36644c5322f81589621badae0071b426->leave($__internal_61db08f4628926ea8962689ad45e32ef36644c5322f81589621badae0071b426_prof);

    }

    // line 1
    public function getrender_menu_item($__item__ = null, $__translation_domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "translation_domain" => $__translation_domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_830b7098536578156082fa8aeaa71d00dcaae1eea49bc48de099c38619d215c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_830b7098536578156082fa8aeaa71d00dcaae1eea49bc48de099c38619d215c4->enter($__internal_830b7098536578156082fa8aeaa71d00dcaae1eea49bc48de099c38619d215c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            $__internal_83a4c1b8245c868e70029f4a3eec9057a7fd19fa59b982dc58835d5b42047bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_83a4c1b8245c868e70029f4a3eec9057a7fd19fa59b982dc58835d5b42047bd6->enter($__internal_83a4c1b8245c868e70029f4a3eec9057a7fd19fa59b982dc58835d5b42047bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 2
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = array("menuIndex" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "menu_index", array()), "submenuIndex" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "submenu_index", array()));
                // line 6
                echo "        ";
                $context["path"] = ((($this->getAttribute(                // line 7
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "link")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "url", array())) : (((($this->getAttribute(                // line 8
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "route")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array()))) : (((($this->getAttribute(                // line 9
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "entity")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_array_merge(array("entity" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "entity", array()), "action" => "list"), (isset($context["menu_params"]) ? $context["menu_params"] : $this->getContext($context, "menu_params"))), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array())))) : (((($this->getAttribute(                // line 10
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "route") && (is_string($__internal_999e32458e4e4a4ff6dd458892e83bd0fb18569e9d542bb796fa4e21ab3f2570 = (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path"))) && is_string($__internal_f4c83f2742e7ada458a7d180fcfb5428d984abab915225c36617d44ca653cbf3 = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin")) && ('' === $__internal_f4c83f2742e7ada458a7d180fcfb5428d984abab915225c36617d44ca653cbf3 || 0 === strpos($__internal_999e32458e4e4a4ff6dd458892e83bd0fb18569e9d542bb796fa4e21ab3f2570, $__internal_f4c83f2742e7ada458a7d180fcfb5428d984abab915225c36617d44ca653cbf3))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()), twig_array_merge((isset($context["menu_params"]) ? $context["menu_params"] : $this->getContext($context, "menu_params")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array())));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
                echo "\" ";
                if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array()), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "target", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 22
                if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 23
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span>
            ";
                // line 24
                if ( !twig_test_empty((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array()), array())) : (array())))) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 25
                echo "        </a>
    ";
            }
            
            $__internal_83a4c1b8245c868e70029f4a3eec9057a7fd19fa59b982dc58835d5b42047bd6->leave($__internal_83a4c1b8245c868e70029f4a3eec9057a7fd19fa59b982dc58835d5b42047bd6_prof);

            
            $__internal_830b7098536578156082fa8aeaa71d00dcaae1eea49bc48de099c38619d215c4->leave($__internal_830b7098536578156082fa8aeaa71d00dcaae1eea49bc48de099c38619d215c4_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 25,  335 => 24,  330 => 23,  324 => 22,  314 => 21,  311 => 20,  308 => 19,  305 => 18,  302 => 17,  299 => 12,  297 => 10,  296 => 9,  295 => 8,  294 => 7,  292 => 6,  289 => 5,  283 => 3,  280 => 2,  261 => 1,  244 => 59,  231 => 47,  224 => 46,  215 => 45,  204 => 53,  200 => 51,  186 => 50,  183 => 45,  166 => 44,  163 => 43,  161 => 42,  156 => 40,  145 => 39,  136 => 38,  126 => 56,  112 => 55,  109 => 38,  91 => 37,  82 => 36,  65 => 31,  55 => 59,  51 => 57,  49 => 36,  46 => 35,  44 => 34,  40 => 32,  38 => 31,  35 => 30,  33 => 29,  30 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_menu_item(item, translation_domain) %}
    {% if item.type == 'divider' %}
        {{ item.label|trans(domain = translation_domain) }}
    {% else %}
        {% set menu_params = { menuIndex: item.menu_index, submenuIndex: item.submenu_index } %}
        {% set path =
            item.type == 'link' ? item.url :
            item.type == 'route' ? path(item.route, item.params) :
            item.type == 'entity' ? path('easyadmin', { entity: item.entity, action: 'list' }|merge(menu_params)|merge(item.params)) :
            item.type == 'empty' ? '#' : ''
        %}

        {# if the URL generated for the route belongs to the backend, regenerate
           the URL to include the menu_params to display the selected menu item
           (this is checked comparing the beginning of the route URL with the backend homepage URL)
        #}
        {% if item.type == 'route' and (path starts with path('easyadmin')) %}
            {% set path = path(item.route, menu_params|merge(item.params)) %}
        {% endif %}

        <a href=\"{{ path }}\" {% if item.target|default(false) %}target=\"{{ item.target }}\"{% endif %}>
            {% if item.icon is not empty %}<i class=\"fa {{ item.icon }}\"></i>{% endif %}
            <span>{{ item.label|trans(domain = translation_domain) }}</span>
            {% if item.children|default([]) is not empty %}<i class=\"fa fa-angle-left pull-right\"></i>{% endif %}
        </a>
    {% endif %}
{% endmacro %}

{% import _self as helper %}

{% block main_menu_before %}{% endblock %}

<ul class=\"sidebar-menu\">
    {% set _menu_items = easyadmin_config('design.menu') %}

    {% block main_menu %}
        {% for item in _menu_items %}
            {% block menu_item %}
                <li class=\"{{ item.type == 'divider' ? 'header' }} {{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}\">
                    {{ helper.render_menu_item(item, _entity_config.translation_domain|default('messages')) }}

                    {% if item.children|default([]) is not empty %}
                        <ul class=\"treeview-menu\">
                            {% for subitem in item.children %}
                                {% block menu_subitem %}
                                    <li class=\"{{ subitem.type == 'divider' ? 'header' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.parent.loop.index0 and app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}\">
                                        {{ helper.render_menu_item(subitem, _entity_config.translation_domain|default('messages')) }}
                                    </li>
                                {% endblock menu_subitem %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                </li>
            {% endblock menu_item %}
        {% endfor %}
    {% endblock main_menu %}
</ul>

{% block main_menu_after %}{% endblock %}
", "EasyAdminBundle:default:menu.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/menu.html.twig");
    }
}
