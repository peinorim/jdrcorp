<?php

/* JdrCorpElricBundle:Elric:tableComp.html.twig */
class __TwigTemplate_f1f0affbd2799f5bbd8cc638bbb4ef4de6ae8827e1dc5dc6f2efb0f1cfafeaaa extends Twig_Template
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
        echo "<table class=\"table table-hover\">
    <thead>
    <th>Compétences</th>
    <th>%age de base</th>
    <th>%age rajouté</th>
    <th style='text-align: center;'>%age total</th>
</thead>
<tbody>
  ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeComp"]) ? $context["listeComp"] : $this->getContext($context, "listeComp")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 10
            echo "    <tr>
        ";
            // line 11
            if (twig_in_filter((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), (isset($context["listeCompMetier"]) ? $context["listeCompMetier"] : $this->getContext($context, "listeCompMetier")))) {
                // line 12
                echo "        <td class=\"col-md-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo "</td><td class=\"col-md-2\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
                echo "%</td><td><input type=\"text\" class=\"comp\" name=\"comp[";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getId"), "html", null, true);
                echo "]\" value=\"\"/>%</td><td style='text-align: center;'></td>
        ";
            } else {
                // line 14
                echo "        <td class=\"col-md-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo "</td><td class=\"col-md-2\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
                echo "%</td><td></td>
        ";
            }
            // line 16
            echo "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:tableComp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  34 => 11,  81 => 32,  195 => 58,  160 => 28,  146 => 26,  104 => 19,  127 => 23,  124 => 32,  118 => 30,  114 => 29,  110 => 28,  90 => 23,  70 => 23,  58 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 26,  71 => 30,  67 => 15,  63 => 18,  59 => 20,  38 => 12,  94 => 24,  89 => 20,  85 => 25,  75 => 31,  68 => 13,  56 => 16,  87 => 16,  21 => 2,  26 => 6,  93 => 35,  88 => 6,  78 => 32,  46 => 15,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 32,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 16,  49 => 15,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 21,  69 => 25,  47 => 9,  40 => 8,  37 => 12,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 20,  101 => 18,  98 => 25,  96 => 31,  83 => 25,  74 => 19,  66 => 17,  55 => 15,  52 => 18,  50 => 13,  43 => 8,  41 => 7,  35 => 5,  32 => 12,  29 => 9,  209 => 82,  203 => 60,  199 => 59,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 25,  133 => 55,  130 => 34,  125 => 44,  122 => 22,  116 => 41,  112 => 42,  109 => 34,  106 => 27,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 22,  82 => 15,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 17,  54 => 15,  51 => 14,  48 => 14,  45 => 17,  42 => 7,  39 => 13,  36 => 11,  33 => 10,  30 => 10,);
    }
}
