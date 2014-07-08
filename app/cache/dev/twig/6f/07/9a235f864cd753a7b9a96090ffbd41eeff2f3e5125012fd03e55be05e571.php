<?php

/* ::layout_guildes.html.twig */
class __TwigTemplate_6f079a235f864cd753a7b9a96090ffbd41eeff2f3e5125012fd03e55be05e571 extends Twig_Template
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
            // asset "efd3992_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_efd3992_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/efd3992_index_1.js");
            // line 13
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "efd3992"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_efd3992") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/efd3992.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "
        ";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3daeaa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3daeaa_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e3daeaa_bootstrap_1.css");
            // line 17
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
        // line 19
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2c2f727_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2c2f727_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2c2f727_index_1.css");
            // line 20
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "2c2f727"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2c2f727") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2c2f727.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "    </head>
";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

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

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "    <nav class=\"navbar navbar-inverse\" role=\"navigation\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("jdr_corp_index_homepage_duplicate");
        echo "\">Accueil JdrCorp</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar\">
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Elric <b class=\"caret\"></b></a>
                    <ul role=\"menu\" class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("Elric");
        echo "\">Index</a></li>
                        ";
        // line 40
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") == false)) {
            // line 41
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("register");
            echo "\">Inscription</a></li>
                        ";
        }
        // line 43
        echo "                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Guildes <b class=\"caret\"></b></a>
                    <ul role=\"menu\" class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("Guildes");
        echo "\">Index</a></li>
                        <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("Guildes_armes");
        echo "\">Armes & Armures</a></li>
                        <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("Guildes_artefacts");
        echo "\">Artefacts</a></li>
                        <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("Guildes_cdb");
        echo "\">Coups de bols & Mésaventures</a></li>
                        <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("Guildes_comp");
        echo "\">Compétences & Métiers</a></li>
                        <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("Guildes_equipement");
        echo "\">Equipement</a></li>
                        <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("Guildes_dice");
        echo "\">Lanceur de dés</a></li>
                        <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("Guildes_loom");
        echo "\">Loom</a></li>
                        <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("Guildes_machinations");
        echo "\">Machinations</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
  ";
        // line 62
        if ((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice"))) {
            // line 63
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo " alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
            echo twig_escape_filter($this->env, (isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "html", null, true);
            echo "</div>
  ";
        }
        // line 65
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 67
        echo "
";
    }

    // line 65
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 66
        echo "  ";
    }

    public function getTemplateName()
    {
        return "::layout_guildes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 66,  260 => 65,  255 => 67,  252 => 65,  244 => 63,  242 => 62,  233 => 56,  229 => 55,  225 => 54,  221 => 53,  217 => 52,  213 => 51,  209 => 50,  205 => 49,  201 => 48,  194 => 43,  188 => 41,  186 => 40,  182 => 39,  162 => 24,  159 => 23,  153 => 4,  131 => 23,  128 => 22,  114 => 20,  109 => 19,  95 => 17,  91 => 16,  88 => 15,  74 => 13,  69 => 12,  55 => 10,  36 => 7,  27 => 4,  22 => 1,  172 => 32,  167 => 89,  155 => 80,  150 => 78,  138 => 69,  133 => 69,  121 => 58,  116 => 56,  102 => 45,  97 => 43,  85 => 34,  80 => 32,  68 => 23,  63 => 21,  50 => 9,  45 => 9,  40 => 6,  37 => 5,  32 => 6,  29 => 2,);
    }
}
