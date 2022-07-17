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

/* C:\OpenServer\domains\test/themes/salon_of_beauty/pages/home.htm */
class __TwigTemplate_a68dff28ee9b6081b3685b6242773cfeea7c26536ca362c814ee331a1daae9d9 extends \Twig\Template
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
        echo "<section class=\"home\" id=\"home\">

    <div class=\"content\">
        <h3>Зроби своє волосся красивішим<3</h3>
        <p>У нашому салоні ти зможеш апгрейднути не тільки волосся, але й самооцінку:)</p>
        <a class=\"btn\" href=\"#popup\" data-fancybox>
        <b>Записатись</b><span class=\"fas fa-chevron-right\"></span>
        </a> 
    </div>

    <div class=\"image\">
        <img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/homeimg.svg");
        echo "\" alt=\"\">
    </div>

</section>


<!-- Services -->
";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "
<!-- Masters -->
";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("masters"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "
<!-- Reviews -->
";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("reviews"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "
<!-- Benefits -->
";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("benefits"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  82 => 26,  78 => 25,  74 => 23,  70 => 22,  66 => 20,  62 => 19,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"home\" id=\"home\">

    <div class=\"content\">
        <h3>Зроби своє волосся красивішим<3</h3>
        <p>У нашому салоні ти зможеш апгрейднути не тільки волосся, але й самооцінку:)</p>
        <a class=\"btn\" href=\"#popup\" data-fancybox>
        <b>Записатись</b><span class=\"fas fa-chevron-right\"></span>
        </a> 
    </div>

    <div class=\"image\">
        <img src=\"{{ 'assets/images/homeimg.svg'|theme }}\" alt=\"\">
    </div>

</section>


<!-- Services -->
{% partial 'services' %}

<!-- Masters -->
{% partial 'masters' %}

<!-- Reviews -->
{% partial 'reviews' %}

<!-- Benefits -->
{% partial 'benefits' %}", "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 19);
        static $filters = array("theme" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
