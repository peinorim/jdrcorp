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
        return array (  46 => 15,  37 => 12,  34 => 11,  30 => 10,  61 => 11,  55 => 10,  47 => 8,  29 => 4,  26 => 3,  22 => 2,  152 => 57,  143 => 51,  135 => 46,  123 => 36,  120 => 35,  117 => 34,  114 => 33,  112 => 32,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  39 => 6,  33 => 12,  31 => 11,  19 => 1,);
    }
}
