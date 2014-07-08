<?php

/* JdrCorpGuildesBundle:Guildes:dice.html.twig */
class __TwigTemplate_4a67b4b083b3bd261438370e231932cc5ead8b5661bdc53ab4838d47d8d25e89 extends Twig_Template
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
        // line 89
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8c5da37_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8c5da37_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8c5da37_dice_1.js");
            // line 90
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "8c5da37"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8c5da37") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8c5da37.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
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
        return array (  160 => 90,  215 => 96,  167 => 65,  134 => 47,  124 => 43,  97 => 31,  263 => 66,  260 => 65,  255 => 67,  244 => 63,  213 => 51,  205 => 49,  188 => 77,  172 => 32,  153 => 4,  210 => 89,  202 => 87,  198 => 81,  194 => 43,  186 => 40,  137 => 51,  127 => 47,  256 => 137,  250 => 133,  242 => 62,  236 => 126,  225 => 54,  212 => 116,  206 => 88,  178 => 74,  165 => 83,  148 => 77,  84 => 40,  77 => 25,  65 => 29,  34 => 7,  100 => 40,  81 => 30,  53 => 17,  339 => 99,  336 => 98,  331 => 100,  328 => 98,  320 => 96,  318 => 95,  297 => 82,  293 => 80,  276 => 68,  271 => 66,  265 => 63,  261 => 139,  257 => 61,  253 => 60,  249 => 59,  245 => 58,  237 => 56,  233 => 56,  226 => 50,  218 => 47,  190 => 84,  184 => 4,  152 => 78,  76 => 29,  129 => 39,  126 => 38,  118 => 65,  114 => 41,  110 => 40,  90 => 28,  70 => 30,  58 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 93,  312 => 98,  309 => 97,  305 => 87,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 69,  268 => 85,  264 => 84,  258 => 81,  252 => 65,  247 => 78,  241 => 57,  229 => 55,  220 => 48,  214 => 46,  177 => 65,  169 => 29,  140 => 75,  132 => 67,  128 => 22,  107 => 37,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 53,  219 => 92,  217 => 52,  208 => 68,  204 => 39,  179 => 81,  159 => 23,  143 => 52,  135 => 53,  119 => 45,  102 => 33,  71 => 22,  67 => 21,  63 => 22,  59 => 16,  38 => 8,  94 => 44,  89 => 31,  85 => 45,  75 => 36,  68 => 19,  56 => 22,  87 => 25,  21 => 2,  26 => 3,  93 => 47,  88 => 28,  78 => 43,  46 => 15,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 48,  196 => 90,  183 => 82,  171 => 102,  166 => 28,  163 => 62,  158 => 67,  156 => 89,  151 => 59,  142 => 59,  138 => 54,  136 => 56,  121 => 65,  117 => 64,  105 => 37,  91 => 29,  62 => 19,  49 => 11,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 28,  69 => 20,  47 => 16,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 23,  123 => 46,  120 => 39,  115 => 44,  111 => 43,  108 => 36,  101 => 36,  98 => 32,  96 => 45,  83 => 36,  74 => 13,  66 => 24,  55 => 10,  52 => 18,  50 => 14,  43 => 15,  41 => 16,  35 => 6,  32 => 3,  29 => 2,  209 => 50,  203 => 111,  199 => 110,  193 => 30,  189 => 71,  187 => 84,  182 => 75,  176 => 90,  173 => 89,  168 => 72,  164 => 64,  162 => 24,  154 => 58,  149 => 51,  147 => 58,  144 => 76,  141 => 48,  133 => 69,  130 => 41,  125 => 67,  122 => 66,  116 => 41,  112 => 36,  109 => 19,  106 => 34,  103 => 32,  99 => 48,  95 => 33,  92 => 38,  86 => 37,  82 => 44,  80 => 39,  73 => 21,  64 => 23,  60 => 21,  57 => 16,  54 => 15,  51 => 16,  48 => 10,  45 => 12,  42 => 15,  39 => 14,  36 => 13,  33 => 4,  30 => 10,);
    }
}
