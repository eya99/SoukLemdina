<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f6b0caef4a799c4886c71bb46c30f6309d1c43d175bb56a4b713f82eb9045369 extends Twig_Template
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
        $__internal_77a7b962052da416d9380bcdd32ce3c9adcc474eb6927f79acb29a68cc59393f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a7b962052da416d9380bcdd32ce3c9adcc474eb6927f79acb29a68cc59393f->enter($__internal_77a7b962052da416d9380bcdd32ce3c9adcc474eb6927f79acb29a68cc59393f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9108f92e2656c08e672a2df39bceea6dfc7b001d895fcb75530351d640dbe64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9108f92e2656c08e672a2df39bceea6dfc7b001d895fcb75530351d640dbe64c->enter($__internal_9108f92e2656c08e672a2df39bceea6dfc7b001d895fcb75530351d640dbe64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_77a7b962052da416d9380bcdd32ce3c9adcc474eb6927f79acb29a68cc59393f->leave($__internal_77a7b962052da416d9380bcdd32ce3c9adcc474eb6927f79acb29a68cc59393f_prof);

        
        $__internal_9108f92e2656c08e672a2df39bceea6dfc7b001d895fcb75530351d640dbe64c->leave($__internal_9108f92e2656c08e672a2df39bceea6dfc7b001d895fcb75530351d640dbe64c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
