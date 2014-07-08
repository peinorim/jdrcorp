<?php

/* JdrCorpGuildesBundle:Guildes:armes.html.twig */
class __TwigTemplate_1b72a66b6c7529731c90c3ebf2f37673dd69f597a5be47401053c6cf481cfc98 extends Twig_Template
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
        return array (  210 => 89,  206 => 88,  202 => 87,  198 => 86,  194 => 85,  190 => 84,  186 => 83,  53 => 13,  271 => 87,  256 => 84,  250 => 81,  233 => 70,  212 => 56,  205 => 52,  185 => 47,  181 => 46,  134 => 20,  110 => 19,  113 => 51,  207 => 57,  197 => 50,  188 => 50,  184 => 49,  180 => 48,  172 => 46,  160 => 37,  137 => 51,  127 => 47,  114 => 17,  90 => 16,  76 => 14,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 86,  258 => 81,  252 => 80,  247 => 78,  241 => 75,  229 => 68,  220 => 70,  214 => 57,  177 => 45,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 42,  61 => 13,  273 => 96,  269 => 94,  254 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 92,  217 => 75,  208 => 68,  204 => 56,  179 => 81,  159 => 61,  143 => 52,  135 => 53,  119 => 45,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 37,  85 => 36,  75 => 25,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 16,  88 => 15,  78 => 21,  46 => 9,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 51,  196 => 90,  183 => 82,  171 => 61,  166 => 39,  163 => 62,  158 => 36,  156 => 42,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 18,  105 => 40,  91 => 27,  62 => 22,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 13,  69 => 12,  47 => 9,  40 => 7,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 48,  123 => 46,  120 => 40,  115 => 44,  111 => 43,  108 => 4,  101 => 32,  98 => 31,  96 => 40,  83 => 25,  74 => 13,  66 => 23,  55 => 10,  52 => 21,  50 => 9,  43 => 8,  41 => 7,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 58,  193 => 49,  189 => 48,  187 => 84,  182 => 66,  176 => 47,  173 => 44,  168 => 45,  164 => 44,  162 => 57,  154 => 58,  149 => 37,  147 => 58,  144 => 28,  141 => 34,  133 => 55,  130 => 41,  125 => 4,  122 => 43,  116 => 41,  112 => 89,  109 => 34,  106 => 36,  103 => 41,  99 => 40,  95 => 39,  92 => 38,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 18,  60 => 6,  57 => 14,  54 => 10,  51 => 14,  48 => 10,  45 => 17,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 7,);
    }
}
