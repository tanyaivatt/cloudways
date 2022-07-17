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

/* C:\OpenServer\domains\test/themes/salon_of_beauty/partials/masters.htm */
class __TwigTemplate_ad5a85c848efca069680fb8e08675ec4b9b75115c29dd6a7ab91192fe1abde1e extends \Twig\Template
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
        echo "<section class=\"masters\" id=\"masters\">

    <h1 class=\"heading\">наші  <span>майстри</span> </h1>

    <div class=\"box-container\">

        <div class=\"box\">
            <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/master-1.png");
        echo "\" alt=\"\">
            <h3>Ірина</h3>
            <span>Майстер-колорист</span>
            <div class=\"share\">
                <a href=\"#\" class=\"fab fa-facebook-f\"></a>
                <a href=\"#\" class=\"fab fa-twitter\"></a>
                <a href=\"#\" class=\"fab fa-instagram\"></a>
                <a href=\"#\" class=\"fab fa-linkedin\"></a>
            </div>
        </div>

        <div class=\"box\">
            <img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/master-2.png");
        echo "\" alt=\"\">
            <h3>Олена</h3>
            <span>Майстер-колорист</span>
            <div class=\"share\">
                <a href=\"#\" class=\"fab fa-facebook-f\"></a>
                <a href=\"#\" class=\"fab fa-twitter\"></a>
                <a href=\"#\" class=\"fab fa-instagram\"></a>
                <a href=\"#\" class=\"fab fa-linkedin\"></a>
            </div>
        </div>

        <div class=\"box\">
            <img src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/master-3.png");
        echo "\" alt=\"\">
            <h3>Оля</h3>
            <span>Майстер-колорист</span>
            <div class=\"share\">
                <a href=\"#\" class=\"fab fa-facebook-f\"></a>
                <a href=\"#\" class=\"fab fa-twitter\"></a>
                <a href=\"#\" class=\"fab fa-instagram\"></a>
                <a href=\"#\" class=\"fab fa-linkedin\"></a>
            </div>
        </div>

    </div>

</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/masters.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 32,  63 => 20,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"masters\" id=\"masters\">

    <h1 class=\"heading\">наші  <span>майстри</span> </h1>

    <div class=\"box-container\">

        <div class=\"box\">
            <img src=\"{{ 'assets/images/master-1.png'|theme }}\" alt=\"\">
            <h3>Ірина</h3>
            <span>Майстер-колорист</span>
            <div class=\"share\">
                <a href=\"#\" class=\"fab fa-facebook-f\"></a>
                <a href=\"#\" class=\"fab fa-twitter\"></a>
                <a href=\"#\" class=\"fab fa-instagram\"></a>
                <a href=\"#\" class=\"fab fa-linkedin\"></a>
            </div>
        </div>

        <div class=\"box\">
            <img src=\"{{ 'assets/images/master-2.png'|theme }}\" alt=\"\">
            <h3>Олена</h3>
            <span>Майстер-колорист</span>
            <div class=\"share\">
                <a href=\"#\" class=\"fab fa-facebook-f\"></a>
                <a href=\"#\" class=\"fab fa-twitter\"></a>
                <a href=\"#\" class=\"fab fa-instagram\"></a>
                <a href=\"#\" class=\"fab fa-linkedin\"></a>
            </div>
        </div>

        <div class=\"box\">
            <img src=\"{{ 'assets/images/master-3.png'|theme }}\" alt=\"\">
            <h3>Оля</h3>
            <span>Майстер-колорист</span>
            <div class=\"share\">
                <a href=\"#\" class=\"fab fa-facebook-f\"></a>
                <a href=\"#\" class=\"fab fa-twitter\"></a>
                <a href=\"#\" class=\"fab fa-instagram\"></a>
                <a href=\"#\" class=\"fab fa-linkedin\"></a>
            </div>
        </div>

    </div>

</section>", "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/masters.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
