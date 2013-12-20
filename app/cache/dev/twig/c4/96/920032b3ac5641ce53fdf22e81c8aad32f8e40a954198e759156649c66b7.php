<?php

/* JdrCorpElricBundle:Elric:myComp.html.twig */
class __TwigTemplate_c496920032b3ac5641ce53fdf22e81c8aad32f8e40a954198e759156649c66b7 extends Twig_Template
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
        // line 1
        echo "<ul id=\"myComp\">
  ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeComp"));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 3
            echo "        ";
            if (((twig_in_filter($this->getContext($context, "comp"), $this->getContext($context, "myComp")) && ($this->getAttribute($this->getContext($context, "comp"), "getTotal") != "")) && ($this->getAttribute($this->getContext($context, "comp"), "getType") == "N"))) {
                // line 4
                echo "    <li><input type=\"checkbox\" checked=\"checked\"/>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getNom"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getBase"), "html", null, true);
                echo "%)";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getTotal"), "html", null, true);
                echo "%</li>
        ";
            } elseif (((twig_in_filter($this->getContext($context, "comp"), $this->getContext($context, "myComp")) && ($this->getAttribute($this->getContext($context, "comp"), "getTotal") == "")) && ($this->getAttribute($this->getContext($context, "comp"), "getType") == "N"))) {
                // line 6
                echo "    <li><input type=\"checkbox\" checked=\"checked\"/>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getNom"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getBase"), "html", null, true);
                echo "%)___%</li>
        ";
            } elseif (($this->getAttribute($this->getContext($context, "comp"), "getType") == "N")) {
                // line 8
                echo "    <li><input type=\"checkbox\" disabled/>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getNom"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getBase"), "html", null, true);
                echo "%)___</li>
        ";
            }
            // line 10
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:myComp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  55 => 10,  47 => 8,  29 => 4,  26 => 3,  22 => 2,  152 => 57,  143 => 51,  135 => 46,  123 => 36,  120 => 35,  117 => 34,  114 => 33,  112 => 32,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  39 => 6,  33 => 12,  31 => 11,  19 => 1,);
    }
}
