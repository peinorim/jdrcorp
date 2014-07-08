<?php

/* JdrCorpGuildesBundle:Guildes:dice.html.twig */
class __TwigTemplate_5b2b543ca650612f019c1d7c1a379e68572c5c76c05f06cb6ada7c9e495fdf5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_guildes.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_guildes.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "JdrCorp - Guildes - Lanceur de dés
";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"panel panel-default col-md-8 center\">
    <div class=\"panel-body\">
        <div class=\"col-md-4\">
            <select id=\"diff\" class=\"form-control\">
                <option value=\"0\" selected=\"selected\">Choisir une difficulté (Facultatif)</option>
                <option value=\"3\">Très facile = 3</option>
                <option value=\"6\">Facile = 6</option>
                <option value=\"9\">Difficile = 9</option>
                <option value=\"12\">Très difficile = 12</option>
                <option value=\"18\">Extrême = 18</option>
                <option value=\"25\">Impossible = 25</option>
            </select>
            <div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"rad_jet\" id=\"rad_comp\" value=\"comp\" checked>
                    Jet de compétence
                </label>
            </div>
            <div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"rad_jet\" id=\"rad_carac\" value=\"carac\">
                    Jet de caractéristique
                </label>
            </div>
            <div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"rad_jet\" id=\"rad_noncomp\" value=\"noncomp\">
                    Jet de non-compétence
                </label>
            </div>
        </div>
        <div class=\"col-md-8 form-horizontal\">
            <div id=\"div_comp\" class=\"form-group\">
                <select id=\"comp\" class=\"form-control\">
                    <option value=\"0\">Compétence</option>
                ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeComp"]) ? $context["listeComp"] : $this->getContext($context, "listeComp")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 44
            echo "                    ";
            if (($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom") != "Armes*")) {
                // line 45
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getId"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo "</option>
                    ";
            }
            // line 47
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </select>
            </div>
            <div id=\"div_comp_niv\" class=\"form-group\">
                <select id=\"comp_niv\" class=\"form-control\">
                    <option value=\"0\">Niveau</option>
                    <option value=\"N\">Novice</option>
                    <option value=\"I\">Initié</option>
                    <option value=\"E\">Expert</option>
                </select>
            </div>
            <div id=\"div_des\" class=\"form-group\">
                <input type=\"number\" class=\"form-control\" id=\"nb_des\" placeholder=\"Nombre de dés à lancer\">
            </div>
            <div id=\"div_carac\" class=\"form-group\">
                <select id=\"carac_nom\" class=\"form-control\">
                    <option value=\"0\">Caractéristique</option>
                ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCarac"]) ? $context["listeCarac"] : $this->getContext($context, "listeCarac")));
        foreach ($context['_seq'] as $context["_key"] => $context["carac"]) {
            // line 65
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carac"]) ? $context["carac"] : $this->getContext($context, "carac")), "getId"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carac"]) ? $context["carac"] : $this->getContext($context, "carac")), "getNom"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </select>
            </div>
            <div id=\"div_carac_niv\" class=\"form-group\">
                <select id=\"carac_niv\" class=\"form-control\">
                    <option value=\"0\">Nombre de puces</option>
                    <option value=\"1\">1</option>
                    <option value=\"2\">2</option>
                    <option value=\"3\">3</option>
                    <option value=\"4\">4</option>
                    <option value=\"5\">5</option>
                    <option value=\"6\">6</option>
                </select>
            </div>
            <div class=\"form-group\">
                <button id=\"btn_des\" type=\"button\" class=\"btn btn-primary\">Lancer les dés</button>
                <span id=\"res\"></span>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:dice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 96,  178 => 74,  167 => 65,  124 => 43,  81 => 30,  34 => 7,  97 => 31,  84 => 40,  77 => 25,  275 => 69,  272 => 68,  267 => 70,  245 => 59,  237 => 57,  225 => 54,  213 => 51,  200 => 44,  174 => 27,  165 => 4,  152 => 72,  150 => 26,  210 => 89,  206 => 46,  202 => 87,  198 => 81,  194 => 42,  190 => 84,  186 => 83,  53 => 13,  271 => 87,  256 => 66,  250 => 81,  233 => 56,  212 => 56,  205 => 52,  185 => 47,  181 => 46,  134 => 47,  110 => 40,  113 => 51,  207 => 57,  197 => 50,  188 => 77,  184 => 35,  180 => 48,  172 => 46,  160 => 37,  137 => 51,  127 => 47,  114 => 41,  90 => 16,  76 => 14,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 68,  258 => 81,  252 => 80,  247 => 78,  241 => 58,  229 => 55,  220 => 70,  214 => 57,  177 => 45,  169 => 60,  140 => 55,  132 => 67,  128 => 22,  107 => 37,  61 => 13,  273 => 96,  269 => 94,  254 => 65,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 53,  219 => 92,  217 => 52,  208 => 68,  204 => 56,  179 => 81,  159 => 61,  143 => 52,  135 => 53,  119 => 45,  102 => 32,  71 => 22,  67 => 21,  63 => 15,  59 => 16,  38 => 8,  94 => 28,  89 => 31,  85 => 45,  75 => 36,  68 => 19,  56 => 22,  87 => 25,  21 => 2,  26 => 3,  93 => 47,  88 => 28,  78 => 43,  46 => 9,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 51,  196 => 90,  183 => 82,  171 => 26,  166 => 39,  163 => 62,  158 => 36,  156 => 42,  151 => 59,  142 => 59,  138 => 54,  136 => 56,  121 => 65,  117 => 64,  105 => 37,  91 => 29,  62 => 19,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 13,  69 => 20,  47 => 9,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 48,  123 => 46,  120 => 40,  115 => 44,  111 => 43,  108 => 4,  101 => 36,  98 => 31,  96 => 40,  83 => 25,  74 => 13,  66 => 23,  55 => 10,  52 => 21,  50 => 14,  43 => 8,  41 => 16,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 58,  193 => 49,  189 => 48,  187 => 84,  182 => 75,  176 => 47,  173 => 44,  168 => 45,  164 => 44,  162 => 57,  154 => 58,  149 => 37,  147 => 58,  144 => 28,  141 => 34,  133 => 23,  130 => 41,  125 => 4,  122 => 43,  116 => 41,  112 => 36,  109 => 34,  106 => 36,  103 => 32,  99 => 48,  95 => 33,  92 => 38,  86 => 28,  82 => 44,  80 => 39,  73 => 21,  64 => 18,  60 => 6,  57 => 16,  54 => 15,  51 => 14,  48 => 10,  45 => 12,  42 => 7,  39 => 9,  36 => 13,  33 => 4,  30 => 7,);
    }
}
