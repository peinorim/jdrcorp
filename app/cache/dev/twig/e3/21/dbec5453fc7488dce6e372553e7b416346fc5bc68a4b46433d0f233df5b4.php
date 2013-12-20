<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e321dbec5453fc7488dce6e372553e7b416346fc5bc68a4b46433d0f233df5b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  54 => 11,  43 => 8,  40 => 7,  70 => 23,  110 => 35,  106 => 34,  102 => 33,  98 => 32,  89 => 30,  86 => 29,  81 => 28,  74 => 26,  66 => 23,  63 => 22,  42 => 15,  36 => 13,  32 => 12,  46 => 15,  37 => 12,  34 => 11,  30 => 3,  61 => 11,  55 => 19,  47 => 8,  29 => 4,  26 => 3,  22 => 2,  152 => 57,  143 => 51,  135 => 46,  123 => 36,  120 => 39,  117 => 34,  114 => 33,  112 => 32,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  92 => 31,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  39 => 14,  33 => 4,  31 => 11,  19 => 1,);
    }
}
