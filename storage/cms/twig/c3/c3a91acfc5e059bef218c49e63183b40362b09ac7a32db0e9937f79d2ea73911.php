<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\OpenServer\domains\test/themes/salon_of_beauty/partials/benefits.htm */
class __TwigTemplate_c83afca0d2835202ae29ead912497b421d43e9e0187ec9f1388b312a4fe2bbc1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section class=\"icons-container\">

    <div class=\"icons\">
        <i class=\"fa fa-star\"></i>
        <h3>Досвід</h3>
        <p>Більш ніж 10 річний досвід роботи</p>
    </div>

    <div class=\"icons\">
        <i class=\"fa fa-shield-alt\"></i>
        <h3>Безпека</h3>
        <p>Гарантія безпеки всіх процедур</p>
    </div>

    <div class=\"icons\">
        <i class=\"fa fa-map\"></i>
        <h3>Локація</h3>
        <p>Зручне розташування в центрі Львова</p>
    </div>

    <div class=\"icons\">
        <i class=\"fa fa-clock\"></i>
        <h3>Час</h3>
        <p>Ми цінуємо Ваш час</p>
    </div>

</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/benefits.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"icons-container\">

    <div class=\"icons\">
        <i class=\"fa fa-star\"></i>
        <h3>Досвід</h3>
        <p>Більш ніж 10 річний досвід роботи</p>
    </div>

    <div class=\"icons\">
        <i class=\"fa fa-shield-alt\"></i>
        <h3>Безпека</h3>
        <p>Гарантія безпеки всіх процедур</p>
    </div>

    <div class=\"icons\">
        <i class=\"fa fa-map\"></i>
        <h3>Локація</h3>
        <p>Зручне розташування в центрі Львова</p>
    </div>

    <div class=\"icons\">
        <i class=\"fa fa-clock\"></i>
        <h3>Час</h3>
        <p>Ми цінуємо Ваш час</p>
    </div>

</section>", "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/benefits.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
