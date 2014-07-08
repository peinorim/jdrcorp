<?php

/* JdrCorpElricBundle:Elric:myCompJet.html.twig */
class __TwigTemplate_db07dc177e3cfc33ef8f40b947bfa7d0eae172be98c80926d66cf2e01dc0036e extends Twig_Template
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
        echo "<table id=\"myArmure\">
    <thead>
        <tr>
            <th>Armure</th>
            <th>Abs</th>
            <th>Abs sans heaume</th>
            <th>Encombrement</th>
        </tr>
    </thead>
    <tbody>

    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myArmures"]) ? $context["myArmures"] : $this->getContext($context, "myArmures")));
        foreach ($context['_seq'] as $context["_key"] => $context["armure"]) {
            // line 13
            echo "        <tr>
            <td class=\"col-md-4\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["armure"]) ? $context["armure"] : $this->getContext($context, "armure")), "getNom"), "html", null, true);
            echo "</td>
            <td class=\"col-md-2\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["armure"]) ? $context["armure"] : $this->getContext($context, "armure")), "getAbs"), "html", null, true);
            echo "</td>
            <td class=\"col-md-2\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["armure"]) ? $context["armure"] : $this->getContext($context, "armure")), "getAbsSans"), "html", null, true);
            echo "</td>
            <td class=\"col-md-2\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["armure"]) ? $context["armure"] : $this->getContext($context, "armure")), "getEnc"), "html", null, true);
            echo "</td>
        </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['armure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </tbody>
</table>

<table id=\"myCompJet\">
    <thead>
        <tr>
            <th>Arme</th>
            <th>Pourcentage</th>
            <th>Dégâts</th>
            <th>Structure</th>
        </tr>
    </thead>
    <tbody>

    ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myArmes"]) ? $context["myArmes"] : $this->getContext($context, "myArmes")));
        foreach ($context['_seq'] as $context["_key"] => $context["arme"]) {
            // line 35
            echo "     ";
            if (($this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getType") == "J")) {
                // line 36
                echo "        <tr>
            <td class=\"col-md-4\">";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getNom"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getBase"), "html", null, true);
                echo "%)</td>
            <td class=\"col-md-2\">";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getTotal"), "html", null, true);
                echo "%</td>
            <td class=\"col-md-2\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getDegats"), "html", null, true);
                echo "</td>
            <td class=\"col-md-2\">";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getStructure"), "html", null, true);
                echo "</td>
        </tr>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
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
        return array (  100 => 40,  96 => 39,  83 => 36,  80 => 35,  76 => 34,  60 => 20,  51 => 17,  43 => 15,  92 => 38,  89 => 30,  81 => 28,  63 => 22,  52 => 18,  42 => 15,  36 => 13,  32 => 12,  46 => 15,  34 => 11,  30 => 10,  61 => 11,  55 => 19,  47 => 16,  29 => 4,  26 => 3,  164 => 64,  154 => 57,  144 => 50,  132 => 40,  129 => 39,  126 => 38,  123 => 37,  120 => 39,  118 => 35,  114 => 34,  110 => 44,  106 => 34,  102 => 33,  98 => 32,  94 => 29,  90 => 28,  86 => 37,  82 => 26,  78 => 25,  74 => 26,  70 => 23,  66 => 23,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  45 => 17,  39 => 14,  37 => 12,  22 => 2,  19 => 1,);
    }
}
