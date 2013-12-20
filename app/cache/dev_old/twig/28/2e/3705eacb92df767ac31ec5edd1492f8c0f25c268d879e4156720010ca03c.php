<?php

/* JdrCorpElricBundle:Elric:myCompContact.html.twig */
class __TwigTemplate_282e3705eacb92df767ac31ec5edd1492f8c0f25c268d879e4156720010ca03c extends Twig_Template
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
        echo "<table id=\"myCompContact\">
    <thead>
        <tr>
            <th>Arme</th>
            <th>Pourcentage</th>
            <th>Dégâts</th>
            <th>Pts Structure</th>
            <th>Mains</th>
        </tr>
    </thead>
    <tbody>
  ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeComp"));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 13
            echo "        ";
            if (((twig_in_filter($this->getContext($context, "comp"), $this->getContext($context, "myComp")) && ($this->getAttribute($this->getContext($context, "comp"), "getTotal") != "")) && ($this->getAttribute($this->getContext($context, "comp"), "getType") == "C"))) {
                // line 14
                echo "        <tr>
            <td class=\"col-md-4\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getNom"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getBase"), "html", null, true);
                echo "%)</td><td class=\"col-md-2\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getTotal"), "html", null, true);
                echo "%</td>
        </tr>
        ";
            } elseif (((twig_in_filter($this->getContext($context, "comp"), $this->getContext($context, "myComp")) && ($this->getAttribute($this->getContext($context, "comp"), "getTotal") == "")) && ($this->getAttribute($this->getContext($context, "comp"), "getType") == "C"))) {
                // line 18
                echo "        <tr>
            <td class=\"col-md-4\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getNom"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getBase"), "html", null, true);
                echo "%)</td><td class=\"col-md-2\">___%</td>
        </tr>
        ";
            } elseif ((($this->getAttribute($this->getContext($context, "comp"), "getNom") == "Bagarre") || ($this->getAttribute($this->getContext($context, "comp"), "getNom") == "Lancer"))) {
                // line 22
                echo "        <tr>
            <td class=\"col-md-4\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getNom"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "getBase"), "html", null, true);
                echo "%)</td>
        </tr>
        ";
            }
            // line 26
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "myArmes"));
        foreach ($context['_seq'] as $context["_key"] => $context["arme"]) {
            // line 29
            echo "     ";
            if (($this->getAttribute($this->getContext($context, "arme"), "getType") == "C")) {
                // line 30
                echo "        <tr>
            <td class=\"col-md-4\">";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getNom"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getBase"), "html", null, true);
                echo "%)</td>
            <td class=\"col-md-2\">";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getTotal"), "html", null, true);
                echo "%</td>
            <td class=\"col-md-2\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getDegats"), "html", null, true);
                echo "</td>
            <td class=\"col-md-2\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getStructure"), "html", null, true);
                echo "</td>
            <td class=\"col-md-2\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "arme"), "getMains"), "html", null, true);
                echo "%</td>
        </tr>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:myCompContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 35,  106 => 34,  102 => 33,  98 => 32,  89 => 30,  86 => 29,  81 => 28,  74 => 26,  66 => 23,  63 => 22,  52 => 18,  42 => 15,  36 => 13,  32 => 12,  46 => 15,  37 => 12,  34 => 11,  61 => 11,  55 => 19,  47 => 8,  39 => 14,  29 => 4,  22 => 2,  143 => 39,  140 => 38,  137 => 37,  134 => 36,  132 => 35,  128 => 34,  124 => 33,  120 => 39,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  92 => 31,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  59 => 17,  53 => 15,  51 => 14,  44 => 9,  30 => 10,  26 => 3,  19 => 1,);
    }
}
