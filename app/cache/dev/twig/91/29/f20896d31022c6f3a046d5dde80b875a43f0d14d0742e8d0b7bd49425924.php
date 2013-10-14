<?php

/* JdrCorpElricBundle:Elric:caracs.html.twig */
class __TwigTemplate_9129f20896d31022c6f3a046d5dde80b875a43f0d14d0742e8d0b7bd49425924 extends Twig_Template
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
        echo "<h2 class=\"StepTitle\">Les caractéristiques</h2>  
<div class=\"form-horizontal col-md-6\" style=\"margin-top:10px;margin-left:10px;\">
    <div class=\"form-group\">
        <label for=\"force\" class=\"col-lg-2 control-label\">Force</label>
        <div class=\"col-lg-4 input-group\">
            <input type=\"text\" class=\"form-control\" id=\"force\" value=\"\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"consti\" class=\"col-lg-2 control-label\">Constitution</label>
        <div class=\"col-lg-4 input-group\">
            <input type=\"text\" class=\"form-control\" id=\"consti\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"taille\" class=\"col-lg-2 control-label\">Taille</label>
        <div class=\"col-lg-4 input-group\">
            <input type=\"text\" class=\"form-control\" id=\"taille\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"intell\" class=\"col-lg-2 control-label\">Intelligence</label>
        <div class=\"col-lg-4 input-group\">
            <input type=\"text\" class=\"form-control\" id=\"intell\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"pouvoir\" class=\"col-lg-2 control-label\">Pouvoir</label>
        <div class=\"col-lg-4 input-group\">
            <input type=\"text\" class=\"form-control\" id=\"pouvoir\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"dexte\" class=\"col-lg-2 control-label\">Dextérité</label>
        <div class=\"col-lg-4 input-group\">
            <input type=\"text\" class=\"form-control\" id=\"dexte\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"appa\" class=\"col-lg-2 control-label\">Apparence</label>
        <div class=\"col-lg-4 input-group\">
            <input type=\"text\" class=\"form-control\" id=\"appa\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
</div>
<div class=\"form-horizontal col-md-5\" >
    <div class=\"form-group\">
        <label for=\"nom\" class=\"col-lg-3 control-label\">Nom</label>
        <div class=\"col-lg-8\">
            <input type=\"text\" class=\"form-control\" id=\"nom\"/>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"naiss\" class=\"control-label\">Lieu de naissance</label>
        <div class=\"col-lg-10\">
            <select class=\"form-control\" id=\"naiss\">
                <option>Argimiliar</option> 
                <option>Dharijor</option>
                <option>Dorel</option>
                <option>Filkhar</option>
                <option>Ilmiora</option>
                <option>L'île des cités pourpre</option>
                <option>Jharkor</option>
                <option>Lormyr</option>
                <option>Oin</option>
                <option>Pikarayd</option>
                <option>Shazar</option>
                <option>Le Désert des Soupirs</option>
                <option>Tarkesh</option>
                <option>Vilmir</option>
                <option>Yu</option>
                <option>Le Désert des Larmes</option>
            </select>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"sexe\" class=\"col-lg-3 control-label\">Sexe</label>
        <div class=\"col-lg-5\">
            <select class=\"form-control\" id=\"sexe\">
                <option>M</option> 
                <option>F</option>
            </select>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"age\" class=\"col-lg-3 control-label\">Age</label>
        <div class=\"col-lg-5\">
            <input type=\"number\" class=\"form-control\" id=\"age\"/>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"allure\" class=\"col-lg-3 control-label\">Allure, attitude</label>
        <div class=\"\">
            <textarea id=\"allure\"></textarea>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:caracs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
