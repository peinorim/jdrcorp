<?php

/* JdrCorpGuildesBundle:Guildes:loom.html.twig */
class __TwigTemplate_d58741aa25f2a08bd6cd696172494c32d6fbf499b84ffae611adb4b88c681ece extends Twig_Template
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
        echo "JdrCorp - Guildes - Loom
";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"panel-group\" id=\"accordionMaisons\">
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listemaison"]) ? $context["listemaison"] : $this->getContext($context, "listemaison")));
        foreach ($context['_seq'] as $context["_key"] => $context["maison"]) {
            // line 10
            echo "    ";
            if (($this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getNom") != "Génériques")) {
                // line 11
                echo "    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordionMaisons\" href=\"#collapse";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId"), "html", null, true);
                echo "\">
                    ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getNom"), "html", null, true);
                echo "
                </a>
            </h4>
        </div>
        <div id=\"collapse";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId"), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Tours</h3>
                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Portée</th>
                                    <th>Cible</th>
                                    <th>Durée</th>
                                    <th>Effet</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                // line 37
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listeTour"]) ? $context["listeTour"] : $this->getContext($context, "listeTour")));
                foreach ($context['_seq'] as $context["_key"] => $context["tour"]) {
                    // line 38
                    echo "                                ";
                    if (($this->getAttribute($this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "getMaison"), "getId") == $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId"))) {
                        // line 39
                        echo "                                <tr>
                                    <td>";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "getNom"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 41
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "getPortee"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 42
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "getCible"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 43
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "getDuree"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 44
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "getEffet"), "html", null, true);
                        echo "</td>
                                </tr>
                                ";
                    }
                    // line 47
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Sorts</h3>
                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Difficultée</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                // line 66
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listeSort"]) ? $context["listeSort"] : $this->getContext($context, "listeSort")));
                foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                    // line 67
                    echo "                                    ";
                    if (($this->getAttribute($this->getAttribute((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "getMaison"), "getId") == $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId"))) {
                        // line 68
                        echo "                                <tr>
                                    <td>";
                        // line 69
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "getNom"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "getDiff"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 71
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "getType"), "html", null, true);
                        echo "</td>
                                </tr>
                                    ";
                    }
                    // line 74
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Sortilèges</h3>
                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Difficultée</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                // line 92
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listeSortilege"]) ? $context["listeSortilege"] : $this->getContext($context, "listeSortilege")));
                foreach ($context['_seq'] as $context["_key"] => $context["sortilege"]) {
                    // line 93
                    echo "                                    ";
                    if (($this->getAttribute($this->getAttribute((isset($context["sortilege"]) ? $context["sortilege"] : $this->getContext($context, "sortilege")), "getMaison"), "getId") == $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId"))) {
                        // line 94
                        echo "                                <tr>
                                    <td>";
                        // line 95
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sortilege"]) ? $context["sortilege"] : $this->getContext($context, "sortilege")), "getNom"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 96
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sortilege"]) ? $context["sortilege"] : $this->getContext($context, "sortilege")), "getDiff"), "html", null, true);
                        echo "</td>
                                </tr>
                                    ";
                    }
                    // line 99
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortilege'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
            }
            // line 108
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:loom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 108,  195 => 92,  170 => 74,  153 => 68,  146 => 66,  126 => 48,  65 => 26,  100 => 38,  215 => 99,  178 => 74,  167 => 65,  124 => 43,  81 => 36,  34 => 7,  97 => 46,  84 => 40,  77 => 35,  275 => 69,  272 => 68,  267 => 70,  245 => 59,  237 => 109,  225 => 54,  213 => 51,  200 => 44,  174 => 27,  165 => 4,  152 => 72,  150 => 67,  210 => 89,  206 => 46,  202 => 94,  198 => 81,  194 => 42,  190 => 84,  186 => 83,  53 => 13,  271 => 87,  256 => 66,  250 => 81,  233 => 56,  212 => 56,  205 => 95,  185 => 47,  181 => 46,  134 => 47,  110 => 43,  113 => 51,  207 => 57,  197 => 50,  188 => 77,  184 => 35,  180 => 48,  172 => 46,  160 => 70,  137 => 51,  127 => 47,  114 => 44,  90 => 16,  76 => 14,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 68,  258 => 81,  252 => 80,  247 => 78,  241 => 58,  229 => 55,  220 => 70,  214 => 57,  177 => 45,  169 => 60,  140 => 55,  132 => 67,  128 => 22,  107 => 37,  61 => 25,  273 => 96,  269 => 94,  254 => 65,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 100,  219 => 92,  217 => 52,  208 => 68,  204 => 56,  179 => 81,  159 => 61,  143 => 52,  135 => 53,  119 => 45,  102 => 41,  71 => 22,  67 => 19,  63 => 15,  59 => 16,  38 => 8,  94 => 28,  89 => 35,  85 => 37,  75 => 36,  68 => 22,  56 => 14,  87 => 25,  21 => 2,  26 => 3,  93 => 47,  88 => 37,  78 => 43,  46 => 9,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 51,  196 => 90,  183 => 82,  171 => 26,  166 => 39,  163 => 62,  158 => 36,  156 => 69,  151 => 59,  142 => 59,  138 => 54,  136 => 56,  121 => 58,  117 => 57,  105 => 48,  91 => 29,  62 => 19,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 13,  69 => 20,  47 => 9,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 48,  123 => 48,  120 => 47,  115 => 44,  111 => 43,  108 => 4,  101 => 47,  98 => 40,  96 => 37,  83 => 25,  74 => 13,  66 => 23,  55 => 10,  52 => 14,  50 => 14,  43 => 8,  41 => 16,  35 => 5,  32 => 3,  29 => 2,  209 => 96,  203 => 78,  199 => 93,  193 => 49,  189 => 48,  187 => 84,  182 => 75,  176 => 75,  173 => 44,  168 => 45,  164 => 71,  162 => 57,  154 => 58,  149 => 37,  147 => 58,  144 => 28,  141 => 34,  133 => 23,  130 => 41,  125 => 59,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 42,  103 => 32,  99 => 48,  95 => 39,  92 => 38,  86 => 34,  82 => 33,  80 => 39,  73 => 21,  64 => 18,  60 => 15,  57 => 17,  54 => 15,  51 => 11,  48 => 10,  45 => 12,  42 => 7,  39 => 9,  36 => 13,  33 => 4,  30 => 7,);
    }
}
