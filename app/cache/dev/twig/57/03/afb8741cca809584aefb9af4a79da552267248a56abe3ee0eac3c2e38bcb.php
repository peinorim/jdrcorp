<?php

/* ::layout_elric.html.twig */
class __TwigTemplate_5703afb8741cca809584aefb9af4a79da552267248a56abe3ee0eac3c2e38bcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2a2fbda_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2a2fbda_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/2a2fbda_jquery-1.10.2.min_1.js");
            // line 7
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "2a2fbda"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2a2fbda") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/2a2fbda.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "33654a5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_33654a5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/33654a5_jquery.smartWizard-2.0.min_1.js");
            // line 10
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "33654a5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_33654a5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/33654a5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ba32e21_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ba32e21_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ba32e21_bootstrap.min_1.js");
            // line 13
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "ba32e21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ba32e21") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ba32e21.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bec2743_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bec2743_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bec2743_index_1.js");
            // line 16
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "bec2743"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bec2743") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bec2743.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "
        ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3daeaa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3daeaa_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e3daeaa_bootstrap_1.css");
            // line 20
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "e3daeaa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3daeaa") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e3daeaa.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3563e27_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3563e27_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3563e27_index_1.css");
            // line 23
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "3563e27"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3563e27") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3563e27.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ef6aac0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef6aac0_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ef6aac0_smart_wizard_1.css");
            // line 26
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "ef6aac0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef6aac0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ef6aac0.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 28
        echo "    </head>
";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
         
         ga('create', 'UA-47119875-1', 'paocorp.com');
         ga('send', 'pageview');
    </script>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Watch My Desk";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "
    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("jdr_corp_index_homepage_duplicate");
        echo "\">Accueil JdrCorp</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Elric <b class=\"caret\"></b></a>
                    <ul role=\"menu\" class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("Elric");
        echo "\">Index</a></li>
                        ";
        // line 47
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") == false)) {
            // line 48
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("register");
            echo "\">Inscription</a></li>
                        ";
        }
        // line 50
        echo "                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Guildes <b class=\"caret\"></b></a>
                    <ul role=\"menu\" class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("Guildes");
        echo "\">Index</a></li>
                        <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("Guildes_armes");
        echo "\">Armes & Armures</a></li>
                        <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("Guildes_artefacts");
        echo "\">Artefacts</a></li>
                        <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("Guildes_cdb");
        echo "\">Coups de bols & Mésaventures</a></li>
                        <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("Guildes_comp");
        echo "\">Compétences & Métiers</a></li>
                        <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("Guildes_equipement");
        echo "\">Equipement</a></li>
                        <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("Guildes_dice");
        echo "\">Lanceur de dés</a></li>
                        <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("Guildes_loom");
        echo "\">Loom</a></li>
                        <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("Guildes_machinations");
        echo "\">Machinations</a></li>
                    </ul>
                </li>
                <li><span class=\"label label-warning pull-right hidden-xs \" style=\"font-size:100%;\">";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["nbFiches"]) ? $context["nbFiches"] : $this->getContext($context, "nbFiches")), "html", null, true);
        echo " fiches créées à ce jour</span></li>
            </ul>
            ";
        // line 68
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") == false)) {
            // line 69
            echo "            <form class=\"navbar-form navbar-right\" action=\"";
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" name=\"_useremail\" placeholder=\"email\">    
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"mot de passe\">    
                </div>
                <input type=\"hidden\" name=\"_target_path\" value=\"account\" />
                <input type=\"submit\" class=\"btn btn-default\" value=\"Connexion\"/>
            </form>
            ";
        } else {
            // line 80
            echo "            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <form class=\"navbar-form navbar-right\" action=\"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("profile");
            echo "\" method=\"post\">
                        <input type=\"submit\" class=\"btn btn-default\" value=\"Mes fiches générées\"/>
                    </form>
                </li>
                <li>
                    <form class=\"navbar-form navbar-right\" action=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" method=\"post\">
                        <input type=\"submit\" class=\"btn btn-default\" value=\"Déconnexion\"/>
                    </form>
                </li>
            </ul>
            ";
        }
        // line 93
        echo "        </div>
    </nav>
  ";
        // line 95
        if ((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice"))) {
            // line 96
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo " alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
            echo twig_escape_filter($this->env, (isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "html", null, true);
            echo "</div>
  ";
        }
        // line 98
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 100
        echo "
";
    }

    // line 98
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 99
        echo "  ";
    }

    public function getTemplateName()
    {
        return "::layout_elric.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 99,  336 => 98,  331 => 100,  328 => 98,  320 => 96,  318 => 95,  297 => 82,  293 => 80,  276 => 68,  265 => 63,  261 => 62,  257 => 61,  253 => 60,  249 => 59,  226 => 50,  218 => 47,  129 => 39,  118 => 35,  70 => 23,  231 => 108,  195 => 92,  170 => 74,  153 => 68,  146 => 66,  126 => 38,  65 => 26,  100 => 38,  215 => 99,  178 => 74,  167 => 65,  124 => 43,  81 => 25,  34 => 7,  97 => 29,  84 => 40,  77 => 35,  275 => 69,  272 => 68,  267 => 70,  245 => 58,  237 => 56,  225 => 54,  213 => 51,  200 => 44,  174 => 27,  165 => 4,  152 => 26,  150 => 67,  210 => 89,  206 => 46,  202 => 94,  198 => 81,  194 => 42,  190 => 29,  186 => 83,  53 => 13,  271 => 66,  256 => 66,  250 => 81,  233 => 55,  212 => 56,  205 => 95,  185 => 47,  181 => 46,  134 => 47,  110 => 19,  113 => 36,  207 => 57,  197 => 50,  188 => 77,  184 => 4,  180 => 48,  172 => 46,  160 => 70,  137 => 51,  127 => 47,  114 => 20,  90 => 28,  76 => 34,  58 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 93,  312 => 98,  309 => 97,  305 => 87,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 69,  268 => 85,  264 => 68,  258 => 81,  252 => 80,  247 => 78,  241 => 57,  229 => 55,  220 => 48,  214 => 46,  177 => 45,  169 => 29,  140 => 55,  132 => 40,  128 => 22,  107 => 18,  61 => 25,  273 => 96,  269 => 94,  254 => 65,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 100,  219 => 92,  217 => 52,  208 => 68,  204 => 39,  179 => 81,  159 => 61,  143 => 52,  135 => 53,  119 => 37,  102 => 31,  71 => 22,  67 => 19,  63 => 15,  59 => 16,  38 => 8,  94 => 29,  89 => 27,  85 => 26,  75 => 36,  68 => 22,  56 => 14,  87 => 25,  21 => 2,  26 => 3,  93 => 16,  88 => 15,  78 => 25,  46 => 9,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 51,  196 => 90,  183 => 82,  171 => 102,  166 => 28,  163 => 62,  158 => 36,  156 => 69,  151 => 59,  142 => 59,  138 => 54,  136 => 56,  121 => 58,  117 => 57,  105 => 31,  91 => 29,  62 => 21,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 33,  69 => 12,  47 => 9,  40 => 6,  37 => 5,  22 => 1,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 48,  123 => 37,  120 => 36,  115 => 44,  111 => 43,  108 => 4,  101 => 30,  98 => 30,  96 => 37,  83 => 25,  74 => 13,  66 => 22,  55 => 10,  52 => 14,  50 => 9,  43 => 7,  41 => 16,  35 => 5,  32 => 6,  29 => 2,  209 => 96,  203 => 78,  199 => 93,  193 => 30,  189 => 48,  187 => 84,  182 => 75,  176 => 75,  173 => 44,  168 => 45,  164 => 64,  162 => 57,  154 => 57,  149 => 37,  147 => 25,  144 => 50,  141 => 34,  133 => 23,  130 => 41,  125 => 59,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 32,  103 => 32,  99 => 48,  95 => 39,  92 => 38,  86 => 27,  82 => 26,  80 => 35,  73 => 21,  64 => 18,  60 => 15,  57 => 14,  54 => 19,  51 => 11,  48 => 10,  45 => 17,  42 => 7,  39 => 15,  36 => 7,  33 => 4,  30 => 7,);
    }
}
