<?php

/* JdrCorpGuildesBundle:Guildes:armes.html.twig */
class __TwigTemplate_4c1bc43fa4cd66a10d26662d1dfb2e8f8fe06e2f8be4695b02f60a35773ac935 extends Twig_Template
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
        echo "JdrCorp - Guildes - Armes & Armures
";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"panel-group\" id=\"accordionArmes\">
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeComp"]) ? $context["listeComp"] : $this->getContext($context, "listeComp")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 10
            echo "    <div class=\"panel panel-warning\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordionArmes\" href=\"#collapse";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getId"), "html", null, true);
            echo "\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
            echo "
                </a>
            </h4>
        </div>
        <div id=\"collapse";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getId"), "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Init</th>
                            <th>Att</th>
                            <th>Def</th>
                            <th>Blessure</th>
                            <th>Encombrement</th>
                            <th>Fort requis</th>
                            <th>Cad</th>
                            <th>PMoy</th>
                            <th>PEff</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeArmes"]) ? $context["listeArmes"] : $this->getContext($context, "listeArmes")));
            foreach ($context['_seq'] as $context["_key"] => $context["arme"]) {
                // line 37
                echo "                        ";
                if (($this->getAttribute($this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getCompetence"), "getId") == $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getId"))) {
                    // line 38
                    echo "                        <tr>
                            <td>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getNom"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getInit"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getAtt"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getDef"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getBlessure"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getEnc"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getFort"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getCad"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getPmoy"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getPeff"), "html", null, true);
                    echo "</td>
                        </tr>
                        ";
                }
                // line 51
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordionArmes\" href=\"#collapseArmures\">
                    Armures
                </a>
            </h4>
        </div>
        <div id=\"collapseArmures\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Init</th>
                            <th>Att</th>
                            <th>Def</th>
                            <th>Protection</th>
                            <th>Encombrement</th>
                            <th>Fort requis</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeArmures"]) ? $context["listeArmures"] : $this->getContext($context, "listeArmures")));
        foreach ($context['_seq'] as $context["_key"] => $context["armure"]) {
            // line 82
            echo "                        <tr>
                            <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["armure"]) ? $context["armure"] : $this->getContext($context, "armure")), "getNom"), "html", null, true);
            echo "</td>
                            <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["armure"]) ? $context["armure"] : $this->getContext($context, "armure")), "getInit"), "html", null, true);
            echo "</td>
                            <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["armure"]) ? $context["armure"] : $this->getContext($context, "armure")), "getAtt"), "html", null, true);
            echo "</td>
                            <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["armure"]) ? $context["armure"] : $this->getContext($context, "armure")), "getDef"), "html", null, true);
            echo "</td>
                            <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["armure"]) ? $context["armure"] : $this->getContext($context, "armure")), "getProtec"), "html", null, true);
            echo "</td>
                            <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["armure"]) ? $context["armure"] : $this->getContext($context, "armure")), "getEnc"), "html", null, true);
            echo "</td>
                            <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["armure"]) ? $context["armure"] : $this->getContext($context, "armure")), "getFort"), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['armure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:armes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 89,  202 => 87,  198 => 86,  194 => 85,  186 => 83,  137 => 51,  127 => 47,  256 => 137,  250 => 133,  242 => 127,  236 => 126,  225 => 121,  212 => 116,  206 => 88,  178 => 91,  165 => 83,  148 => 77,  84 => 36,  77 => 34,  65 => 29,  34 => 11,  100 => 40,  81 => 28,  53 => 13,  339 => 99,  336 => 98,  331 => 100,  328 => 98,  320 => 96,  318 => 95,  297 => 82,  293 => 80,  276 => 68,  271 => 66,  265 => 63,  261 => 139,  257 => 61,  253 => 60,  249 => 59,  245 => 58,  237 => 56,  233 => 55,  226 => 50,  218 => 47,  190 => 84,  184 => 4,  152 => 78,  76 => 34,  129 => 39,  126 => 38,  118 => 65,  114 => 20,  110 => 44,  90 => 28,  70 => 30,  58 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 93,  312 => 98,  309 => 97,  305 => 87,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 69,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 57,  229 => 122,  220 => 48,  214 => 46,  177 => 65,  169 => 29,  140 => 75,  132 => 40,  128 => 22,  107 => 42,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 120,  219 => 92,  217 => 75,  208 => 68,  204 => 39,  179 => 81,  159 => 82,  143 => 52,  135 => 53,  119 => 45,  102 => 33,  71 => 24,  67 => 15,  63 => 22,  59 => 26,  38 => 6,  94 => 44,  89 => 37,  85 => 36,  75 => 17,  68 => 14,  56 => 13,  87 => 25,  21 => 2,  26 => 3,  93 => 16,  88 => 15,  78 => 25,  46 => 15,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 102,  166 => 28,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 15,  49 => 11,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 18,  69 => 12,  47 => 16,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 48,  123 => 46,  120 => 39,  115 => 44,  111 => 43,  108 => 36,  101 => 32,  98 => 32,  96 => 45,  83 => 36,  74 => 26,  66 => 23,  55 => 25,  52 => 18,  50 => 24,  43 => 15,  41 => 21,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 111,  199 => 110,  193 => 30,  189 => 71,  187 => 84,  182 => 66,  176 => 90,  173 => 89,  168 => 72,  164 => 64,  162 => 57,  154 => 58,  149 => 51,  147 => 25,  144 => 76,  141 => 48,  133 => 23,  130 => 41,  125 => 67,  122 => 66,  116 => 41,  112 => 42,  109 => 34,  106 => 34,  103 => 41,  99 => 40,  95 => 39,  92 => 38,  86 => 37,  82 => 33,  80 => 35,  73 => 19,  64 => 18,  60 => 20,  57 => 14,  54 => 19,  51 => 17,  48 => 10,  45 => 22,  42 => 15,  39 => 14,  36 => 13,  33 => 4,  30 => 10,);
    }
}
