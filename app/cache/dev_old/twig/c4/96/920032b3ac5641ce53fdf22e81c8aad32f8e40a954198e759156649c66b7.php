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
        return array (  61 => 11,  55 => 10,  47 => 8,  39 => 6,  29 => 4,  22 => 2,  143 => 39,  140 => 38,  137 => 37,  134 => 36,  132 => 35,  128 => 34,  124 => 33,  120 => 32,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  59 => 17,  53 => 15,  51 => 14,  44 => 9,  30 => 7,  26 => 3,  19 => 1,);
    }
}
