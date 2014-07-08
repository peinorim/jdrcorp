<?php

/* JdrCorpIndexBundle:Index:profile.html.twig */
class __TwigTemplate_63502fb65cd500d5608cfa5eb0973458898e633b114b46ce42fd58b968b56cd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "JdrCorp - Elric - Mes fiches
";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") && (twig_length_filter($this->env, (isset($context["myfiches"]) ? $context["myfiches"] : $this->getContext($context, "myfiches"))) > 0))) {
            // line 7
            echo "<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Vous avez créé ";
            // line 9
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["myfiches"]) ? $context["myfiches"] : $this->getContext($context, "myfiches"))), "html", null, true);
            echo " fiches pour Elric</h3>
    </div>
    <div class=\"panel-body\">

        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["myfiches"]) ? $context["myfiches"] : $this->getContext($context, "myfiches")));
            foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
                // line 23
                echo "                <tr>
                    <td class=\"col-md-2\">Nom du personnage : ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "getPerso"), "getNom"), "html", null, true);
                echo " -  Créé le : ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "date"), "d/m/Y à H:i:s"), "html", null, true);
                echo "</td>
                    <td class=\"col-md-1\"><form action=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Elric_review", array("id" => $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "getId"), "format" => "pdf")), "html", null, true);
                echo "\" target=\"_blank\" method=\"post\"><button type=\"submit\" class=\"btn btn-primary btn-sm\">PDF</button></form></td>
                    <td class=\"col-md-1\"><form action=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Elric_review", array("id" => $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "getId"), "format" => "jpg")), "html", null, true);
                echo "\" target=\"_blank\" method=\"post\"><button type=\"submit\" class=\"btn btn-primary btn-sm\">JPG</button></form></td>
                    <td class=\"col-md-1\">
                        <button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal\">x</button>
                        <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Suppression d'une fiche de personnage</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        <div class=\"alert alert-danger\">Attention. La suppression d'une fiche est définitive. Voulez-vous tout de même la supprimer ?</div>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <form action=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Elric_delete_fiche", array("id" => $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "getId"))), "html", null, true);
                echo "\" method=\"post\">
                                            <button type=\"submit\" class=\"btn btn-danger\">Supprimer cette fiche</button>
                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            </tbody>
        </table>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "JdrCorpIndexBundle:Index:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 57,  197 => 56,  180 => 48,  113 => 51,  231 => 108,  195 => 92,  170 => 74,  146 => 66,  155 => 80,  150 => 67,  160 => 43,  215 => 99,  167 => 89,  134 => 47,  124 => 43,  97 => 29,  263 => 66,  260 => 65,  255 => 67,  244 => 63,  213 => 51,  205 => 95,  188 => 50,  172 => 46,  153 => 68,  210 => 89,  202 => 94,  198 => 81,  194 => 43,  186 => 40,  137 => 33,  127 => 26,  256 => 137,  250 => 133,  242 => 62,  236 => 126,  225 => 54,  212 => 116,  206 => 88,  178 => 74,  165 => 83,  148 => 77,  84 => 40,  77 => 25,  65 => 29,  34 => 7,  100 => 38,  81 => 25,  53 => 13,  339 => 99,  336 => 98,  331 => 100,  328 => 98,  320 => 96,  318 => 95,  297 => 82,  293 => 80,  276 => 68,  271 => 66,  265 => 63,  261 => 139,  257 => 61,  253 => 60,  249 => 59,  245 => 58,  237 => 109,  233 => 56,  226 => 50,  218 => 47,  190 => 84,  184 => 49,  152 => 78,  76 => 14,  129 => 39,  126 => 48,  118 => 65,  114 => 17,  110 => 43,  90 => 16,  70 => 30,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 93,  312 => 98,  309 => 97,  305 => 87,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 69,  268 => 85,  264 => 84,  258 => 81,  252 => 65,  247 => 78,  241 => 57,  229 => 55,  220 => 48,  214 => 46,  177 => 65,  169 => 29,  140 => 75,  132 => 67,  128 => 41,  107 => 37,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 100,  219 => 92,  217 => 52,  208 => 68,  204 => 56,  179 => 81,  159 => 23,  143 => 35,  135 => 53,  119 => 37,  102 => 41,  71 => 22,  67 => 19,  63 => 21,  59 => 16,  38 => 8,  94 => 44,  89 => 27,  85 => 26,  75 => 25,  68 => 23,  56 => 14,  87 => 25,  21 => 2,  26 => 3,  93 => 17,  88 => 37,  78 => 43,  46 => 9,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 48,  196 => 90,  183 => 82,  171 => 102,  166 => 28,  163 => 62,  158 => 67,  156 => 42,  151 => 59,  142 => 59,  138 => 69,  136 => 56,  121 => 58,  117 => 18,  105 => 31,  91 => 29,  62 => 22,  49 => 11,  24 => 4,  25 => 5,  19 => 1,  79 => 26,  72 => 13,  69 => 24,  47 => 16,  40 => 6,  37 => 5,  22 => 1,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 23,  123 => 48,  120 => 47,  115 => 44,  111 => 43,  108 => 4,  101 => 30,  98 => 40,  96 => 40,  83 => 36,  74 => 13,  66 => 23,  55 => 10,  52 => 14,  50 => 9,  43 => 15,  41 => 16,  35 => 6,  32 => 3,  29 => 2,  209 => 96,  203 => 111,  199 => 58,  193 => 30,  189 => 71,  187 => 84,  182 => 75,  176 => 47,  173 => 89,  168 => 45,  164 => 44,  162 => 24,  154 => 58,  149 => 37,  147 => 58,  144 => 76,  141 => 34,  133 => 67,  130 => 41,  125 => 67,  122 => 66,  116 => 56,  112 => 42,  109 => 19,  106 => 42,  103 => 32,  99 => 48,  95 => 60,  92 => 38,  86 => 34,  82 => 33,  80 => 32,  73 => 21,  64 => 18,  60 => 15,  57 => 14,  54 => 15,  51 => 11,  48 => 10,  45 => 9,  42 => 7,  39 => 14,  36 => 7,  33 => 4,  30 => 10,);
    }
}
