<?php

/* JdrCorpElricBundle:Elric:myCompContact.html.twig */
class __TwigTemplate_17b388ea3c4f9be932983c98ba6c79c9ff7327b3bb4d284256534d600ef7e286 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["listeComp"]) ? $context["listeComp"] : $this->getContext($context, "listeComp")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 13
            echo "        ";
            if (((twig_in_filter((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), (isset($context["myComp"]) ? $context["myComp"] : $this->getContext($context, "myComp"))) && ($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getTotal") != "")) && ($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getType") == "C"))) {
                // line 14
                echo "        <tr>
            <td class=\"col-md-4\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
                echo "%)</td><td class=\"col-md-2\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getTotal"), "html", null, true);
                echo "%</td>
        </tr>
        ";
            } elseif (((twig_in_filter((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), (isset($context["myComp"]) ? $context["myComp"] : $this->getContext($context, "myComp"))) && ($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getTotal") == "")) && ($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getType") == "C"))) {
                // line 18
                echo "        <tr>
            <td class=\"col-md-4\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
                echo "%)</td><td class=\"col-md-2\">___%</td>
        </tr>
        ";
            } elseif ((($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom") == "Bagarre") || ($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom") == "Lancer"))) {
                // line 22
                echo "        <tr>
            <td class=\"col-md-4\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["myArmes"]) ? $context["myArmes"] : $this->getContext($context, "myArmes")));
        foreach ($context['_seq'] as $context["_key"] => $context["arme"]) {
            // line 29
            echo "     ";
            if (($this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getType") == "C")) {
                // line 30
                echo "        <tr>
            <td class=\"col-md-4\">";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getNom"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getBase"), "html", null, true);
                echo "%)</td>
            <td class=\"col-md-2\">";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getTotal"), "html", null, true);
                echo "%</td>
            <td class=\"col-md-2\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getDegats"), "html", null, true);
                echo "</td>
            <td class=\"col-md-2\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getStructure"), "html", null, true);
                echo "</td>
            <td class=\"col-md-2\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getMains"), "html", null, true);
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
        return array (  81 => 28,  53 => 19,  339 => 99,  336 => 98,  331 => 100,  328 => 98,  320 => 96,  318 => 95,  297 => 82,  293 => 80,  276 => 68,  271 => 66,  265 => 63,  261 => 62,  257 => 61,  253 => 60,  249 => 59,  245 => 58,  237 => 56,  233 => 55,  226 => 50,  218 => 47,  190 => 29,  184 => 4,  152 => 26,  76 => 34,  129 => 39,  126 => 38,  118 => 35,  114 => 20,  110 => 35,  90 => 28,  70 => 23,  58 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 93,  312 => 98,  309 => 97,  305 => 87,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 69,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 57,  229 => 73,  220 => 48,  214 => 46,  177 => 65,  169 => 29,  140 => 55,  132 => 40,  128 => 22,  107 => 18,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 39,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 33,  71 => 24,  67 => 15,  63 => 22,  59 => 14,  38 => 6,  94 => 29,  89 => 30,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 3,  93 => 16,  88 => 15,  78 => 25,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 102,  166 => 28,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 21,  49 => 19,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 33,  69 => 12,  47 => 8,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 37,  120 => 39,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 32,  96 => 31,  83 => 25,  74 => 26,  66 => 23,  55 => 19,  52 => 18,  50 => 9,  43 => 7,  41 => 7,  35 => 5,  32 => 12,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 30,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 64,  162 => 57,  154 => 57,  149 => 51,  147 => 25,  144 => 50,  141 => 48,  133 => 23,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 34,  103 => 32,  99 => 31,  95 => 28,  92 => 31,  86 => 29,  82 => 33,  80 => 35,  73 => 19,  64 => 17,  60 => 21,  57 => 20,  54 => 19,  51 => 14,  48 => 13,  45 => 17,  42 => 15,  39 => 14,  36 => 13,  33 => 4,  30 => 7,);
    }
}
