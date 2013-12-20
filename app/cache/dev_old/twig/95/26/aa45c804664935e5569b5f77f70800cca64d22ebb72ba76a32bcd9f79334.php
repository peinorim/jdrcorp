<?php

/* JdrCorpElricBundle:Elric:myCompJet.html.twig */
class __TwigTemplate_9526aa45c804664935e5569b5f77f70800cca64d22ebb72ba76a32bcd9f79334 extends Twig_Template
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
        echo "<table id=\"myCompJet\">
    <thead>
        <tr>
            <th>Arme</th>
            <th>Pourcentage</th>
            <th>Dégâts</th>
            <th>Pts Structure</th>
        </tr>
    </thead>
    <tbody>

    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "myArmes"));
        foreach ($context['_seq'] as $context["_key"] => $context["arme"]) {
            // line 13
            echo "     ";
            if (($this->getAttribute($this->getContext($context, "arme"), "getType") == "J")) {
                // line 14
                echo "        <tr>
            <td class=\"col-md-4\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getNom"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getBase"), "html", null, true);
                echo "%)</td>
            <td class=\"col-md-2\">";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getTotal"), "html", null, true);
                echo "%</td>
            <td class=\"col-md-2\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getDegats"), "html", null, true);
                echo "</td>
            <td class=\"col-md-2\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getStructure"), "html", null, true);
                echo "</td>
            <td class=\"col-md-2\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getMains"), "html", null, true);
                echo "%</td>
        </tr>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:myCompJet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  60 => 19,  56 => 18,  48 => 16,  110 => 35,  106 => 34,  102 => 33,  98 => 32,  89 => 30,  86 => 29,  81 => 28,  74 => 26,  66 => 23,  63 => 22,  52 => 17,  42 => 15,  36 => 13,  32 => 12,  46 => 15,  37 => 12,  34 => 11,  61 => 11,  55 => 19,  47 => 8,  39 => 14,  29 => 4,  22 => 2,  143 => 39,  140 => 38,  137 => 37,  134 => 36,  132 => 35,  128 => 34,  124 => 33,  120 => 39,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  92 => 31,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  59 => 17,  53 => 15,  51 => 14,  44 => 9,  30 => 10,  26 => 3,  19 => 1,);
    }
}
