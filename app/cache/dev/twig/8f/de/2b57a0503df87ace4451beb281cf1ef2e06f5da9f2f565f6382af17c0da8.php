<?php

/* JdrCorpElricBundle:Elric:equip.html.twig */
class __TwigTemplate_8fde2b57a0503df87ace4451beb281cf1ef2e06f5da9f2f565f6382af17c0da8 extends Twig_Template
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
        echo "<h2 class=\"StepTitle\">Armes</h2>\t

<table class=\"table table-hover\">
    <thead>
    <th></th>
    <th>Base</th>
    <th>Dégâts</th>
    <th>Mains</th>
    <th>Structure</th>
</thead>
<tbody>
  ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeArmes"]) ? $context["listeArmes"] : $this->getContext($context, "listeArmes")));
        foreach ($context['_seq'] as $context["_key"] => $context["arme"]) {
            // line 13
            echo "    <tr>
        <td class=\"col-md-4\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getNom"), "html", null, true);
            echo "</td><td class=\"col-md-2\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getBase"), "html", null, true);
            echo "%</td><td class=\"col-md-2\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getDegats"), "html", null, true);
            echo "</td><td class=\"col-md-2\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getMains"), "html", null, true);
            echo "</td><td class=\"col-md-2\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arme"]) ? $context["arme"] : $this->getContext($context, "arme")), "getStructure"), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</tbody>
</table>

<h2 class=\"StepTitle\">Armures</h2>\t

<table class=\"table table-hover\">
    <thead>
    <th></th>
    <th>Abs</th>
    <th>Abs sans heaume</th>
    <th>Enc</th>
</thead>
<tbody>
  ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeArmures"]) ? $context["listeArmures"] : $this->getContext($context, "listeArmures")));
        foreach ($context['_seq'] as $context["_key"] => $context["armure"]) {
            // line 31
            echo "    <tr>
        <td class=\"col-md-4\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["armure"]) ? $context["armure"] : $this->getContext($context, "armure")), "getNom"), "html", null, true);
            echo "</td><td class=\"col-md-2\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["armure"]) ? $context["armure"] : $this->getContext($context, "armure")), "getAbs"), "html", null, true);
            echo "</td><td class=\"col-md-2\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["armure"]) ? $context["armure"] : $this->getContext($context, "armure")), "getAbsSans"), "html", null, true);
            echo "</td><td class=\"col-md-2\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["armure"]) ? $context["armure"] : $this->getContext($context, "armure")), "getEnc"), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['armure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:equip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  78 => 32,  75 => 31,  71 => 30,  56 => 17,  39 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }
}
