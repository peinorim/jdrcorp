<?php

/* ::layout_simple.html.twig */
class __TwigTemplate_89dbf02ecd14adbd989b33671201bc655f071a34226eb22db0339a49856f8d3c extends Twig_Template
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
            // asset "ba32e21_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ba32e21_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ba32e21_bootstrap.min_1.js");
            // line 10
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
        // line 12
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3daeaa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3daeaa_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e3daeaa_bootstrap_1.css");
            // line 13
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
        // line 15
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3563e27_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3563e27_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3563e27_index_1.css");
            // line 16
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
        // line 18
        echo "    </head>
";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 89
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
        echo "JdrCorp";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("jdr_corp_index_homepage_duplicate");
        echo "\">Accueil JdrCorp</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Elric <b class=\"caret\"></b></a>
                    <ul role=\"menu\" class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("Elric");
        echo "\">Index</a></li>
                        ";
        // line 36
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") == false)) {
            // line 37
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("register");
            echo "\">Inscription</a></li>
                        ";
        }
        // line 39
        echo "                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Guildes <b class=\"caret\"></b></a>
                    <ul role=\"menu\" class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("Guildes");
        echo "\">Index</a></li>
                        <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("Guildes_armes");
        echo "\">Armes & Armures</a></li>
                        <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("Guildes_artefacts");
        echo "\">Artefacts</a></li>
                        <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("Guildes_cdb");
        echo "\">Coups de bols & Mésaventures</a></li>
                        <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("Guildes_comp");
        echo "\">Compétences & Métiers</a></li>
                        <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("Guildes_equipement");
        echo "\">Equipement</a></li>
                        <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("Guildes_dice");
        echo "\">Lanceur de dés</a></li>
                        <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("Guildes_loom");
        echo "\">Loom</a></li>
                        <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("Guildes_machinations");
        echo "\">Machinations</a></li>
                    </ul>
                </li>
            </ul>
            ";
        // line 56
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") == false)) {
            // line 57
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
            // line 68
            echo "            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <form class=\"navbar-form navbar-right\" action=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("profile");
            echo "\" method=\"post\">
                        <input type=\"submit\" class=\"btn btn-default\" value=\"Mes fiches générées\"/>
                    </form>
                </li>
                <li>
                    <form class=\"navbar-form navbar-right\" action=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" method=\"post\">
                        <input type=\"submit\" class=\"btn btn-default\" value=\"Déconnexion\"/>
                    </form>
                </li>
            </ul>
            ";
        }
        // line 81
        echo "        </div>
    </nav>
    ";
        // line 83
        if ((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice"))) {
            // line 84
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo " alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
            echo twig_escape_filter($this->env, (isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "html", null, true);
            echo "</div>
    ";
        }
        // line 86
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 87
        echo "    ";
    }

    public function getTemplateName()
    {
        return "::layout_simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 47,  181 => 46,  207 => 57,  197 => 50,  180 => 48,  113 => 51,  231 => 108,  195 => 92,  170 => 74,  146 => 66,  155 => 80,  150 => 67,  160 => 37,  215 => 99,  167 => 89,  134 => 20,  124 => 43,  97 => 29,  263 => 66,  260 => 65,  255 => 67,  244 => 63,  213 => 51,  205 => 52,  188 => 50,  172 => 46,  153 => 68,  210 => 89,  202 => 94,  198 => 81,  194 => 43,  186 => 40,  137 => 33,  127 => 26,  256 => 84,  250 => 81,  242 => 62,  236 => 126,  225 => 54,  212 => 56,  206 => 88,  178 => 74,  165 => 83,  148 => 77,  84 => 40,  77 => 25,  65 => 29,  34 => 7,  100 => 38,  81 => 25,  53 => 13,  339 => 99,  336 => 98,  331 => 100,  328 => 98,  320 => 96,  318 => 95,  297 => 82,  293 => 80,  276 => 68,  271 => 87,  265 => 63,  261 => 139,  257 => 61,  253 => 60,  249 => 59,  245 => 58,  237 => 109,  233 => 70,  226 => 50,  218 => 47,  190 => 84,  184 => 49,  152 => 78,  76 => 14,  129 => 39,  126 => 48,  118 => 65,  114 => 17,  110 => 19,  90 => 16,  70 => 30,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 93,  312 => 98,  309 => 97,  305 => 87,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 69,  268 => 85,  264 => 86,  258 => 81,  252 => 65,  247 => 78,  241 => 75,  229 => 68,  220 => 48,  214 => 57,  177 => 45,  169 => 29,  140 => 75,  132 => 67,  128 => 41,  107 => 18,  61 => 18,  273 => 96,  269 => 94,  254 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 100,  219 => 92,  217 => 52,  208 => 68,  204 => 56,  179 => 81,  159 => 23,  143 => 35,  135 => 53,  119 => 37,  102 => 41,  71 => 22,  67 => 19,  63 => 21,  59 => 16,  38 => 8,  94 => 44,  89 => 27,  85 => 26,  75 => 25,  68 => 23,  56 => 14,  87 => 25,  21 => 2,  26 => 3,  93 => 16,  88 => 15,  78 => 43,  46 => 9,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 51,  196 => 90,  183 => 82,  171 => 102,  166 => 39,  163 => 62,  158 => 36,  156 => 42,  151 => 59,  142 => 59,  138 => 69,  136 => 56,  121 => 58,  117 => 18,  105 => 31,  91 => 29,  62 => 22,  49 => 11,  24 => 4,  25 => 5,  19 => 1,  79 => 26,  72 => 13,  69 => 12,  47 => 16,  40 => 6,  37 => 5,  22 => 1,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 19,  123 => 48,  120 => 47,  115 => 44,  111 => 43,  108 => 4,  101 => 30,  98 => 40,  96 => 40,  83 => 36,  74 => 13,  66 => 23,  55 => 10,  52 => 14,  50 => 9,  43 => 15,  41 => 16,  35 => 6,  32 => 6,  29 => 2,  209 => 96,  203 => 111,  199 => 58,  193 => 49,  189 => 48,  187 => 84,  182 => 75,  176 => 47,  173 => 44,  168 => 45,  164 => 44,  162 => 24,  154 => 35,  149 => 37,  147 => 58,  144 => 28,  141 => 34,  133 => 67,  130 => 41,  125 => 4,  122 => 66,  116 => 56,  112 => 89,  109 => 19,  106 => 42,  103 => 32,  99 => 48,  95 => 60,  92 => 38,  86 => 34,  82 => 33,  80 => 32,  73 => 21,  64 => 18,  60 => 15,  57 => 14,  54 => 15,  51 => 11,  48 => 10,  45 => 9,  42 => 7,  39 => 14,  36 => 7,  33 => 4,  30 => 10,);
    }
}
