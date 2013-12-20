<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_677026fea6dd66e0ace1049a8e844115468136286a2b6fd15d9882dae33cc21c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($this->getContext($context, "log"), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  87 => 20,  25 => 4,  21 => 2,  94 => 22,  85 => 19,  79 => 18,  75 => 17,  50 => 8,  41 => 9,  24 => 3,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  121 => 46,  115 => 43,  105 => 40,  101 => 24,  91 => 31,  69 => 25,  62 => 23,  51 => 12,  49 => 19,  93 => 9,  78 => 40,  27 => 4,  57 => 14,  54 => 21,  43 => 8,  40 => 8,  70 => 23,  110 => 35,  106 => 34,  102 => 33,  98 => 40,  89 => 20,  86 => 28,  81 => 28,  74 => 26,  66 => 15,  63 => 22,  42 => 15,  36 => 7,  32 => 12,  46 => 7,  37 => 12,  34 => 11,  30 => 3,  61 => 11,  55 => 13,  47 => 8,  29 => 4,  26 => 3,  22 => 2,  152 => 57,  143 => 51,  135 => 46,  123 => 47,  120 => 39,  117 => 44,  114 => 33,  112 => 42,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  92 => 21,  88 => 6,  84 => 25,  80 => 19,  76 => 23,  72 => 16,  68 => 14,  64 => 12,  60 => 19,  56 => 9,  52 => 17,  48 => 16,  44 => 10,  39 => 6,  33 => 5,  31 => 5,  19 => 1,);
    }
}
