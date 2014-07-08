<?php

/* JdrCorpGuildesBundle:Guildes:artefacts.html.twig */
class __TwigTemplate_db9e490d289fe2e66c10fb974b707e252a2e3f04b4939836d6073a0d6d46d134 extends Twig_Template
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
        echo "JdrCorp - Guildes - Artefacts
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
            echo "    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordionMaisons\" href=\"#collapse";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId"), "html", null, true);
            echo "\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getNom"), "html", null, true);
            echo "
                </a>
            </h4>
        </div>
        <div id=\"collapse";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId"), "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeArteType"]) ? $context["listeArteType"] : $this->getContext($context, "listeArteType")));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 21
                echo "                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "getNom"), "html", null, true);
                echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <ul>
                        ";
                // line 27
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listeArte"]) ? $context["listeArte"] : $this->getContext($context, "listeArte")));
                foreach ($context['_seq'] as $context["_key"] => $context["arte"]) {
                    // line 28
                    echo "                            ";
                    if ((($this->getAttribute($this->getAttribute((isset($context["arte"]) ? $context["arte"] : $this->getContext($context, "arte")), "getType"), "getId") == $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "getId")) && ($this->getAttribute($this->getAttribute((isset($context["arte"]) ? $context["arte"] : $this->getContext($context, "arte")), "getMaison"), "getId") == $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId")))) {
                        // line 29
                        echo "                                <li>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arte"]) ? $context["arte"] : $this->getContext($context, "arte")), "getNom"), "html", null, true);
                        echo "</li>
                            ";
                    }
                    // line 31
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arte'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "                        </ul>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:artefacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  112 => 36,  103 => 32,  97 => 31,  91 => 29,  88 => 28,  84 => 27,  77 => 23,  73 => 21,  69 => 20,  64 => 18,  57 => 14,  53 => 13,  48 => 10,  44 => 9,  40 => 7,  37 => 6,  32 => 3,  29 => 2,);
    }
}
