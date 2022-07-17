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

/* C:\OpenServer\domains\test/themes/salon_of_beauty/partials/nav.htm */
class __TwigTemplate_3225f32c5a29b5ef58bc2168b268bee341ed354a8fe414249d3692edfc3e88f5 extends \Twig\Template
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
        echo "<!-- <div class=\"container\">
    <nav class=\"nav\">
        <a class=\"nav__link\" href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Головна</a>
        <a class=\"nav__link  active\" href=\"#service\">Послуги</a>
        <a class=\"nav__link\" href=\"#about\"\">Про нас</a>
        <a class=\"nav__link\" href=\"#\">Навчання перукарів</a>
        <a class=\"nav__link\" href=\"#\">Майстер-класи</a>
    </nav>
</div> -->";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <div class=\"container\">
    <nav class=\"nav\">
        <a class=\"nav__link\" href=\"{{ 'home'|page }}\">Головна</a>
        <a class=\"nav__link  active\" href=\"#service\">Послуги</a>
        <a class=\"nav__link\" href=\"#about\"\">Про нас</a>
        <a class=\"nav__link\" href=\"#\">Навчання перукарів</a>
        <a class=\"nav__link\" href=\"#\">Майстер-класи</a>
    </nav>
</div> -->", "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/nav.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page'],
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
