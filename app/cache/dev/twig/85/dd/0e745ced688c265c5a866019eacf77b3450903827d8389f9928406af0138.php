<?php

/* JdrCorpGuildesBundle:Guildes:equipement.html.twig */
class __TwigTemplate_85dd0e745ced688c265c5a866019eacf77b3450903827d8389f9928406af0138 extends Twig_Template
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
        echo "JdrCorp - Guildes - Equipement
";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"alert alert-info\">
    1 guilder de corail = 10 guilders d'écume = 100 guilders de sable
</div>

<div class=\"panel-group\" id=\"accordionArmes\">
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEqCate"]) ? $context["listeEqCate"] : $this->getContext($context, "listeEqCate")));
        foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
            // line 14
            echo "    <div class=\"panel panel-warning\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordionArmes\" href=\"#collapse";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cate"]) ? $context["cate"] : $this->getContext($context, "cate")), "getId"), "html", null, true);
            echo "\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cate"]) ? $context["cate"] : $this->getContext($context, "cate")), "getNom"), "html", null, true);
            echo "
                </a>
            </h4>
        </div>
        <div id=\"collapse";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cate"]) ? $context["cate"] : $this->getContext($context, "cate")), "getId"), "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Rareté</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeEquip"]) ? $context["listeEquip"] : $this->getContext($context, "listeEquip")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 34
                echo "                        ";
                if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getCategorie"), "getId") == $this->getAttribute((isset($context["cate"]) ? $context["cate"] : $this->getContext($context, "cate")), "getId"))) {
                    // line 35
                    echo "                        <tr>
                            <td>";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getNom"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getprix"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getRarete"), "html", null, true);
                    echo "</td>
                        </tr>
                        ";
                }
                // line 41
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:equipement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 90,  215 => 96,  167 => 65,  134 => 47,  124 => 43,  97 => 31,  263 => 66,  260 => 65,  255 => 67,  244 => 63,  213 => 51,  205 => 49,  188 => 77,  172 => 32,  153 => 4,  210 => 89,  202 => 87,  198 => 81,  194 => 43,  186 => 40,  137 => 51,  127 => 47,  256 => 137,  250 => 133,  242 => 62,  236 => 126,  225 => 54,  212 => 116,  206 => 88,  178 => 74,  165 => 83,  148 => 77,  84 => 40,  77 => 25,  65 => 29,  34 => 7,  100 => 38,  81 => 30,  53 => 17,  339 => 99,  336 => 98,  331 => 100,  328 => 98,  320 => 96,  318 => 95,  297 => 82,  293 => 80,  276 => 68,  271 => 66,  265 => 63,  261 => 139,  257 => 61,  253 => 60,  249 => 59,  245 => 58,  237 => 56,  233 => 56,  226 => 50,  218 => 47,  190 => 84,  184 => 4,  152 => 78,  76 => 29,  129 => 39,  126 => 38,  118 => 65,  114 => 41,  110 => 40,  90 => 28,  70 => 30,  58 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 93,  312 => 98,  309 => 97,  305 => 87,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 69,  268 => 85,  264 => 84,  258 => 81,  252 => 65,  247 => 78,  241 => 57,  229 => 55,  220 => 48,  214 => 46,  177 => 65,  169 => 29,  140 => 75,  132 => 67,  128 => 22,  107 => 37,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 53,  219 => 92,  217 => 52,  208 => 68,  204 => 39,  179 => 81,  159 => 23,  143 => 52,  135 => 53,  119 => 45,  102 => 33,  71 => 22,  67 => 21,  63 => 22,  59 => 16,  38 => 8,  94 => 44,  89 => 35,  85 => 45,  75 => 36,  68 => 22,  56 => 22,  87 => 25,  21 => 2,  26 => 3,  93 => 47,  88 => 28,  78 => 43,  46 => 15,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 48,  196 => 90,  183 => 82,  171 => 102,  166 => 28,  163 => 62,  158 => 67,  156 => 89,  151 => 59,  142 => 59,  138 => 54,  136 => 56,  121 => 65,  117 => 64,  105 => 37,  91 => 29,  62 => 19,  49 => 11,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 28,  69 => 20,  47 => 16,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 23,  123 => 48,  120 => 39,  115 => 44,  111 => 43,  108 => 36,  101 => 36,  98 => 32,  96 => 37,  83 => 36,  74 => 13,  66 => 24,  55 => 10,  52 => 14,  50 => 14,  43 => 15,  41 => 16,  35 => 6,  32 => 3,  29 => 2,  209 => 50,  203 => 111,  199 => 110,  193 => 30,  189 => 71,  187 => 84,  182 => 75,  176 => 90,  173 => 89,  168 => 72,  164 => 64,  162 => 24,  154 => 58,  149 => 51,  147 => 58,  144 => 76,  141 => 48,  133 => 69,  130 => 41,  125 => 67,  122 => 66,  116 => 41,  112 => 42,  109 => 19,  106 => 41,  103 => 32,  99 => 48,  95 => 33,  92 => 36,  86 => 34,  82 => 33,  80 => 39,  73 => 21,  64 => 23,  60 => 21,  57 => 17,  54 => 15,  51 => 16,  48 => 13,  45 => 12,  42 => 15,  39 => 14,  36 => 13,  33 => 4,  30 => 10,);
    }
}
