<?php

/* JdrCorpElricBundle:Elric:metier.html.twig */
class __TwigTemplate_89fb78b41f764115bb68ff5dd7659f096043940783be0b67f6b17ab881a9f3c1 extends Twig_Template
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
    <ul id=\"info_armes\"></ul>
</div>
<div id=\"compMetiers\" class=\"col-md-8\" style=\"height:500px;overflow:auto;\">
    <table class=\"table table-hover\" style=\"height:300px;overflow:auto;\">
        <thead>
        <th>Compétences</th>
        <th>%age de base</th>
        </thead>
        <tbody>
  ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeComp"]) ? $context["listeComp"] : $this->getContext($context, "listeComp")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 20
            echo "            <tr>
                <td class=\"col-md-4\">";
            // line 21
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
        // line 24
        echo "        </tbody>
    </table>
</div>

<script>
    \$(document).ready(function() {
        \$(\"#metiers\").change(function() {
            var id = parseInt(\$(this).val());
            if (id !== 0) {
                \$.post(\"";
        // line 33
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
        return array (  339 => 99,  336 => 98,  331 => 100,  328 => 98,  320 => 96,  318 => 95,  297 => 82,  293 => 80,  276 => 68,  265 => 63,  261 => 62,  257 => 61,  253 => 60,  249 => 59,  226 => 50,  218 => 47,  129 => 39,  118 => 35,  70 => 23,  231 => 108,  195 => 92,  170 => 74,  153 => 68,  146 => 66,  126 => 38,  65 => 26,  100 => 38,  215 => 99,  178 => 74,  167 => 65,  124 => 43,  81 => 25,  34 => 7,  97 => 29,  84 => 40,  77 => 35,  275 => 69,  272 => 68,  267 => 70,  245 => 58,  237 => 56,  225 => 54,  213 => 51,  200 => 44,  174 => 27,  165 => 4,  152 => 26,  150 => 67,  210 => 89,  206 => 46,  202 => 94,  198 => 81,  194 => 42,  190 => 29,  186 => 83,  53 => 19,  271 => 66,  256 => 66,  250 => 81,  233 => 55,  212 => 56,  205 => 95,  185 => 47,  181 => 46,  134 => 47,  110 => 19,  113 => 36,  207 => 57,  197 => 50,  188 => 77,  184 => 4,  180 => 48,  172 => 46,  160 => 70,  137 => 51,  127 => 47,  114 => 20,  90 => 28,  76 => 34,  58 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 93,  312 => 98,  309 => 97,  305 => 87,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 69,  268 => 85,  264 => 68,  258 => 81,  252 => 80,  247 => 78,  241 => 57,  229 => 55,  220 => 48,  214 => 46,  177 => 45,  169 => 29,  140 => 55,  132 => 40,  128 => 22,  107 => 18,  61 => 25,  273 => 96,  269 => 94,  254 => 65,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 100,  219 => 92,  217 => 52,  208 => 68,  204 => 39,  179 => 81,  159 => 61,  143 => 52,  135 => 53,  119 => 37,  102 => 31,  71 => 24,  67 => 19,  63 => 15,  59 => 16,  38 => 8,  94 => 29,  89 => 27,  85 => 26,  75 => 36,  68 => 22,  56 => 14,  87 => 25,  21 => 2,  26 => 3,  93 => 16,  88 => 15,  78 => 25,  46 => 9,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 51,  196 => 90,  183 => 82,  171 => 102,  166 => 28,  163 => 62,  158 => 36,  156 => 69,  151 => 59,  142 => 59,  138 => 54,  136 => 56,  121 => 58,  117 => 57,  105 => 31,  91 => 29,  62 => 21,  49 => 19,  24 => 4,  25 => 5,  19 => 1,  79 => 26,  72 => 33,  69 => 12,  47 => 9,  40 => 8,  37 => 5,  22 => 1,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 48,  123 => 37,  120 => 36,  115 => 44,  111 => 43,  108 => 4,  101 => 30,  98 => 30,  96 => 37,  83 => 25,  74 => 13,  66 => 22,  55 => 10,  52 => 14,  50 => 9,  43 => 7,  41 => 16,  35 => 5,  32 => 6,  29 => 6,  209 => 96,  203 => 78,  199 => 93,  193 => 30,  189 => 48,  187 => 84,  182 => 75,  176 => 75,  173 => 44,  168 => 45,  164 => 64,  162 => 57,  154 => 57,  149 => 37,  147 => 25,  144 => 50,  141 => 34,  133 => 23,  130 => 41,  125 => 59,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 32,  103 => 32,  99 => 48,  95 => 39,  92 => 38,  86 => 27,  82 => 33,  80 => 35,  73 => 21,  64 => 18,  60 => 21,  57 => 20,  54 => 19,  51 => 11,  48 => 10,  45 => 17,  42 => 7,  39 => 15,  36 => 7,  33 => 4,  30 => 7,);
    }
}
