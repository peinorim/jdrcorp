<?php

/* JdrCorpGuildesBundle:Guildes:comp.html.twig */
class __TwigTemplate_75048352a3632412ae071a69de8af702670f079bfd64147a5904ec0a1d3c09d2 extends Twig_Template
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
        echo "JdrCorp - Guildes - Compétences & Métiers
";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"col-md-4\">
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Métiers</h3>
        </div>
        <div class=\"panel-body\"> 
            <ul id=\"all_met\" class=\"nav nav-pills nav-stacked\" style=\"max-width: 260px;\">
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeMetiers"]) ? $context["listeMetiers"] : $this->getContext($context, "listeMetiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
            // line 15
            echo "                <li style=\"float:left;\" id=\"metier_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metier"]) ? $context["metier"] : $this->getContext($context, "metier")), "getId"), "html", null, true);
            echo "\">
                    <a href=\"#\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metier"]) ? $context["metier"] : $this->getContext($context, "metier")), "getNom"), "html", null, true);
            echo "</a>
                </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
    </div>
</div>
<div class=\"col-md-6\">
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Compétences</h3>
        </div>
        <div class=\"panel-body\">
            <div style=\"margin:0!important;\" class=\"page-header\">Compétences d'apprenti</div>
            <ul id=\"all_comp\" class=\"nav nav-pills nav-stacked\">
                ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCompApp"]) ? $context["listeCompApp"] : $this->getContext($context, "listeCompApp")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 31
            echo "                <li style=\"float:left;margin-top:0!important;line-height: 1.25em;\" id=\"comp_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getId"), "html", null, true);
            echo "\" data-carac=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getCarac"), "getId"), "html", null, true);
            echo "\" data-chap=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getChapitre"), "getId"), "html", null, true);
            echo "\">
                    <a href=\"#\">
                        ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
            echo "
                    </a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </ul>
            <div style=\"margin:0!important;\" class=\"page-header\">Compétences de compagnon</div>
            <ul id=\"all_compcpg\" class=\"nav nav-pills nav-stacked\">
                ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCompCpg"]) ? $context["listeCompCpg"] : $this->getContext($context, "listeCompCpg")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 41
            echo "                <li style=\"float:left;margin-top:0!important;line-height: 1.25em;\" id=\"comp_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getId"), "html", null, true);
            echo "\" data-carac=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getCarac"), "getId"), "html", null, true);
            echo "\" data-chap=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getChapitre"), "getId"), "html", null, true);
            echo "\">
                    <a href=\"#\">
                        ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
            echo "
                    </a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </ul>
        </div>
    </div>
</div>
<div class=\"col-md-2\">
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Caractéristiques</h3>
        </div>
        <div class=\"panel-body\"> 
            <ul class=\"nav nav-pills nav-stacked\" style=\"max-width: 260px;\">
        ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCarac"]) ? $context["listeCarac"] : $this->getContext($context, "listeCarac")));
        foreach ($context['_seq'] as $context["_key"] => $context["carac"]) {
            // line 59
            echo "                <li id=\"carac_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carac"]) ? $context["carac"] : $this->getContext($context, "carac")), "getId"), "html", null, true);
            echo "\" style=\"margin-top:0!important;line-height: 1.25em;\">
                    <a href=\"#\">
                        ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carac"]) ? $context["carac"] : $this->getContext($context, "carac")), "getNom"), "html", null, true);
            echo "
                    </a>
                </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </ul>
        </div>
    </div>
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Chapitres</h3>
        </div>
        <div class=\"panel-body\"> 
            <ul class=\"nav nav-pills nav-stacked\" style=\"max-width: 260px;\">
        ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeChap"]) ? $context["listeChap"] : $this->getContext($context, "listeChap")));
        foreach ($context['_seq'] as $context["_key"] => $context["chap"]) {
            // line 75
            echo "                <li id=\"chap_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chap"]) ? $context["chap"] : $this->getContext($context, "chap")), "getId"), "html", null, true);
            echo "\" style=\"margin-top:0!important;line-height: 1.25em;\">
                    <a href=\"#\">
                        ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chap"]) ? $context["chap"] : $this->getContext($context, "chap")), "getNom"), "html", null, true);
            echo "
                    </a>
                </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            </ul>
        </div>
    </div>
</div>
<script>
    \$(document).ready(function() {
        \$(\"#comp_path\").addClass('active');
        \$(\"li\").click(function() {
            \$(\"li.active\").each(function(index) {
                \$(this).removeClass('active');
            });
            \$(this).addClass('active');
            var type = \$(this).attr('id').split(\"_\")[0];
            var id = parseInt(\$(this).attr('id').split(\"_\")[1]);
            if (id !== 0) {
                \$.post(\"";
        // line 96
        echo sprintf($this->env->getExtension('url_decode_extension')->urlDecode($this->env->getExtension('routing')->getPath("Guildes_links", array("type" => "%s", "id" => "%s"))), "\"+type+\"", "\"+id+\"");
        echo "\",
                        function(response) {
                            if (response['comp'] !== null) {
                                for (comp_id in response['comp']) {
                                    \$('#comp_' + comp_id).addClass('active');
                                }
                            } else if (response['metier'] !== null) {
                                for (metier_id in response['metier']) {
                                    \$('#metier_' + metier_id).addClass('active');
                                }
                            } else if (response['compCarac'] !== null) {
                                for (comp_id in response['compCarac']) {
                                    \$('#comp_' + comp_id).addClass('active');
                                }
                            } else if (response['compChap'] !== null) {
                                for (chap_id in response['compChap']) {
                                    \$('#comp_' + chap_id).addClass('active');
                                }
                            }
                        });
            }
        });

        \$(\"#all_comp li, #all_compcpg li\").mouseenter(function() {
            var carac_id = parseInt(\$(this).attr('data-carac'));
            var chap_id = parseInt(\$(this).attr('data-chap'));
            \$('#carac_' + carac_id).addClass('active');
            \$('#chap_' + chap_id).addClass('active');
        });
        \$(\"#all_comp li, #all_compcpg li\").mouseleave(function() {
            var carac_id = parseInt(\$(this).attr('data-carac'));
            var chap_id = parseInt(\$(this).attr('data-chap'));
            \$('#carac_' + carac_id).removeClass('active');
            \$('#chap_' + chap_id).removeClass('active');
        });
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:comp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 96,  167 => 65,  134 => 47,  124 => 43,  97 => 31,  263 => 66,  260 => 65,  255 => 67,  244 => 63,  213 => 51,  205 => 49,  188 => 77,  172 => 32,  153 => 4,  210 => 89,  202 => 87,  198 => 81,  194 => 43,  186 => 40,  137 => 51,  127 => 47,  256 => 137,  250 => 133,  242 => 62,  236 => 126,  225 => 54,  212 => 116,  206 => 88,  178 => 74,  165 => 83,  148 => 77,  84 => 40,  77 => 25,  65 => 29,  34 => 7,  100 => 40,  81 => 30,  53 => 17,  339 => 99,  336 => 98,  331 => 100,  328 => 98,  320 => 96,  318 => 95,  297 => 82,  293 => 80,  276 => 68,  271 => 66,  265 => 63,  261 => 139,  257 => 61,  253 => 60,  249 => 59,  245 => 58,  237 => 56,  233 => 56,  226 => 50,  218 => 47,  190 => 84,  184 => 4,  152 => 78,  76 => 29,  129 => 39,  126 => 38,  118 => 65,  114 => 41,  110 => 40,  90 => 28,  70 => 30,  58 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 93,  312 => 98,  309 => 97,  305 => 87,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 69,  268 => 85,  264 => 84,  258 => 81,  252 => 65,  247 => 78,  241 => 57,  229 => 55,  220 => 48,  214 => 46,  177 => 65,  169 => 29,  140 => 75,  132 => 40,  128 => 22,  107 => 37,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 53,  219 => 92,  217 => 52,  208 => 68,  204 => 39,  179 => 81,  159 => 23,  143 => 52,  135 => 53,  119 => 45,  102 => 33,  71 => 22,  67 => 21,  63 => 22,  59 => 16,  38 => 8,  94 => 44,  89 => 31,  85 => 31,  75 => 36,  68 => 19,  56 => 22,  87 => 25,  21 => 2,  26 => 3,  93 => 16,  88 => 28,  78 => 25,  46 => 15,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 48,  196 => 90,  183 => 82,  171 => 102,  166 => 28,  163 => 62,  158 => 67,  156 => 66,  151 => 59,  142 => 59,  138 => 54,  136 => 56,  121 => 40,  117 => 44,  105 => 37,  91 => 29,  62 => 19,  49 => 11,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 28,  69 => 20,  47 => 16,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 23,  123 => 46,  120 => 39,  115 => 44,  111 => 43,  108 => 36,  101 => 36,  98 => 32,  96 => 45,  83 => 36,  74 => 13,  66 => 24,  55 => 10,  52 => 18,  50 => 14,  43 => 15,  41 => 16,  35 => 6,  32 => 3,  29 => 2,  209 => 50,  203 => 111,  199 => 110,  193 => 30,  189 => 71,  187 => 84,  182 => 75,  176 => 90,  173 => 89,  168 => 72,  164 => 64,  162 => 24,  154 => 58,  149 => 51,  147 => 58,  144 => 76,  141 => 48,  133 => 69,  130 => 41,  125 => 67,  122 => 66,  116 => 41,  112 => 36,  109 => 19,  106 => 34,  103 => 32,  99 => 40,  95 => 33,  92 => 38,  86 => 37,  82 => 33,  80 => 39,  73 => 21,  64 => 23,  60 => 21,  57 => 16,  54 => 15,  51 => 16,  48 => 10,  45 => 12,  42 => 15,  39 => 14,  36 => 13,  33 => 4,  30 => 10,);
    }
}
