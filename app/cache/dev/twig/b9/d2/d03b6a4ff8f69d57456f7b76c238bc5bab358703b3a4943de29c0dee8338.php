<?php

/* JdrCorpElricBundle:Elric:metier.html.twig */
class __TwigTemplate_b9d2d03b6a4ff8f69d57456f7b76c238bc5bab358703b3a4943de29c0dee8338 extends Twig_Template
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
        echo "<h2 class=\"StepTitle\">Métiers & Compétences</h2>
<div class=\"col-md-4\" style=\"margin-top:10px;\">
    <select id=\"metiers\" name=\"metier\" class=\"form-control\">
        <option value=\"0\">Choisissez un métier</option>
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeMet"]) ? $context["listeMet"] : $this->getContext($context, "listeMet")));
        foreach ($context['_seq'] as $context["_key"] => $context["met"]) {
            // line 6
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["met"]) ? $context["met"] : $this->getContext($context, "met")), "getId"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["met"]) ? $context["met"] : $this->getContext($context, "met")), "getMetierNom"), "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['met'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </select>
    <div class=\"alert alert-warning\">Vous avez <span id=\"totPts\">250</span> points à répartir</div>
</div>
<div id=\"compMetiers\" class=\"col-md-8\" style=\"height:500px;overflow:auto;\">
    <table class=\"table table-hover\">
        <thead>
        <th>Compétences</th>
        <th>%age de base</th>
        </thead>
        <tbody>
  ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeComp"]) ? $context["listeComp"] : $this->getContext($context, "listeComp")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 19
            echo "            <tr>
                <td class=\"col-md-4\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
            echo "</td><td class=\"col-md-2\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
            echo "%</td>
            </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>
</div>

<script>
    \$(document).ready(function() {
        \$(\"#metiers\").change(function() {
            var id = parseInt(\$(this).val());
            if (id !== 0) {
                \$.post(\"";
        // line 32
        echo sprintf($this->env->getExtension('url_decode_extension')->urlDecode($this->env->getExtension('routing')->getPath("Elric_Metier_Comp", array("id" => "%s"))), "\"+id+\"");
        echo "\",
                        function(response) {
                            \$('#compMetiers').html(response);
                        });
            } else {
                \$('#compMetiers').html('');
            }
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:metier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 32,  195 => 58,  160 => 28,  146 => 26,  104 => 19,  127 => 23,  124 => 32,  118 => 30,  114 => 29,  110 => 28,  90 => 23,  70 => 23,  58 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 26,  71 => 30,  67 => 15,  63 => 12,  59 => 20,  38 => 6,  94 => 24,  89 => 20,  85 => 25,  75 => 31,  68 => 13,  56 => 19,  87 => 16,  21 => 2,  26 => 6,  93 => 35,  88 => 6,  78 => 32,  46 => 7,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 32,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 16,  49 => 10,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 20,  101 => 18,  98 => 25,  96 => 31,  83 => 25,  74 => 19,  66 => 17,  55 => 15,  52 => 18,  50 => 13,  43 => 8,  41 => 7,  35 => 5,  32 => 12,  29 => 6,  209 => 82,  203 => 60,  199 => 59,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 25,  133 => 55,  130 => 34,  125 => 44,  122 => 22,  116 => 41,  112 => 42,  109 => 34,  106 => 27,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 22,  82 => 15,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 14,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 14,  36 => 13,  33 => 4,  30 => 7,);
    }
}
