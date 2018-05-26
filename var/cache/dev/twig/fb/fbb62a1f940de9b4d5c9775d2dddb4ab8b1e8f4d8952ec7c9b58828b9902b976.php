<?php

/* EasyAdminBundle:default:show.html.twig */
class __TwigTemplate_487ec5cfc0148bb91cfd5280153e77a566ff82205ad492adf764deb98aa9e589 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'show_fields' => array($this, 'block_show_fields'),
            'show_field' => array($this, 'block_show_field'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c626db9aa5f49626bd0560ebcce598ef06925f372384099821344e2c3db86b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c626db9aa5f49626bd0560ebcce598ef06925f372384099821344e2c3db86b3->enter($__internal_7c626db9aa5f49626bd0560ebcce598ef06925f372384099821344e2c3db86b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_4ef04fea7b1d8f5bf8da3536e8b381e9c84bf14a5b1b71c54f9a655908a24232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef04fea7b1d8f5bf8da3536e8b381e9c84bf14a5b1b71c54f9a655908a24232->enter($__internal_4ef04fea7b1d8f5bf8da3536e8b381e9c84bf14a5b1b71c54f9a655908a24232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_3bbe143b02bc7ed98a6ace8143e39d2a3453a75510b10bfe859647c6b68a0328"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_3bbe143b02bc7ed98a6ace8143e39d2a3453a75510b10bfe859647c6b68a0328"]) ? $context["__internal_3bbe143b02bc7ed98a6ace8143e39d2a3453a75510b10bfe859647c6b68a0328"] : $this->getContext($context, "__internal_3bbe143b02bc7ed98a6ace8143e39d2a3453a75510b10bfe859647c6b68a0328"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_3bbe143b02bc7ed98a6ace8143e39d2a3453a75510b10bfe859647c6b68a0328"]) ? $context["__internal_3bbe143b02bc7ed98a6ace8143e39d2a3453a75510b10bfe859647c6b68a0328"] : $this->getContext($context, "__internal_3bbe143b02bc7ed98a6ace8143e39d2a3453a75510b10bfe859647c6b68a0328"))), "%entity_id%" =>         // line 5
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c626db9aa5f49626bd0560ebcce598ef06925f372384099821344e2c3db86b3->leave($__internal_7c626db9aa5f49626bd0560ebcce598ef06925f372384099821344e2c3db86b3_prof);

        
        $__internal_4ef04fea7b1d8f5bf8da3536e8b381e9c84bf14a5b1b71c54f9a655908a24232->leave($__internal_4ef04fea7b1d8f5bf8da3536e8b381e9c84bf14a5b1b71c54f9a655908a24232_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2c79728f7112907efc2fde5dca6207b85387ca2ea8a6f4cdc06889e73113ef64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c79728f7112907efc2fde5dca6207b85387ca2ea8a6f4cdc06889e73113ef64->enter($__internal_2c79728f7112907efc2fde5dca6207b85387ca2ea8a6f4cdc06889e73113ef64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_c62c2bed0326b6a1026dfdaa838ef0e50bce7247ca8ce69b00c236050121dd67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62c2bed0326b6a1026dfdaa838ef0e50bce7247ca8ce69b00c236050121dd67->enter($__internal_c62c2bed0326b6a1026dfdaa838ef0e50bce7247ca8ce69b00c236050121dd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_c62c2bed0326b6a1026dfdaa838ef0e50bce7247ca8ce69b00c236050121dd67->leave($__internal_c62c2bed0326b6a1026dfdaa838ef0e50bce7247ca8ce69b00c236050121dd67_prof);

        
        $__internal_2c79728f7112907efc2fde5dca6207b85387ca2ea8a6f4cdc06889e73113ef64->leave($__internal_2c79728f7112907efc2fde5dca6207b85387ca2ea8a6f4cdc06889e73113ef64_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_ce9815903dc83c9c65b362578273b430e3ebfb2a72328e198ac85d3890313bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9815903dc83c9c65b362578273b430e3ebfb2a72328e198ac85d3890313bc7->enter($__internal_ce9815903dc83c9c65b362578273b430e3ebfb2a72328e198ac85d3890313bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_b2e519dbcbda0513a235957b6a78df14f42538a34ffca653fec4d08ee783bbab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e519dbcbda0513a235957b6a78df14f42538a34ffca653fec4d08ee783bbab->enter($__internal_b2e519dbcbda0513a235957b6a78df14f42538a34ffca653fec4d08ee783bbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_b2e519dbcbda0513a235957b6a78df14f42538a34ffca653fec4d08ee783bbab->leave($__internal_b2e519dbcbda0513a235957b6a78df14f42538a34ffca653fec4d08ee783bbab_prof);

        
        $__internal_ce9815903dc83c9c65b362578273b430e3ebfb2a72328e198ac85d3890313bc7->leave($__internal_ce9815903dc83c9c65b362578273b430e3ebfb2a72328e198ac85d3890313bc7_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_bf52b7e9288b1f392ba3c6019ef589608ea34f87bfd34bfd2567a0af66796e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf52b7e9288b1f392ba3c6019ef589608ea34f87bfd34bfd2567a0af66796e66->enter($__internal_bf52b7e9288b1f392ba3c6019ef589608ea34f87bfd34bfd2567a0af66796e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_ef03b40d31aee2c9e6e22d94dbcb27d418ecafaaa58cd2cb686f91ec53a127cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef03b40d31aee2c9e6e22d94dbcb27d418ecafaaa58cd2cb686f91ec53a127cc->enter($__internal_ef03b40d31aee2c9e6e22d94dbcb27d418ecafaaa58cd2cb686f91ec53a127cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "show", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_3bbe143b02bc7ed98a6ace8143e39d2a3453a75510b10bfe859647c6b68a0328"]) ? $context["__internal_3bbe143b02bc7ed98a6ace8143e39d2a3453a75510b10bfe859647c6b68a0328"] : $this->getContext($context, "__internal_3bbe143b02bc7ed98a6ace8143e39d2a3453a75510b10bfe859647c6b68a0328")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ef03b40d31aee2c9e6e22d94dbcb27d418ecafaaa58cd2cb686f91ec53a127cc->leave($__internal_ef03b40d31aee2c9e6e22d94dbcb27d418ecafaaa58cd2cb686f91ec53a127cc_prof);

        
        $__internal_bf52b7e9288b1f392ba3c6019ef589608ea34f87bfd34bfd2567a0af66796e66->leave($__internal_bf52b7e9288b1f392ba3c6019ef589608ea34f87bfd34bfd2567a0af66796e66_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_df69e8cb2e3735a0539eb1cedeaf40017a70659ac0a58612afe6510161a52103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df69e8cb2e3735a0539eb1cedeaf40017a70659ac0a58612afe6510161a52103->enter($__internal_df69e8cb2e3735a0539eb1cedeaf40017a70659ac0a58612afe6510161a52103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b814d3dd525dbb924811940fce93ae4bf8a47f7cfa00df7a9fff38e869c5b01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b814d3dd525dbb924811940fce93ae4bf8a47f7cfa00df7a9fff38e869c5b01d->enter($__internal_b814d3dd525dbb924811940fce93ae4bf8a47f7cfa00df7a9fff38e869c5b01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $this->displayBlock('show_fields', $context, $blocks);
        // line 41
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 44
        $this->displayBlock('item_actions', $context, $blocks);
        // line 56
        echo "            </div>
        </div>
    </div>

    ";
        // line 60
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_b814d3dd525dbb924811940fce93ae4bf8a47f7cfa00df7a9fff38e869c5b01d->leave($__internal_b814d3dd525dbb924811940fce93ae4bf8a47f7cfa00df7a9fff38e869c5b01d_prof);

        
        $__internal_df69e8cb2e3735a0539eb1cedeaf40017a70659ac0a58612afe6510161a52103->leave($__internal_df69e8cb2e3735a0539eb1cedeaf40017a70659ac0a58612afe6510161a52103_prof);

    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        $__internal_52d5eb8ebb86132f37eff2a99b90457875da835b0f3b17a84807f23e58ee1286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d5eb8ebb86132f37eff2a99b90457875da835b0f3b17a84807f23e58ee1286->enter($__internal_52d5eb8ebb86132f37eff2a99b90457875da835b0f3b17a84807f23e58ee1286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        $__internal_aee13f67145b4eada28c4581588a53b25abeb68f38f03e20a86b0552995f442d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee13f67145b4eada28c4581588a53b25abeb68f38f03e20a86b0552995f442d->enter($__internal_aee13f67145b4eada28c4581588a53b25abeb68f38f03e20a86b0552995f442d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        // line 22
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
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
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 23
            echo "                ";
            $this->displayBlock('show_field', $context, $blocks);
            // line 39
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
        
        $__internal_aee13f67145b4eada28c4581588a53b25abeb68f38f03e20a86b0552995f442d->leave($__internal_aee13f67145b4eada28c4581588a53b25abeb68f38f03e20a86b0552995f442d_prof);

        
        $__internal_52d5eb8ebb86132f37eff2a99b90457875da835b0f3b17a84807f23e58ee1286->leave($__internal_52d5eb8ebb86132f37eff2a99b90457875da835b0f3b17a84807f23e58ee1286_prof);

    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_dca50958779ca30265813e17d1ba402a05452bed8de62545bb3200cac50a592a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dca50958779ca30265813e17d1ba402a05452bed8de62545bb3200cac50a592a->enter($__internal_dca50958779ca30265813e17d1ba402a05452bed8de62545bb3200cac50a592a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_f8fdfff11359ea19fb108dbbe87bcaa2c4e1927e3f439e8c4a68d4917cb3b60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fdfff11359ea19fb108dbbe87bcaa2c4e1927e3f439e8c4a68d4917cb3b60f->enter($__internal_f8fdfff11359ea19fb108dbbe87bcaa2c4e1927e3f439e8c4a68d4917cb3b60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 24
        echo "                    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "type", array()), "default")) : ("default"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                        <label class=\"col-sm-2 control-label\">
                            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "label", array())) ? ($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field"))))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_3bbe143b02bc7ed98a6ace8143e39d2a3453a75510b10bfe859647c6b68a0328"]) ? $context["__internal_3bbe143b02bc7ed98a6ace8143e39d2a3453a75510b10bfe859647c6b68a0328"] : $this->getContext($context, "__internal_3bbe143b02bc7ed98a6ace8143e39d2a3453a75510b10bfe859647c6b68a0328")));
        // line 26
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                ";
        // line 30
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), (isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")));
        echo "
                            </div>

                            ";
        // line 33
        if (((($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "help", array()), "")) : ("")) != "")) {
            // line 34
            echo "                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "help", array()), array(),             // line 4
(isset($context["__internal_3bbe143b02bc7ed98a6ace8143e39d2a3453a75510b10bfe859647c6b68a0328"]) ? $context["__internal_3bbe143b02bc7ed98a6ace8143e39d2a3453a75510b10bfe859647c6b68a0328"] : $this->getContext($context, "__internal_3bbe143b02bc7ed98a6ace8143e39d2a3453a75510b10bfe859647c6b68a0328")));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
        
        $__internal_f8fdfff11359ea19fb108dbbe87bcaa2c4e1927e3f439e8c4a68d4917cb3b60f->leave($__internal_f8fdfff11359ea19fb108dbbe87bcaa2c4e1927e3f439e8c4a68d4917cb3b60f_prof);

        
        $__internal_dca50958779ca30265813e17d1ba402a05452bed8de62545bb3200cac50a592a->leave($__internal_dca50958779ca30265813e17d1ba402a05452bed8de62545bb3200cac50a592a_prof);

    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_408b85c914381f73be3e8fbf738cdcb0b3b32e5d5d69782f347f0cde5952b58c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408b85c914381f73be3e8fbf738cdcb0b3b32e5d5d69782f347f0cde5952b58c->enter($__internal_408b85c914381f73be3e8fbf738cdcb0b3b32e5d5d69782f347f0cde5952b58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_cad2f371775a9d1e8b53678493e06d6cf61e8aada04342075b82a93fca40021e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad2f371775a9d1e8b53678493e06d6cf61e8aada04342075b82a93fca40021e->enter($__internal_cad2f371775a9d1e8b53678493e06d6cf61e8aada04342075b82a93fca40021e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 45
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 46
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 47
        echo "
                ";
        // line 48
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 49
(isset($context["_show_actions"]) ? $context["_show_actions"] : $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 50
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 51
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 52
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 53
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 54
        echo "
            ";
        
        $__internal_cad2f371775a9d1e8b53678493e06d6cf61e8aada04342075b82a93fca40021e->leave($__internal_cad2f371775a9d1e8b53678493e06d6cf61e8aada04342075b82a93fca40021e_prof);

        
        $__internal_408b85c914381f73be3e8fbf738cdcb0b3b32e5d5d69782f347f0cde5952b58c->leave($__internal_408b85c914381f73be3e8fbf738cdcb0b3b32e5d5d69782f347f0cde5952b58c_prof);

    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_c48124cf0e89c5459eec369ea080101875affec249932a546e33a5ee8ede028e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48124cf0e89c5459eec369ea080101875affec249932a546e33a5ee8ede028e->enter($__internal_c48124cf0e89c5459eec369ea080101875affec249932a546e33a5ee8ede028e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_0d880e0dbb859db70b2251a927d9a5430618b0148caac2b666b812eb417fd58b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d880e0dbb859db70b2251a927d9a5430618b0148caac2b666b812eb417fd58b->enter($__internal_0d880e0dbb859db70b2251a927d9a5430618b0148caac2b666b812eb417fd58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 61
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 63
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 64
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 65
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 66
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 67
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 68
        echo "
    ";
        
        $__internal_0d880e0dbb859db70b2251a927d9a5430618b0148caac2b666b812eb417fd58b->leave($__internal_0d880e0dbb859db70b2251a927d9a5430618b0148caac2b666b812eb417fd58b_prof);

        
        $__internal_c48124cf0e89c5459eec369ea080101875affec249932a546e33a5ee8ede028e->leave($__internal_c48124cf0e89c5459eec369ea080101875affec249932a546e33a5ee8ede028e_prof);

    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_0988c7e64c97cdef0cffdff08aef3e5825acd27c3d01185cf6f3cb1b59c2a53c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0988c7e64c97cdef0cffdff08aef3e5825acd27c3d01185cf6f3cb1b59c2a53c->enter($__internal_0988c7e64c97cdef0cffdff08aef3e5825acd27c3d01185cf6f3cb1b59c2a53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_7dcaf2accfc817985ad35d07ce5652112403dfef4d5273c5cdf78bcf5713b86b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcaf2accfc817985ad35d07ce5652112403dfef4d5273c5cdf78bcf5713b86b->enter($__internal_7dcaf2accfc817985ad35d07ce5652112403dfef4d5273c5cdf78bcf5713b86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 73
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_7dcaf2accfc817985ad35d07ce5652112403dfef4d5273c5cdf78bcf5713b86b->leave($__internal_7dcaf2accfc817985ad35d07ce5652112403dfef4d5273c5cdf78bcf5713b86b_prof);

        
        $__internal_0988c7e64c97cdef0cffdff08aef3e5825acd27c3d01185cf6f3cb1b59c2a53c->leave($__internal_0988c7e64c97cdef0cffdff08aef3e5825acd27c3d01185cf6f3cb1b59c2a53c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 73,  335 => 72,  324 => 68,  322 => 67,  321 => 66,  320 => 65,  319 => 64,  318 => 63,  316 => 61,  307 => 60,  296 => 54,  294 => 53,  293 => 52,  292 => 51,  291 => 50,  290 => 49,  289 => 48,  286 => 47,  283 => 46,  280 => 45,  271 => 44,  259 => 36,  255 => 34,  253 => 4,  251 => 34,  249 => 33,  243 => 30,  237 => 26,  235 => 4,  234 => 26,  226 => 24,  217 => 23,  207 => 40,  193 => 39,  190 => 23,  172 => 22,  163 => 21,  153 => 60,  147 => 56,  145 => 44,  140 => 41,  138 => 21,  135 => 20,  126 => 19,  113 => 15,  112 => 4,  110 => 15,  107 => 14,  105 => 13,  96 => 12,  78 => 10,  60 => 9,  50 => 7,  48 => 5,  47 => 4,  46 => 5,  45 => 4,  44 => 5,  42 => 4,  40 => 3,  38 => 1,  26 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% block show_fields %}
            {% for field, metadata in fields %}
                {% block show_field %}
                    <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                        <label class=\"col-sm-2 control-label\">
                            {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                            </div>

                            {% if metadata.help|default('') != '' %}
                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                            {% endif %}
                        </div>
                    </div>
                {% endblock %}
            {% endfor %}
        {% endblock %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
{% endblock %}
", "EasyAdminBundle:default:show.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/show.html.twig");
    }
}
