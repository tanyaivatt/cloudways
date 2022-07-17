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

/* C:\OpenServer\domains\test/themes/salon_of_beauty/partials/reviews.htm */
class __TwigTemplate_a3b42eb0c5942f12115855dd8ead5d466b3ab4f9766e2863705128738300b603 extends \Twig\Template
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
        echo "<section class=\"review\" id=\"review\">
    
    <h1 class=\"heading\"> Відгуки <span>клієнтів</span> </h1>

    <div class=\"box-container\">

        <div class=\"box\">
            <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic-1.png");
        echo "\" alt=\"\">
            <h3>@tali_markun</h3>
            <div class=\"stars\">
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star-half-alt\"></i>
            </div>
            <p class=\"text\">Шикарне фарбування, дякую майстрові і Вам! Як завжди, найкращі!!!)</p>
        </div>

        <div class=\"box\">
            <img src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic-2.png");
        echo "\" alt=\"\">
            <h3>@ulyanytskaa</h3>
            <div class=\"stars\">
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star-half-alt\"></i>
            </div>
            <p class=\"text\">Дуже дякую Вам та Ірині. Вже тричі у вас фарбуюсь і кожен раз перевершуєте мої очікування!</p>
        </div>

        <div class=\"box\">
            <img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic-3.png");
        echo "\" alt=\"\">
            <h3>@_fluffy__cloud_</h3>
            <div class=\"stars\">
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star-half-alt\"></i>
            </div>
            <p class=\"text\">Щиро дякую! Результат неймовірний!!!<З </p>
        </div>

    </div>

</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/reviews.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 34,  64 => 21,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"review\" id=\"review\">
    
    <h1 class=\"heading\"> Відгуки <span>клієнтів</span> </h1>

    <div class=\"box-container\">

        <div class=\"box\">
            <img src=\"{{ 'assets/images/pic-1.png'|theme }}\" alt=\"\">
            <h3>@tali_markun</h3>
            <div class=\"stars\">
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star-half-alt\"></i>
            </div>
            <p class=\"text\">Шикарне фарбування, дякую майстрові і Вам! Як завжди, найкращі!!!)</p>
        </div>

        <div class=\"box\">
            <img src=\"{{ 'assets/images/pic-2.png'|theme }}\" alt=\"\">
            <h3>@ulyanytskaa</h3>
            <div class=\"stars\">
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star-half-alt\"></i>
            </div>
            <p class=\"text\">Дуже дякую Вам та Ірині. Вже тричі у вас фарбуюсь і кожен раз перевершуєте мої очікування!</p>
        </div>

        <div class=\"box\">
            <img src=\"{{ 'assets/images/pic-3.png'|theme }}\" alt=\"\">
            <h3>@_fluffy__cloud_</h3>
            <div class=\"stars\">
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star-half-alt\"></i>
            </div>
            <p class=\"text\">Щиро дякую! Результат неймовірний!!!<З </p>
        </div>

    </div>

</section>", "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/reviews.htm", "");
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
