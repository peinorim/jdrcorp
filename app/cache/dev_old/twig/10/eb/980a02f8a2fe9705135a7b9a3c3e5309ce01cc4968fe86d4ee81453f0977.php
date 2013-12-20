<?php

/* JdrCorpElricBundle:Elric:mySorts.html.twig */
class __TwigTemplate_10eb980a02f8a2fe9705135a7b9a3c3e5309ce01cc4968fe86d4ee81453f0977 extends Twig_Template
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
        echo "<table id=\"mySorts\">
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
  ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "mySorts"));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 11
            echo "        <tr>
            <td class=\"col-md-2\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sort"), "getSortNom"), "html", null, true);
            echo "</td>
        </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:mySorts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  37 => 12,  34 => 11,  61 => 11,  55 => 10,  47 => 8,  39 => 6,  29 => 4,  22 => 2,  143 => 39,  140 => 38,  137 => 37,  134 => 36,  132 => 35,  128 => 34,  124 => 33,  120 => 32,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  59 => 17,  53 => 15,  51 => 14,  44 => 9,  30 => 10,  26 => 3,  19 => 1,);
    }
}
